<?php

class PartnersController extends Controller {
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
        if (!$this->config->PartnersEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (count($this->query) == 2 && $this->query[1]=='tag'){
            $this->ShowItems();
        }
        elseif (count($this->query)==1 && is_numeric($this->query[0])){
            $this->ShowItem($id = $this->query[0]);
        }
        elseif ($this->query && !isset($this->get['page'])){ // если есть алиас
            $this->alias = end($this->query);
            $sql = "SELECT * FROM `".db_pref."partners_c` WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
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
            $this->page_title = $this->config->PartnersModuleTitle;
            $this->meta_title = $this->config->PartnersModuleTitle.' - '. $this->config->SiteTitle;
            $this->meta_description = $this->config->PartnersModuleDescription;
            $this->meta_keywords = $this->config->PartnersModuleKeywords;
            $this->template = 'default';
            $this->ShowItems();
            //$this->ShowCategories();
        }
        return $this->content;
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."partners_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'partners/'.$row['IMAGE'], $this->config->PartnersImageWidthCategoryList,$this->config->PartnersImageHeightCategoryList,'','partners');
                }

                $this->categories[] = $row;
            }
            $this->assign(array(
                'page_title'       => $this->page_title,
                'categories'       => $this->categories,
                'cid'              => $this->cid,
            ));
            $this->SetPath('partners/list/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
            return true;
        }
    }

    public function GetCategory($id){
        $result = array();
        $sql = "SELECT * FROM `".db_pref."partners_c` WHERE ID = $id LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
        }
        return $result;
    }

    public function ShowItems(){
        $sort = $this->config->PartnersItemListSort;
        if (count($this->query) == 2 && $this->query[1]=='tag'){
            $tag = urldecode($this->query[0]);
            $this->page_title = $tag;
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'partners' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."partners_i`  WHERE `TAGS` LIKE '%,$tag,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } elseif($this->cid==0){
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'partners' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."partners_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } else {
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'partners' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."partners_i`  WHERE `PARENT` LIKE '%,$this->cid,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        }


        $params = array(
            'sql' => $sql,
            'per_page' => 100,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => '/partners/',
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);


        $num_pages = $result['num_pages'];
        $pagination = $result['pagination'];
        $items = $result['items'];

        if ($items){
            foreach ($items as &$item){
                $item["DATE_PUBL"] = $this->DateFormat($item["DATE_PUBL"]);
                $item["DATE_EDIT"] = $this->DateFormat($item["DATE_EDIT"]);
                if ($item['SKIN']!==''){
                    $item['SKIN_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'partners/'.$item['SKIN'], $this->config->NewsImageWidthItemList,$this->config->NewsImageHeightItemList,'','partners');
                }

                $item['PARENTS'] =   explode(',',  $item['PARENT']);
                $item['PARENTS'] = array_diff($item['PARENTS'], array(''));
                $item['PARENTS'] = $item['PARENTS'][1];
            }

        }


        if ($this->meta_title == ''){
            $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
        }

        $sql = "SELECT * FROM agcms_partners_c";
        $categories = $this->db->select($sql);

        $this->assign(array(
            'page_title'       => $this->page_title,
            'items'            => $items,
            'cid'              => $this->cid,
            'desc'             => $this->desc,
            'desc2'            => $this->desc2,
            'pagination'       => $pagination,
            'num_pages'        => $num_pages,
            'categories'         => $categories,
        ));

        /*            $this->breadcrumbs = array(
                        array('text' => 'Главная', 'href' => '/'),
                        array('text' => $categories[0]['TITLE'], 'href' => '/partners/'.$categories[0]['ALIAS']),
                        array('text' => $item['TITLE'], 'href' => ''),
                    );*/

        $this->SetPath('partners/list/');
        if ($this->template == ''){
            $this->template = 'default';
        }
        $this->content = $this->SetTemplate($this->template.'.tpl');
    }

    public function ShowItem($id=0){;
        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."partners_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."partners_i`  WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
        }
        $categories = array();
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){

            $row = $this->db->fetch_array($query);
            $sql = "UPDATE `".db_pref."partners_i` SET VIEWS = VIEWS+1 WHERE ID = ".$row['ID'];
            $this->db->query($sql);

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
            $sql = "SELECT * FROM `".db_pref."partners_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
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
                $sql = "SELECT * FROM `".db_pref."partners_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
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
                $sql = "SELECT * FROM `".db_pref."partners_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->PartnersCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->premoderation = $this->config->PartnersCommentsModerationEnabled;
                $comments->captcha = $this->config->PartnersCommentsCaptchaEnabled;
                $comments->tpl_view = $this->config->PartnersCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->PartnersCommentsTemplateForm.'.tpl';


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


            $this->breadcrumbs = array(
                array('text' => 'Главная', 'href' => '/'),
                array('text' => $categories[0]['TITLE'], 'href' => '/partners/'.$categories[0]['ALIAS']),
                array('text' => $item['TITLE'], 'href' => ''),
            );




            $this->assign(array(
                'item'             => $item,
                'other_items'      => $other_items,
                'parents'          => $categories,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'page_title'       => $this->page_title ,
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'partners/'.$item['SKIN'], $this->config->PartnersImageWidthItem,$this->config->PartnersImageHeightItem,'','partners'),
                'images'           => explode(",",$item['IMAGES']),
            ));

            $this->SetPath('partners/single/');
            $this->content = $this->SetTemplate($item['TEMPLATE'].'.tpl');
        }
    }
}
?>