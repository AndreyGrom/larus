<?php

class AdminVideoController extends AdminController {
    public function __construct() {
        parent::__construct();
        $this->categories    = array();
        $this->structure     = array();
        $this->id            = $this->get['id'];
        $this->cid           = $this->get['cid'];
        $this->act           = $this->get['act'];
        $this->per_page      = 20;
        $this->start         = 0;
        $this->num_pages     = 1;
    }

    public function SetPlugins(){
/*        $this->js[]   = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.min.js';
        $this->js[]   = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.rfm.js';
        $this->css[]  = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.css';*/
        $this->js[]   = HTML_PLUGINS_DIR.'tinymce/tinymce.min.js';
        $this->js[]   = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.js';
        $this->js[]   = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.pack.js';
        $this->js[]   = HTML_CONTROLLERS_DIR.'video/action.js';
        $this->js[]   = HTML_PLUGINS_DIR.'ajaxupload.3.5.js';
        $this->css[]  = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.css';
    }

    public function SaveFields(){
        foreach ($this->post as $k=>$p){
            if ($k == 'save-fields') continue;
            $this->config->set($k,$p);
        }
        $this->Head("?c=video&act=fields");
    }
    public function SaveSettings(){
        foreach ($this->post as $k=>$p){
            if ($k == 'save-settings') continue;
            $this->config->set($k,$p);
        }
        $this->Head("?c=video&act=settings");
    }
    public function SaveCategory(){
        $title            = $this->db->input($this->post['c_title']);
        $desc             = $this->db->input($this->post['c_desc']);
        $desc2            = $this->db->input($this->post['c_desc2']);
        $parent           = $this->db->input($this->post['parent']);
        $alias            = ($this->post['alias']!=='')?$this->post['alias']:$this->func->TranslitURL($title);
        $template         = $this->db->input($this->post['template']);
        $publ             = $this->post['publ'];
        $meta_desc        = $this->db->input($this->post['meta_description']);
        $meta_keywords    = $this->db->input($this->post['meta_keywords']);
        $delete_image     = $this->post['delete_image'];
        $old_image        = $this->post['old_image'];

        $sql = "SELECT * FROM `".db_pref."video_c` WHERE `ALIAS`='$alias'";
        if ($this->act!=='new_c'){
            $sql .= " AND ID <> $this->cid";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            $upload_path = UPLOAD_IMAGES_DIR.'video/';
            $image = Func::getInstance()->UploadFile($_FILES["image"]['name'],$_FILES["image"]['tmp_name'], $upload_path);

            if ($this->act == 'new_c'){
                $sql = "
                    INSERT INTO `".db_pref."video_c` (
                    `PARENT`,`TITLE`, `DESC`, `DESC2`, `ALIAS`, `META_DESC`,`META_KEYWORDS`, `PUBLIC`,`TEMPLATE`, `POSITION`, `IMAGE`)
                    VALUES
                    ('$parent','$title','$desc','$desc2', '$alias','$meta_desc','$meta_keywords','$publ','$template','99999','$image')";
                $query = $this->db->query($sql);
                $this->cid = $this->db->last_id();
            }else{
                if ($image!=='') {
                    $img_upd = ", `IMAGE` = '$image'";
                    if (!is_dir($old_image) && file_exists($old_image)){  // если есть новое изображение, то удаляем прежнее
                        unlink($old_image);
                    }
                }
                if ($delete_image) {
                    $img_upd = ", `IMAGE` = ''";
                    if (file_exists($old_image) && file_exists($old_image)){
                        unlink($old_image);
                    }
                }
                $sql = "UPDATE `".db_pref."video_c` SET
                `PARENT` = '$parent',
                `TITLE` = '$title',
                `DESC` = '$desc',
                `DESC2` = '$desc2',
                `ALIAS` = '$alias',
                `META_DESC` = '$meta_desc',
                `META_KEYWORDS` = '$meta_keywords',
                `PUBLIC` = '$publ',
                `TEMPLATE` = '$template'
                 $img_upd
                 WHERE `ID` = $this->cid";
                $query = $this->db->query($sql);
            }
            $this->Head("?c=video&cid=$this->cid");
        } else {
            $this->session['alert'] = 'Такой алиас уже существует';
        }
    }

    public function SaveItem(){
        $parents = $this->post['parents'];
        if (count($parents)==1){
            $parent = ','.$parents[0].',';
        } else {
            foreach ($parents as $k=>$p){
                if ($k==0) $parent = ',';
                $parent .= $p.',';
            }
        }

        $title = $this->post['title'];
        $alias = ($this->post['alias']!=='')?$this->post['alias']:Func::getInstance()->TranslitURL($title);
        $short_content = $this->db->input($this->post['short_content']);
        $content = $this->db->input($this->post['content']);
        $template = $this->db->input($this->post['template']);
        $comments = $this->db->input($this->post['comments']);
        $publ = $this->db->input($this->post['publ']);
        $meta_title = $this->db->input($this->post['meta_title']);
        $meta_desc = $this->db->input($this->post['meta_description']);
        $meta_keywords = $this->db->input($this->post['meta_keywords']);
        $other1 = $this->db->input($this->post['other1']);
        $other2 = $this->db->input($this->post['other2']);
        $other3 = $this->db->input($this->post['other3']);
        $other4 = $this->db->input($this->post['other4']);
        $other5 = $this->db->input($this->post['other5']);
        $other6 = $this->db->input($this->post['other6']);
        $other7 = $this->db->input($this->post['other7']);
        $other8 = $this->db->input($this->post['other8']);
        $other9 = $this->db->input($this->post['other9']);
        $other10 = $this->db->input($this->post['other10']);
        $source = $this->db->input($this->post['source']);
        $video_link = $this->db->input($this->post['video_link']);
        $video_code = $this->db->input($this->post['video_code']);
        $tag = trim($this->post['tags']);
        if ($tag!==''){
            $temp = explode(",",$tag);
            foreach ($temp as $t){
                if (trim($t)!==''){
                    $tags[]=trim($t);
                }
            }
            foreach ($tags as $k=>$t){
                if ($k==0)  $tags_str = ',';
                $tags_str .=$t.",";
            }
        }
        $date = time();
        $sql = "SELECT * FROM `".db_pref."video_i` WHERE `ALIAS`='$alias'";
        if (isset($this->id)){
            $sql .= " AND ID <> $this->id";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){ // если такого алиаса нет
            if ($this->act == 'new'){
                $sql = "
            INSERT INTO `".db_pref."video_i` (
            `PARENT`,`TITLE`, `ALIAS`,`SHORT_CONTENT`, `CONTENT`,`META_TITLE`,`META_DESC`,`META_KEYWORDS`,`COMMENTS`,`PUBLIC`,`TEMPLATE`,`DATE_PUBL`,`DATE_EDIT`,`TAGS`,
            `OTHER1`,`OTHER2`,`OTHER3`,`OTHER4`,`OTHER5`,`OTHER6`,`OTHER7`,`OTHER8`,`OTHER9`,`OTHER10`,`SOURCE`,`VIDEO_LINK`,`VIDEO_CODE`)
            VALUES
            ('$parent','$title','$alias','$short_content','$content','$meta_title','$meta_desc','$meta_keywords','$comments','$publ','$template','$date','$date','$tags_str',
            '$other1','$other2','$other3','$other4','$other5','$other6','$other7','$other8','$other9','$other10','$source','$video_link','$video_code')";
                $query = $this->db->query($sql);
                $this->id = $this->db->last_id();

            }else{
                $date_edit = $this->post['DATE_EDIT'];
                $sql = "UPDATE `".db_pref."video_i` SET
        `PARENT` = '$parent',
        `TITLE` = '$title',
        `ALIAS` = '$alias',
        `SHORT_CONTENT` = '$short_content',
        `CONTENT` = '$content',
        `META_TITLE` = '$meta_title',
        `META_DESC` = '$meta_desc',
        `META_KEYWORDS` = '$meta_keywords',
        `COMMENTS` = '$comments',
        `PUBLIC` = '$publ',
        `TEMPLATE` = '$template',
        `DATE_EDIT` = '$date',
        `TAGS` = '$tags_str',
        `OTHER1` = '$other1',
        `OTHER2` = '$other2',
        `OTHER3` = '$other3',
        `OTHER4` = '$other4',
        `OTHER5` = '$other5',
        `OTHER6` = '$other6',
        `OTHER7` = '$other7',
        `OTHER8` = '$other8',
        `OTHER9` = '$other9',
        `OTHER10` = '$other10',
        `SOURCE`  = '$source',
        `VIDEO_LINK`  = '$video_link',
        `VIDEO_CODE`  = '$video_code'
         WHERE `ID` = $this->id";
                $query = $this->db->query($sql);
            }
            $this->Head("?c=video&cid=".$parents[0]."&id=$this->id");
        } else {
            $this->session['alert'] = 'Такой алиас уже существует';
        }
    }

    public function getCategories($parent = false){
        $categories = array();
        $sql = "SELECT * FROM `".db_pref."video_c` ORDER BY `ID`";
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $categories[] = $row;
        }
        return $categories;
    }

    public function getPagination2($parent = false){
        $where = '';
        if ($parent){
            $where = "WHERE `PARENT` LIKE '%,$parent,%'";
        }
        $sql = "SELECT * FROM `".db_pref."video_i` $where";
        $query = $this->db->query($sql);
        $total = $this->db->num_rows($query);
        $this->num_pages = ceil($total / $this->per_page);
        $this->total = $total;
        $cur_page = 1;
        if (isset($_GET['p']) && $_GET['p'] > 0) {
            $cur_page = $_GET['p'];
        }
        $this->start = ($cur_page - 1) * $this->per_page;
    }

    public function getItems($parent = false, $start, $count){
        $items = array();
        $where = '';
        if ($count > 0){
            $limit = "LIMIT $start, $count";
        }
        if ($parent){
            $where = "WHERE `PARENT` LIKE '%,$parent,%'";
        }

        $sql = "SELECT * FROM `".db_pref."video_i` $where ORDER BY `ID` DESC $limit";
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
            $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
            $items[] = $row;
        }
        return $items;
    }
    public function getCategory($cid){
        $row = array();
        $sql = "SELECT * FROM `".db_pref."video_c` WHERE `ID`=$cid LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query)>0){
            $row = $this->db->fetch_array($query);
            $row['DATE_PUBL'] = $this->DateFormat($row["DATE_PUBL"]);
            $row['DATE_EDIT'] = $this->DateFormat($row["DATE_EDIT"]);
            if ($row['IMAGE']!==''){
                $row['NEW_IMAGE'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'video/'.$row['IMAGE'], 50,50,'','video');
            }
        }
        return $row;
    }
    public function getItem($id){
        $sql = "SELECT i.*, c.ID AS CID, c.TITLE AS CAT_NAME, c.ALIAS AS CAT_ALIAS FROM `".db_pref."video_i` i LEFT JOIN `".db_pref."video_c` c ON i.PARENT=c.ID WHERE i.`ID`=$id LIMIT 1";
        $query = $this->db->query($sql);
        $row = $this->db->fetch_array($query);
        $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
        $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
        $row['PARENTS'] = explode(",", $row['PARENT']);
        $row['PARENTS'] = array_filter($row['PARENTS']);
        sort($row['PARENTS']);
        $tags = $row['TAGS'];
        if ($tags!==''){
            if (mb_substr($tags, 0, 1)==','){
                $tags = mb_substr($tags,1);
            }
            if (mb_substr($tags,-1)==','){
                $tags = substr($tags,0,-1);
            }
        }
        $row['TAGS'] = $tags;
        $images = array();
        $new_images = array();
        if ($row['IMAGES']!==''){
            $images = explode(",", $row['IMAGES']);
            foreach ($images as $img){
                $new_images[] = $this->func->GetImage(UPLOAD_IMAGES_DIR.'video/'.$img, 100,100,'','video');
            }
        }
        $row['IMAGES'] = $images;
        $row['NEW_IMAGES'] = $new_images;
        $files = array();
        if ($row['FILES']!==''){
            $files = unserialize($row['FILES']);
        }
        $row['FILES'] = $files;
        return $row;
    }
    public function ShowMenu(){
        $this->assign(array(
            'categories' => $this->structure,
        ));
        $menu = $this->fetch('menu2.tpl');
        $this->assign(array(
            'menu' => $menu,
        ));
        $this->widget_left_top .=$this->fetch('menu.tpl');
    }

    public function ShowItems($cid = null){
/*        $this->getPagination($cid,$this->start,$this->per_page);
        $items =  $this->getItems($cid,$this->start,$this->per_page);*/
        $url = '';
        $where = '';
        if ($cid){
            $where = "WHERE `PARENT` LIKE '%,$cid,%'";
            $url .= '&cid='.$cid;
        }
        $sql = "SELECT * FROM `".db_pref."video_i` $where ORDER BY `ID` DESC";
        $params = array(
            'sql' => $sql,
            'per_page' => 20,
            'current_page' => $this->get['page'],
            'link' => '?c=news'.$url,
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);
        $query = $result['query'];
        $items = array();
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
            $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
            $items[] = $row;
        }
        $num_pages = $result['num_pages'];
        $pagination = $result['pagination'];
        $total = $result['total'];
        $start = $result['start'];
        $this->assign(array(
            'items'           => $items,
            'category_id'     => $this->cid,
            'items_count'     => count($items),
            'total'           => $total,
            'start'           => $start,
            'pagination'      => $pagination,
        ));
        $this->content = $this->SetTemplate('items.tpl');
    }

    public function ShowNewCat(){
        $this->assign(array(
            'templates'      => $this->func->getTemplates($this->templates_dir.'video/list/'),
            'categories'     => $this->categories,
            'new'            => true,
        ));
        $this->content = $this->SetTemplate('cat.tpl');
    }
    public function ShowNewItem(){
        $this->assign(array(
            'templates' => $this->func->getTemplates($this->templates_dir.'video/single/'),
            'categories' => $this->structure,
            'new'       => true,
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }
    public function DeleteCategory($id){
        $sql = "SELECT * FROM `".db_pref."video_i` WHERE `PARENT` LIKE '%,$id,%'";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            $sql = "DELETE FROM `".db_pref."video_c` WHERE `ID`=$id";
            $query = $this->db->query($sql);
            $this->Head('?c=video');
        } else {
            $_SESSION['alert'] = 'Сначала удалите материалы из этой категории!';
            $this->Head("?c=video&cid=$id");
        }
    }
    public function DeleteItem($id){
        $sql = "SELECT * FROM `".db_pref."video_i` WHERE `ID`=$id LIMIT 1";
        $query = $this->db->query($sql);
        $row = $this->db->fetch_array($query);
        if ($row['IMAGES']!==''){
            $images = explode(",", $row['IMAGES']);
            foreach ($images as $img){
                if (file_exists(UPLOAD_IMAGES_DIR.'video/'.$img)){
                    unlink(UPLOAD_IMAGES_DIR.'video/'.$img);
                }
            }
        }
        $sql = "DELETE FROM `".db_pref."video_i` WHERE `ID`=$id";
        $query = $this->db->query($sql);
    }
    public function ShowCategory($row){
        $this->assign(array(
            'category_id'              => $this->cid,
            'category_title'           => isset($title)    ?   $title    :    $row['TITLE'],
            'category_desc'            => isset($desc)     ?   $desc     :    $row['DESC'],
            'category_desc2'            => isset($desc2)     ?   $desc2     :    $row['DESC2'],
            'category_alias'           => isset($alias)    ?   $alias    :    $row['ALIAS'],
            'category_template'        => isset($template) ?   $template :    $row['TEMPLATE'],
            'category_parent'          => isset($parent)   ?   $parent   :    $row['PARENT'],
            'category_publ'            => isset($publ)     ?   $publ     :    $row['PUBLIC'],
            'category_meta_desc'       => isset($meta_desc)     ?   $meta_desc     :    $row['META_DESC'],
            'category_meta_keywords'   => isset($meta_keywords)     ?   $meta_keywords     :    $row['META_KEYWORDS'],
            'category_new_image'       => $row['NEW_IMAGE'],
            'category_image'           => UPLOAD_IMAGES_DIR.'video/'.$row['IMAGE'],
            'category'                 => $row,
            'categories'               => $this->categories,
            'templates'                => Func::getInstance()->getTemplates($this->templates_dir.'video/list/'),
        ));
        $this->content = $this->SetTemplate('cat.tpl');
    }
    public function ShowItem($row){
        $this->assign(array(
            'item'                     => $row,
            'item_id'                  => $row['ID'],
            'categories'               => $this->structure,
            'templates'                => Func::getInstance()->getTemplates($this->templates_dir.'video/single/'),
            'cid'                      => $row['CID'],
            'c_name'                   => $row['CAT_NAME'],
            'c_alias'                  => $row['CAT_ALIAS'],
            'item_title'               => $row['TITLE'],
            'item_alias'               => $row['ALIAS'],
            'item_parents'             => $row['PARENTS'],
            'item_template'            => $row['TEMPLATE'],
            'short_item_content'       => $row['SHORT_CONTENT'],
            'item_content'             => htmlspecialchars($row['CONTENT']),
            'item_publ'                => $row['PUBLIC'],
            'item_comments'            => $row['COMMENTS'],
            'item_meta_title'          => $row['META_TITLE'],
            'item_meta_desc'           => $row['META_DESC'],
            'item_meta_keywords'       => $row['META_KEYWORDS'],
            'item_tags'                => $row['TAGS'],
            'new_images'               => $row['NEW_IMAGES'],
            'images'                   => $row['IMAGES'],
            'files'                    => $row['FILES'],
            'skin'                     => $row['SKIN'],
            'item_other1'              => $row['OTHER1'],
            'item_other2'              => $row['OTHER2'],
            'item_other3'              => $row['OTHER3'],
            'item_other4'              => $row['OTHER4'],
            'item_other5'              => $row['OTHER5'],
            'item_other6'              => $row['OTHER6'],
            'item_other7'              => $row['OTHER7'],
            'item_other8'              => $row['OTHER8'],
            'item_other9'              => $row['OTHER9'],
            'item_other10'             => $row['OTHER10'],
            'item_source'              => $row['SOURCE'],
            'item_video_link'          => $row['VIDEO_LINK'],
            'item_video_code'          => $row['VIDEO_CODE'],
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }

    public function getSiteMap(){
        $sql = "SELECT ALIAS FROM `".db_pref."video_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` DESC";
        $result = $this->db->query($sql);
        $return = array();
        if ($this->db->num_rows($result)){
            for ($i = 0; $i < $this->db->num_rows($result); $i++){
                $row = $this->db->fetch_array($result);
                $return[]  = array(
                    'loc'           => $this->site_url . 'video/' . $row['ALIAS'] .'/',
                    'changefreq'    => 'weekly',
                    'priority'      => '1',
                );
            }
        }
        return $return;
    }

    public function Index(){
        $this->SetPlugins();
        $this->page_title = 'Видео';
        if (isset($this->post['c_title']) && trim($this->post['c_title'])!==''){
            $this->SaveCategory();
        }
        /*добавление/редактирование материала*/
        if (isset($this->post['title']) && trim($this->post['title'])!==''){
            $this->SaveItem();
        }
        if (isset($this->post['save-fields'])){
            $this->SaveFields();
        }
        if (isset($this->post['save-settings'])){
            $this->SaveSettings();
        }
        $this->categories = $this->getCategories();
        if(count($this->categories) == 0 && !isset($this->act)){
            $this->head('?c=video&act=new_c');
        }
        $this->structure = Func::getInstance()->getStructure($this->categories);
        $this->ShowMenu();


        if ($this->act == 'fields'){
            $this->content = $this->SetTemplate('item-fields-settings.tpl');
        }
        elseif ($this->act == 'settings'){
            $this->assign(array(
                'templates_comment_form'      => $this->func->getTemplates($this->templates_dir.'comments/form/'),
                'templates_comment_view'      => $this->func->getTemplates($this->templates_dir.'comments/view/'),
            ));
            $this->content = $this->SetTemplate('settings.tpl');
        }
        elseif ($this->act == 'new_c'){
            $this->ShowNewCat();
        }
        elseif ($this->act == 'new'){
            $this->ShowNewItem();
        }
        elseif ($this->act == 'del'){
            $this->DeleteCategory($this->cid);

        }
        elseif ($this->act == 'del-item'){
            $this->DeleteItem($this->id);
            $this->Head("?c=video&cid=$this->cid");
        }
        elseif (!isset($this->act) && isset($this->cid) && !isset($this->id)){
            $this->ShowItems($this->cid);
        }
        elseif ($this->act == 'edit' && isset($this->cid) && $this->cid!==''){
            $row = $this->getCategory($this->cid);
            $this->ShowCategory($row);
        }
        elseif (isset($this->id)){
            $row = $this->getItem($this->id);
            $this->ShowItem($row);
        }
        else {
            $this->ShowItems();
        }
        return $this->content;
    }




}
?>