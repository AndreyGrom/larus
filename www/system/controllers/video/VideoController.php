<?php

class VideoController extends Controller {
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
        if (!$this->config->VideoEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (isset($this->get['tag'])){
            $this->ShowItems();
        }
        elseif (count($this->query)==1 && is_numeric($this->query[0])){
            $this->ShowItem($id = $this->query[0]);
        }
        elseif ($this->GetAliasFromQuery()!==''){ // если есть алиас
            $this->alias = end($this->query);
            $sql = "SELECT * FROM `".db_pref."video_c` WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){ // Если алиас принадлежит категории
                $row = $this->db->fetch_array($query);
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
            $this->page_title = $this->config->VideoModuleTitle;
            $this->meta_title = $this->config->VideoModuleTitle.' - '. $this->config->SiteTitle;
            $this->meta_description = $this->config->VideoModuleDescription;
            $this->meta_keywords = $this->config->VideoModuleKeywords;
            $this->template = 'default';
            $this->ShowItems();
            //$this->ShowCategories();
        }
        return $this->content;
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."video_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'video/'.$row['IMAGE'], $this->config->VideoImageWidthCategoryList,$this->config->VideoImageHeightCategoryList,'','video');
                }

                $this->categories[] = $row;
            }
            $this->assign(array(
                'page_title'       => $this->page_title,
                'categories'       => $this->categories,
                'cid'              => $this->cid,
            ));
            $this->SetPath('video/list/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
            return true;
        }
    }

    public function ShowItems(){
        $url = '';
        $sort = $this->config->VideoItemListSort;
        $this->breadcrumbs[] = array('text' => 'Главная', 'href' => '/');
        if($this->cid > 0 || isset($this->get['tag'])){
            if (isset($this->get['tag'])){
                $tag = urldecode($this->get['tag']);
                $this->page_title = $tag;
                $url .='tag='.$this->get['tag'].'/';
            }
            $this->breadcrumbs[] = array('text' => $this->config->VideoModuleTitle, 'href' => '/video');
            $this->breadcrumbs[] = array('text' => $this->page_title, 'href' => '');
        } else{
            $this->breadcrumbs[] = array('text' => $this->config->VideoModuleTitle, 'href' => '');
        }
        if (isset($this->get['tag'])){
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'video' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."video_i`  WHERE `TAGS` LIKE '%,$tag,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        }
        elseif($this->cid==0){
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'video' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."video_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } else {
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'video' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."video_i`  WHERE `PARENT` LIKE '%,$this->cid,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
            $url .=$this->alias.'/';
        }


        $params = array(
            'sql' => $sql,
            'per_page' => $this->config->VideoItemListPerPage,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => '/video/'.$url,
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);
        $query = $result['query'];
        $num_pages = $result['num_pages'];

        $pagination = $result['pagination'];
        $items = array();
        if ($this->db->num_rows($query) > 0){
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
                $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
                if ($row['SKIN']!==''){
                    $row['SKIN_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'video/'.$row['SKIN'], $this->config->VideoImageWidthItemList,$this->config->VideoImageHeightItemList,'','video');
                }
                $items[] = $row;
            }

            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }

            $this->assign(array(
                'page_title'       => $this->page_title,
                'items'            => $items,
                'cid'              => $this->cid,
                'desc'             => $this->desc,
                'desc2'            => $this->desc2,
                'pagination'       => $pagination,
                'num_pages'        => $num_pages,
            ));

            $this->SetPath('video/list/');
            if ($this->template == ''){
                $this->template = 'default';
            }
            $this->content = $this->SetTemplate($this->template.'.tpl');
        }
    }

    public function ShowItem($id=0){;
        $this->SetJS('/system/controllers/video/jquery.fitvids.js');
        $this->SetJS('/system/controllers/video/fitvids.js');
        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."video_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."video_i`  WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
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
            $sql = "SELECT * FROM `".db_pref."video_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
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
                $sql = "SELECT * FROM `".db_pref."video_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
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
                $sql = "SELECT * FROM `".db_pref."video_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->VideoCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->premoderation = $this->config->VideoCommentsModerationEnabled;
                $comments->captcha = $this->config->VideoCommentsCaptchaEnabled;
                $comments->tpl_view = $this->config->VideoCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->VideoCommentsTemplateForm.'.tpl';


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
                array('text' => $this->config->VideoModuleTitle, 'href' => '/video'),
                array('text' => $categories[0]['TITLE'], 'href' => '/video/'.$categories[0]['ALIAS']),
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
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'video/'.$item['SKIN'], $this->config->VideoImageWidthItem,$this->config->VideoImageHeightItem,'','video'),
                'images'           => explode(",",$item['IMAGES']),
            ));

            $this->SetPath('video/single/');
            $this->content = $this->SetTemplate($item['TEMPLATE'].'.tpl');
        }
    }
}
?>