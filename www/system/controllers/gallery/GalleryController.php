<?php

class GalleryController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->row = array();
        $this->cid = 0;
        $this->c_name = '';
        $this->categories = array();
        $this->template = '';
        $this->alias = '';
    }
    public function Index(){
        if (!$this->config->GalleryEnabled){
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
        elseif ($this->query){ // если есть алиас
            $this->alias = end($this->query);
            $sql = "SELECT * FROM `".db_pref."gallery_c` WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){ // Если алиас принадлежит категории
                $row = $this->db->fetch_array($query);
                $this->cid = $row['ID']; // получаем id категории для вывода всех материалов подкатегорий
                $this->template = $row['TEMPLATE'];
                $this->c_name = $row['TITLE'];
                $this->desc = $row['DESC'];
                $this->desc2 = $row['DESC2'];

                if (!$this->ShowCategories()){ // если нет подкатегорий
                    $this->ShowItems();       // то выводим материалы
                }
            } else { // Если алиас принадлежит материалу, то выводим его
                $this->ShowItem();
            }
        } else { // если нет алиаса, то выводим корневые категории
            $this->c_name = $this->config->GalleryModuleTitle;
            $this->template = 'default_cat_list';
            $this->ShowItems();
            //$this->ShowCategories();
        }
        return $this->content;
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."gallery_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'gallery/'.$row['IMAGE'], $this->config->GalleryImageWidthCategoryList,$this->config->GalleryImageHeightCategoryList);
                }

                $this->categories[] = $row;
            }
            $this->assign(array(
                'site_title'       => $this->c_name.' - '. $this->config->SiteTitle,
                'page_title'       => $this->c_name,
                'categories'       => $this->categories,
                'c_name'           => $this->c_name,
                'cid'              => $this->cid,
            ));
            $this->SetPath('gallery/categories/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
            return true;
        }
    }

    public function ShowItems(){
        $sort = $this->config->GalleryItemListSort;
        if (count($this->query) == 2 && $this->query[1]=='tag'){
            $tag = urldecode($this->query[0]);
            $this->c_name = $tag;

            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'gallery' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."gallery_i`  WHERE `TAGS` LIKE '%,$tag,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } elseif($this->cid==0){
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'gallery' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."gallery_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        } else {
            $sql = "SELECT *, @id:=ID, (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'gallery' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT FROM `".db_pref."gallery_i`  WHERE `PARENT` LIKE '%,$this->cid,%' AND `PUBLIC`=1 ORDER BY `DATE_PUBL` $sort";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
                $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
                if ($row['SKIN']!==''){
                    $row['SKIN_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'gallery/'.$row['SKIN'], $this->config->GalleryImageWidthItemList,$this->config->GalleryImageHeightItemList);
                }
                /*Получаем список категорий, к которым принадлежит материал*/
                $str = $row['PARENT'];
                $parents = explode(",",$str);
                $parents = array_filter($parents);
                sort($parents);
                $str = implode(",",$parents);
                if (count($parents)>0) {
                    $sql2 = "SELECT * FROM `".db_pref."gallery_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
                    $query2 = $this->db->query($sql2);
                    for ($i2=0; $i2 < $this->db->num_rows($query2); $i2++) {
                        $row2 = $this->db->fetch_array($query2);
                        $categories[] = $row2;
                    }
                    $row['PARENTS'] = $categories;
                }


                $items[] = $row;
            }

            $this->page_title = $this->c_name;
            $this->assign(array(
                'site_title'       => $this->c_name.' - '. $this->config->SiteTitle,
                'page_title'       => $this->c_name,
                'items'            => $items,
                'c_name'           => $this->c_name,
                'cid'              => $this->cid,
                'desc'             => $this->desc,
                'desc2'            => $this->desc2,
            ));
            $this->SetPath('gallery/categories/');
            if ($this->template == ''){
                $this->template = 'default_cat_list';
            }
            $this->content = $this->SetTemplate($this->template.'.tpl');
        }
    }

    public function ShowItem($id=0){

        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."gallery_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."gallery_i`  WHERE `ALIAS` = '$this->alias' AND `PUBLIC`=1 LIMIT 1";
        }

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

            /*Получаем список категорий, к которым принадлежит материал*/
            $str = $row['PARENT'];
            $parents = explode(",",$str);
            $parents = array_filter($parents);
            sort($parents);
            $str = implode(",",$parents);
            $sql = "SELECT * FROM `".db_pref."gallery_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
            $query = $this->db->query($sql);
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $categories[] = $row;
            }
            /*///////////////////*/

            /*Выбираем похожие материалы*/
            if (count($tags) > 0){
                $sql = "";
                foreach ($tags as $k=>$t){
                    if ($k>0){
                        $sql.= " OR `TAGS` LIKE '%$t%'";
                    } else {
                        $sql.= "`TAGS` LIKE '%$t%'";
                    }
                }
                $sql = "SELECT * FROM `".db_pref."gallery_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
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
                $sql = "SELECT * FROM `".db_pref."gallery_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->GalleryCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->tpl_view = $this->config->GalleryCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->GalleryCommentsTemplateForm.'.tpl';

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

            $this->meta_description = $item['META_DESC'];
            $this->meta_keywords = $item['META_KEYWORDS'];
            $this->page_title = $item["TITLE"];

            $this->assign(array(
                'item'             => $item,
                'other_items'      => $other_items,
                'parents'          => $categories,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'gallery/'.$item['SKIN'], 200,120),
                'images'           => explode(",",$item['IMAGES']),
            ));

            $this->SetPath('gallery/items/');

            $this->content = $this->SetTemplate($item['TEMPLATE'].'.tpl');
        }
    }
}
?>