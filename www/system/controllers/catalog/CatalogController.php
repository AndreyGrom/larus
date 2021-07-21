<?php

class CatalogController extends Controller {
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

    public function GetCategory($alias){
        $result = false;
        $sql = "SELECT * FROM `".db_pref."catalog_c` WHERE `ALIAS` = '$alias' AND `PUBLIC`=1 LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
        }
        return $result;
    }

    public function Index(){



        if (!$this->config->CatalogEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (isset($this->get['tag'])){
            $this->ShowItems();
        }
        elseif (count($this->query)==1 && is_numeric($this->query[0])){
            $this->ShowItem($this->query[0]);
        }
        elseif ($this->query){ // если есть алиас

            $this->alias = end($this->query);
            if (strpos($this->alias, 'page') === false) {

                $row = $this->GetCategory($this->alias);
                $this->categories = $row;
                if ($row){ // Если алиас принадлежит категории

                    $this->cid = $row['ID']; // получаем id категории для вывода всех материалов подкатегорий
                    $this->alias = $row['ALIAS'];
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
                $this->ShowMainPage();
            }
        } else {
            $this->ShowMainPage();
        }

        return $this->content;
    }

    public function ShowMainPage(){
        $this->page_title = $this->config->CatalogModuleTitle;
        $this->meta_title = $this->config->CatalogModuleTitle.' - '. $this->config->SiteTitle;
        $this->meta_description = $this->config->CatalogModuleDescription;
        $this->meta_keywords = $this->config->CatalogModuleKeywords;
        $this->template = 'default';
        $this->ShowItems();
        //$this->ShowCategories();
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."catalog_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);

        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их

            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'catalog/'.$row['IMAGE'], $this->config->CatalogImageWidthCategoryList,$this->config->CatalogImageHeightCategoryList,'','catalog');
                }

                $this->categories[] = $row;
            }


            $this->assign(array(
                'page_title'       => $this->page_title,
                'desc'             => $this->desc,
                'categories'       => $this->categories,
                'cid'              => $this->cid,
            ));
            $this->SetPath('catalog/list/');
            $this->content = $this->SetTemplate('default.tpl');
            return true;
        }
    }

    public function ShowItems(){
        $sort = $this->config->CatalogItemListSort;
        $this->breadcrumbs[] = array('text' => 'Главная', 'href' => '/');
        if($this->cid > 0){
            $this->breadcrumbs[] = array('text' => $this->config->CatalogModuleTitle, 'href' => '/catalog');
            $this->breadcrumbs[] = array('text' => $this->page_title, 'href' => '');
        } elseif(isset($this->get['tag'])){
            $tag = urldecode($this->get['tag']);
            $this->page_title = $tag;
            $this->breadcrumbs[] = array('text' => $this->config->CatalogModuleTitle, 'href' => '/catalog');
            $this->breadcrumbs[] = array('text' => $this->page_title, 'href' => '');
        }
        else{
            $this->breadcrumbs[] = array('text' => $this->config->CatalogModuleTitle, 'href' => '');
        }
        $sql = "SELECT i.*, @id:=i.ID,
        (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'catalog' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT

        FROM ".db_pref."catalog_i i";

        if (isset($this->get['tag'])){
            $sql .= "  WHERE i.TAGS LIKE '%,$tag,%' AND i.PUBLIC=1";
            $url = '/catalog/tag=' .  $tag . '/';
        }
        elseif ($this->cid==0){
            $sql .= " WHERE i.PUBLIC=1";
            $url = '/catalog/';
        } else {
            $sql .= " WHERE i.PARENT LIKE '%,$this->cid,%' AND i.PUBLIC=1";
            $url = '/catalog/' . $this->alias . '/';
        }
        $sql .= " ORDER BY i.SORT, i.ID ASC";

        $params = array(
            'sql' => $sql,
            'per_page' => 100,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => $url,
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);

        $query = $result['query'];
        $num_pages = $result['num_pages'];
        $pagination = $result['pagination'];
        $items = $result['items'];
        foreach ($items as &$i){
            $i["DATE_PUBL"] = $this->DateFormat($i["DATE_PUBL"]);
            $i["DATE_EDIT"] = $this->DateFormat($i["DATE_EDIT"]);
            $i['PARENTS'] =   explode(',',  $i['PARENT']);
            $i['PARENTS'] = array_diff($i['PARENTS'], array(''));
            $i['PARENTS'] = $i['PARENTS'][1];
            if ($i["IMAGES"] !==''){
                $i["IMAGES"] = explode(',', $i["IMAGES"]);
            }
        }

        if ($this->meta_title == ''){
            $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
        }

        $sql = "SELECT * FROM agcms_catalog_c";
        $categories = $this->db->select($sql);
        $categories = Func::getInstance()->getStructure($categories);
//var_dump($categories);
//var_dump($this->categories);
        $this->assign(array(

            'page_title'       => $this->page_title,
            'items'            => $items,
            'cid'              => $this->cid,
            'desc'             => $this->desc,
            'desc2'            => $this->desc2,
            'pagination'       => $pagination,
            'num_pages'        => $num_pages,
            'category'         => $this->categories,
            'categories'         => $categories,
        ));

        $this->SetPath('catalog/list/');
        if ($this->template == ''){
            $this->template = 'default';
        }
        if (count($this->categories) == 0){
            $this->content = $this->SetTemplate('default.tpl');
        } else {
            $this->content = $this->SetTemplate('default2.tpl');
        }

    }

    public function ShowItem($id=0){;
        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."catalog_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."catalog_i`  WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
        }
        $categories = array();
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $row = $this->db->fetch_array($query);
            $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
            $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
            $item = $row;
            $item['CONTENT'] = Func::getInstance()->syntax_filter( $item['CONTENT']);

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
            if (trim($this->meta_description == '')){
                //$this->meta_description = mb_substr(trim(strip_tags($item['SHORT_CONTENT'])),0,200);
            }
            if (trim($this->meta_description == '')){
                //$this->meta_description = mb_substr(trim(strip_tags($item['CONTENT'])),0,200);
            }
            $this->meta_keywords = $row['META_KEYWORDS'];
            $this->page_title = $row['TITLE'];
            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }
            $this->page_title = $row["TITLE"];

            if ($item["IMAGES"] !==''){
                $item["IMAGES"] = explode(',', $item["IMAGES"]);
            }


            /*Получаем список категорий, к которым принадлежит материал*/
            $str = $row['PARENT'];
            $parents = explode(",",$str);
            $parents = array_filter($parents);
            sort($parents);
            $str = implode(",",$parents);
            $sql = "SELECT * FROM `".db_pref."catalog_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
            $query = $this->db->query($sql);
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $categories[] = $row;
            }
            $category = $categories[0];
            /*///////////////////*/
            $PID  = $category['ID'];
            $sql = "SELECT * FROM agcms_catalog_i WHERE PARENT LIKE '%,$PID,%' ORDER BY SORT, ID ASC" ;
            $items = $this->db->select($sql);

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
                $sql = "SELECT * FROM `".db_pref."catalog_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
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
                $sql = "SELECT * FROM `".db_pref."catalog_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->CatalogCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->premoderation = $this->config->CatalogCommentsModerationEnabled;
                $comments->captcha = $this->config->CatalogCommentsCaptchaEnabled;
                $comments->tpl_view = $this->config->CatalogCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->CatalogCommentsTemplateForm.'.tpl';


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


/*            $this->breadcrumbs = array(
                array('text' => 'Главная', 'href' => '/'),
                array('text' => $categories[0]['TITLE'], 'href' => '/catalog/'.$categories[0]['ALIAS']),
                array('text' => $item['TITLE'], 'href' => ''),
            );*/
            $this->breadcrumbs[] = array('text' => 'Главная', 'href' => '/');
            $this->breadcrumbs[] = array('text' => 'Каталог', 'href' => '/catalog/');
            foreach ($categories as $c){
                $this->breadcrumbs[] = array('text' => $c['TITLE'], 'href' => '/catalog/'.$c['ALIAS']);
            }
            $this->breadcrumbs[] = array('text' => $item['TITLE'], 'href' => '');



            $this->assign(array(
                'alias'            => $this->alias,
                'items'            => $items,
                'item'             => $item,
                'category'         => $category,
                'other_items'      => $other_items,
                'parents'          => $categories,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'page_title'       => $this->page_title ,
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'catalog/'.$item['SKIN'], $this->config->CatalogImageWidthItem,$this->config->CatalogImageHeightItem,'','catalog'),
                'images'           => explode(",",$item['IMAGES']),
            ));

            $this->SetPath('catalog/single/');
            $this->content = $this->SetTemplate($item['TEMPLATE'].'.tpl');
        }
    }
}
?>