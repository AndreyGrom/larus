<?php

class BlogController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->row = array();
        $this->cid = 0;
        $this->categories = array();
        $this->template = '';
        $this->alias = '';
        $this->desc = '';
        $this->desc2 = '';
    }
    public function Index(){

        if (!$this->config->BlogEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (isset($this->get['tag'])){
            $this->ShowItems();
        }
        elseif (isset($this->get['cats']) && count($this->get) == 1){
            $this->ShowItems();
        }
        elseif (count($this->query) == 2 && $this->query[1]=='tag'){
            $this->ShowItems();
        }
        elseif (count($this->query)==1 && is_numeric($this->query[0])){
            $this->ShowItem($id = $this->query[0]);
        }
        elseif ($this->query && !isset($this->get['page'])){ // если есть алиас
            //$this->alias = end($this->query);
            $this->alias = $this->query[0];
            $sql = "SELECT * FROM `".db_pref."blog_c` WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){ // Если алиас принадлежит категории
                $row = $this->db->fetch_array($query);
                $this->cid = $row['ID']; // получаем id категории для вывода всех материалов подкатегорий
                $this->template = $row['TEMPLATE'];
                $this->page_title = $row['TITLE'];
                $this->desc = $row['DESC'];
                $this->desc2 = $row['DESC2'];
                $this->meta_title = $row['META_TITLE'];
                $this->meta_description = $row['META_DESC'];
                $this->meta_keywords = $row['META_KEYWORDS'];

                if (!$this->ShowCategories()){ // если нет подкатегорий
                    $this->ShowItems();       // то выводим материалы
                }
            } else { // Если алиас принадлежит материалу, то выводим его
                $this->ShowItem();
            }
        } else { // если нет алиаса, то выводим корневые категории
            $this->page_title = $this->config->BlogModuleTitle;
            $this->meta_title = $this->config->BlogModuleTitle.' - '. $this->config->SiteTitle;
            $this->meta_description = $this->config->BlogModuleDescription;
            $this->meta_keywords = $this->config->BlogModuleKeywords;
            $this->template = 'default';
            $this->ShowItems();
            //$this->ShowCategories();
        }
        return $this->content;
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."blog_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'blog/'.$row['IMAGE'], $this->config->BlogImageWidthCategoryList,$this->config->BlogImageHeightCategoryList,'','blog');
                }

                $this->categories[] = $row;
            }
            $this->assign(array(
                'page_title'       => $this->page_title,
                'categories'       => $this->categories,
                'cid'              => $this->cid,
            ));
            $this->SetPath('blog/list/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
            return true;
        }
    }

    public function GetCategory($id){
        $result = array();
        $sql = "SELECT * FROM `".db_pref."blog_c` WHERE ID = $id LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
        }
        return $result;
    }

    public function ShowItems(){
        $sort = $this->config->BlogItemListSort;
        $where = array();
        $url_plus = '';

        if(isset($this->get['tag'])){
            $tag = urldecode($this->get['tag']);
            $this->page_title = $tag;
            $where[] = "TAGS LIKE '%,$tag,%' AND PUBLIC=1";
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'blog' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."blog_i`  WHERE TAGS LIKE '%,$tag,%' AND PUBLIC=1 ORDER BY `DATE_PUBL` $sort";
        } elseif($this->cid == 0){
            //$where[] = "`PUBLIC`=1";
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'blog' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."blog_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } else {
            $where[] = "PARENT LIKE '%,$this->cid,%' AND PUBLIC=1";
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'blog' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."blog_i`  WHERE `PARENT` LIKE '%,$this->cid,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        }

        $cats = array();
        $categories = $this->GetCategories();

        if (isset($this->get['cats'])){
            $url_plus .= "/cats=" . $this->get['cats'];
            $cats = explode(',', $this->get['cats']);
            $where2 = array();
            foreach ($cats as $c){
                $where2[] = "PARENT LIKE '%,$c,%'";
            }
            $where[] = "(" . implode(" OR ", $where2) . ")";
        } else{
            $where2 = array();
            foreach ($categories as $c){
                $where2[] = "PARENT LIKE '%," . $c['ID'] . ",%'";
            }
            $where2[] = "PARENT LIKE '%,,%'";
            $where[] = "(" . implode(" OR ", $where2) . ")";
        }

        if (count($where) > 0){
            $where = " WHERE " . implode(' AND ', $where);
        }
        $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM ".db_pref."comments WHERE CONTROLLER = 'blog' AND MATERIAL_ID = @id) AS COMMENTS_COUNT FROM ".db_pref."blog_i $where ORDER BY DATE_PUBL $sort";

        $params = array(
            'sql' => $sql,
            'per_page' => $this->config->BlogItemListPerPage,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => '/blog/',
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);


        $num_pages = $result['num_pages'];
        $pagination = $result['pagination'];
        $items = $result['items'];

        if ($items){
            foreach ($items as &$item){
                $item["DATE_PUBL"] = $this->DateFormat2($item["DATE_PUBL"]);
                $item["DATE_EDIT"] = $this->DateFormat2($item["DATE_EDIT"]);
                if ($item['SKIN']!==''){
                    $item['SKIN_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'blog/'.$item['SKIN'], $this->config->NewsImageWidthItemList,$this->config->NewsImageHeightItemList,'','blog');
                }
            }

        }

        if ($this->meta_title == ''){
            $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
        }
        //$items['SHORT_CONTENT'] = strip_tags($items['SHORT_CONTENT']);



        $this->assign(array(
            'page_title'       => $this->page_title,
            'items'            => $items,
            'cid'              => $this->cid,
            'desc'             => $this->desc,
            'desc2'            => $this->desc2,
            'pagination'       => $pagination,
            'num_pages'        => $num_pages,
            'categories' => $categories,
            'cats' => $cats,
            'url_plus' => $url_plus,
        ));


        /*            $this->breadcrumbs = array(
                        array('text' => 'Главная', 'href' => '/'),
                        array('text' => $categories[0]['TITLE'], 'href' => '/blog/'.$categories[0]['ALIAS']),
                        array('text' => $item['TITLE'], 'href' => ''),
                    );*/

        $this->SetPath('blog/');

        $this->content = $this->SetTemplate('index.tpl');
    }

    public function ShowItem($id=0){;
        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."blog_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."blog_i`  WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
        }
        $categories = array();
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){

            $row = $this->db->fetch_array($query);

            $sql = "UPDATE `".db_pref."blog_i` SET VIEWS = VIEWS+1 WHERE ID = ".$row['ID'];
            $this->db->query($sql);

            $row["DATE_PUBL"] = $this->DateFormat2($row["DATE_PUBL"]);
            $row["DATE_EDIT"] = $this->DateFormat2($row["DATE_EDIT"]);
            $item = $row;
            $item['CONTENT'] = Func::getInstance()->syntax_filter( $item['CONTENT']);

            if ($item["IMAGES"] !==''){
                $item["IMAGES"] = explode(',', $item["IMAGES"]);
            }

            $str = $row['TAGS'];
            $tags = explode(",",$str);
            $tags = array_filter($tags);
            sort($tags);

            $files = array();
            $str = $row["FILES"];
            if ($str!==''){
                $files = unserialize($str);
            }

            $this->meta_title = $row['META_TITLE'];
            $this->meta_description = $row['META_DESC'];
            $this->meta_keywords = $row['META_KEYWORDS'];
            $this->page_title = $row['TITLE'];
            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }
            $this->page_title = $row["TITLE"];


            /*Получаем список категорий, к которым принадлежит материал*/
            $str = $row['PARENT'];
            $parents = explode(",",$str);
            $parents = array_filter($parents);
            sort($parents);
            $str = implode(",",$parents);
            $sql = "SELECT * FROM `".db_pref."blog_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
            $query = $this->db->query($sql);
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $categories[] = $row;
            }
            /*///////////////////*/

            /*Выбираем похожие материалы*/
            $other_items = array();
            if (count($tags) > 0){
                $sql = "";
                foreach ($tags as $k=>$t){
                    if ($k>0){
                        $sql.= " OR `TAGS` LIKE '%$t%'";
                    } else {
                        $sql.= "`TAGS` LIKE '%$t%'";
                    }
                }
                $sql = "SELECT * FROM `".db_pref."blog_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            if (count($other_items) == 0){
                $sql = "";
                foreach ($parents as $k=>$t){
                    if ($k>0){
                        $sql.= " OR `PARENT` LIKE '%$t%'";
                    } else {
                        $sql.= "`PARENT` LIKE '%$t%'";
                    }
                }
                $sql = "SELECT * FROM `".db_pref."blog_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->BlogCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->premoderation = $this->config->BlogCommentsModerationEnabled;
                $comments->captcha = $this->config->BlogCommentsCaptchaEnabled;
                $comments->tpl_view = $this->config->BlogCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->BlogCommentsTemplateForm.'.tpl';


                $comments ->Index();
                $this->smarty->assign(array(
                    'comments_form'                 => $comments->comments_form,
                    'comments'                      => $comments->comments,
                ));
                if (count($comments->js) > 0){
                    foreach ($comments->js as $j){
                        $this->js[]=$j;
                    }
                }
                if (count($comments->css) > 0){
                    foreach ($comments->css as $j){
                        $this->css[]=$j;
                    }
                }
            }

            $nex_id = $item['ID'] + 1;
            $prev_id = $item['ID'] - 1;
            $sql = "SELECT * FROM agcms_blog_i WHERE ID = ";
            if ($row = $this->db->select($sql . $nex_id)){
                $next = $row[0];
            }
            if ($row = $this->db->select($sql . $prev_id)){
                $prev = $row[0];
            }
            $this->breadcrumbs = array(
                array('text' => 'Главная', 'href' => '/'),
                array('text' => $categories[0]['TITLE'], 'href' => '/blog/'.$categories[0]['ALIAS']),
                array('text' => $item['TITLE'], 'href' => ''),
            );


            $cats = array();
            if (isset($this->get['cats'])){
                $cats = explode(',', $this->get['cats']);
            }



            $this->assign(array(
                'item'             => $item,
                'other_items'      => $other_items,
                'parents'          => $categories,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'page_title'       => $this->page_title ,
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'blog/'.$item['SKIN'], $this->config->BlogImageWidthItem,$this->config->BlogImageHeightItem,'','blog'),
                'images'           => explode(",",$item['IMAGES']),
                'next' => $next,
                'prev' => $prev,
                'categories' => $this->GetCategories(),
                'cats' => $cats,
            ));

            $this->SetPath('blog/');
            $this->content = $this->SetTemplate('item.tpl');
        }
    }

    public function GetCategories($parent = 0){
        $sql = "SELECT * FROM agcms_blog_c WHERE PARENT = $parent";
        $items = $this->db->select($sql);
        return $items;
    }

    public function GetTags(){
        $sql = "SELECT TAGS FROM agcms_blog_i";
        $rs = array();
        if ($items = $this->db->select($sql)){
            foreach ($items as $i){
                if (trim($i) !== ""){
                    $rs = array_merge($rs, explode(',', $i['TAGS']));
                }
            }
            $rs = array_diff($rs, array(''));
            $rs = array_unique($rs);
        }

    }
}
?>