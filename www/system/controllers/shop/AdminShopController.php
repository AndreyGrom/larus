<?php

class AdminShopController extends AdminController {
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
        $this->js[]   = HTML_CONTROLLERS_DIR.'shop/action.js';
        $this->js[]   = HTML_PLUGINS_DIR.'ajaxupload.3.5.js';
        $this->css[]  = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.css';
    }

    public function SaveFields(){
        foreach ($this->post as $k=>$p){
            if ($k == 'save-fields') continue;
            $this->config->set($k,$p);
        }
        $this->Head("?c=shop&act=fields");
    }
    public function SaveSettings(){
        foreach ($this->post as $k=>$p){
            if ($k == 'save-settings') continue;
            $this->config->set($k,$p);
        }
        $this->Head("?c=shop&act=settings");
    }
    public function SaveCategory(){
        $alias            = ($this->post['alias']!=='')?$this->post['alias']:$this->func->TranslitURL($this->post['title']) . "-" . $this->func->generateName(5);
        $delete_image     = $this->post['delete_image'];
        $old_image        = $this->post['old_image'];

        $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `ALIAS`='$alias'";
        if ($this->act!=='new_c'){
            $sql .= " AND ID <> $this->cid";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            $upload_path = UPLOAD_IMAGES_DIR.'shop/';
            $image = Func::getInstance()->UploadFile($_FILES["image"]['name'],$_FILES["image"]['tmp_name'], $upload_path);
            $params = array(
                'PARENT' => $this->post['parent'],
                'TITLE' => $this->post['title'],
                'TITLE2' => $this->post['title2'],
                'DESC' => $this->post['desc'],
                'DESC2' => $this->post['desc2'],
                'ALIAS' => $alias,
                'META_DESC' => $this->post['meta_desc'],
                'META_KEYWORDS' => $this->post['meta_keywords'],
            );
            if ($this->act == 'new_c'){

                $params['IMAGE'] = $image;
                $this->db->insert('agcms_shop_c', $params);
                $this->cid = $this->db->last_id();
            }else{

                if ($image) {
                    $params['IMAGE'] = $image;
                    if (!is_dir($old_image) && file_exists($old_image)){  // если есть новое изображение, то удаляем прежнее
                        unlink($old_image);
                    }
                }
                if ($delete_image) {
                    $params['IMAGE'] = '';
                    if (file_exists($old_image) && file_exists($old_image)){
                        unlink($old_image);
                    }
                }
                $this->db->update('agcms_shop_c', $params, "ID = " . $this->cid);
            }
            $this->Head("?c=shop&cid=$this->cid");
        } else {
            $_SESSION['alert'] = 'Такой алиас уже существует';
            $this->Head("?c=shop&&act=new_c");
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
        $alias = ($this->post['alias']!=='')?$this->post['alias']:Func::getInstance()->TranslitURL($this->post['model']);

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

        $sort = isset($this->post['sort']) ? $this->post['sort' ] : 999999;

        $params = array(
            'PARENT' => $parent,
            'TITLE' => $title,
            'ALIAS' => $alias,
            'SHORT_CONTENT' => $this->post['short_content'],
            'CONTENT' => $this->post['content'],
            'META_TITLE' => $this->post['meta_title'],
            'META_DESC' => $this->post['meta_description'],
            'META_KEYWORDS' => $this->post['meta_keywords'],
            'COMMENTS' => $this->post['comments'],
            'PUBLIC' => $this->post['publ'],
            'TEMPLATE' => $this->post['template'],
            'DATE_PUBL' => $date,
            'DATE_EDIT' => $date,
            'TAGS' => $tags_str,
            'PRICE' => $this->post['short_content'],
            'PRICE_NEW' => $this->post['short_content'],
            'FILE1' => $this->post['file1'],
            'FILE2' => $this->post['file2'],
            'FILE3' =>$this->post['file3'] ,
            'FILE1_NAME' => $this->post['file1_name'],
            'FILE2_NAME' => $this->post['file2_name'],
            'FILE3_NAME' => $this->post['file3_name'],
            'MODEL' => $this->post['model'],
            'ARTICLE' => $this->post['article'],
            'SORT'   => $sort,
        );



        $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `ALIAS`='$alias'";
        if (isset($this->id)){
            $sql .= " AND ID <> $this->id";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){ // если такого алиаса нет
            if ($this->act == 'new'){
                $this->db->insert('agcms_shop_i',$params);
                $this->id = $this->db->last_id();

            }else{
                $this->db->update('agcms_shop_i',$params, "ID = " . $this->id);
            }


            $length = json_decode($this->post['text-j']);
            $sql = "DELETE FROM agcms_shop_len WHERE PRODUCT_ID = " . $this->id;
            $this->db->query($sql);
            foreach ($length as  $l){
                $params = array(
                    'PRODUCT_ID' => $this->id,
                    'LEN' => $l[0],
                    'PRICE' => $l[1],
                );
                $this->db->insert('agcms_shop_len',$params);
            }

            $raz = json_decode($this->post['text-j-2']);
            $sql = "DELETE FROM agcms_shop_raz WHERE PRODUCT_ID = " . $this->id;
            $this->db->query($sql);
            foreach ($raz as  $l){
                $params = array(
                    'PRODUCT_ID' => $this->id,
                    'SNAME' => $l[0],
                    'SCAPT' => $l[1],
                    'PRICE' => $l[2],
                );
                $this->db->insert('agcms_shop_raz',$params);
            }


            $this->Head("?c=shop&cid=".$parents[0]."&id=$this->id");
        } else {
            $this->session['alert'] = 'Такой алиас уже существует';
        }
    }

    public function getCategories($parent = false){
        $categories = array();
        $sql = "SELECT * FROM `".db_pref."shop_c` ORDER BY `ID`";
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $categories[] = $row;
        }
        return $categories;
    }

    public function getPagination($parent = false){
        $where = '';
        if ($parent){
            $where = "WHERE `PARENT` LIKE '%,$parent,%'";
        }
        $sql = "SELECT * FROM `".db_pref."shop_i` $where";
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

        $sql = "SELECT * FROM `".db_pref."shop_i` $where ORDER BY SORT, ID ASC $limit";
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
        $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `ID`=$cid LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query)>0){
            $row = $this->db->fetch_array($query);
            $row['DATE_PUBL'] = $this->DateFormat($row["DATE_PUBL"]);
            $row['DATE_EDIT'] = $this->DateFormat($row["DATE_EDIT"]);
            if ($row['IMAGE']!==''){
                $row['NEW_IMAGE'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'shop/'.$row['IMAGE'], 50,50,'','shop');
            }
        }
        return $row;
    }
    public function getItem($id){
        $sql = "SELECT i.*, c.ID AS CID, c.TITLE AS CAT_NAME, c.ALIAS AS CAT_ALIAS FROM `".db_pref."shop_i` i LEFT JOIN `".db_pref."shop_c` c ON i.PARENT=c.ID WHERE i.`ID`=$id LIMIT 1";
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
                $new_images[] = $this->func->GetImage(UPLOAD_IMAGES_DIR.'shop/'.$img, 100,100,'','shop');
            }
        }
        $row['IMAGES'] = $images;
        $row['NEW_IMAGES'] = $new_images;
        $files = array();
        if ($row['FILES']!==''){
            $files = unserialize($row['FILES']);
        }
        $row['FILES'] = $files;


        $sql = "SELECT * FROM agcms_shop_len WHERE PRODUCT_ID = $id";
        $len = $this->db->select($sql);
        $row['LEN'] = $len;
        $arr = array();
        foreach ($len as $l){
            $arr[] = array($l['LEN'], $l['PRICE']);
        }
        $row['LEN_STR'] = json_encode($arr);

        $sql = "SELECT * FROM agcms_shop_raz WHERE PRODUCT_ID = $id";
        $raz = $this->db->select($sql);
        $row['RAZ'] = $raz;
        $arr = array();
        foreach ($raz as $r){
            $arr[] = array($r['LEN'], $r['PRICE']);
        }
        $row['RAZ_STR'] = json_encode($arr);

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
        $this->getPagination($cid,$this->start,$this->per_page);
        $items =  $this->getItems($cid,$this->start,$this->per_page);
        $this->assign(array(
            'items'           => $items,
            'category_id'     => $this->cid,
            'num_pages'       => $this->num_pages,
            'items_count'     => count($items),
            'total'           => $this->total,
            'start'           => $this->start+1,
        ));
        $this->content = $this->SetTemplate('items.tpl');
    }

    public function ShowNewCat(){
        $this->assign(array(
            'templates'      => $this->func->getTemplates($this->templates_dir.'shop/list/'),
            'categories'     => $this->categories,
            'new'            => true,
        ));
        $this->content = $this->SetTemplate('cat.tpl');
    }
    public function ShowNewItem(){
        $this->assign(array(
            'templates' => $this->func->getTemplates($this->templates_dir.'shop/single/'),
            'categories' => $this->structure,
            'new'       => true,
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }
    public function DeleteCategory($id){
        $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `PARENT` LIKE '%,$id,%'";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            $sql = "DELETE FROM `".db_pref."shop_c` WHERE `ID`=$id";
            $query = $this->db->query($sql);
            $this->Head('?c=shop');
        } else {
            $_SESSION['alert'] = 'Сначала удалите материалы из этой категории!';
            $this->Head("?c=shop&cid=$id");
        }
    }
    public function DeleteItem($id){
        $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `ID`=$id LIMIT 1";
        $query = $this->db->query($sql);
        $row = $this->db->fetch_array($query);
        if ($row['IMAGES']!==''){
            $images = explode(",", $row['IMAGES']);
            foreach ($images as $img){
                if (file_exists(UPLOAD_IMAGES_DIR.'shop/'.$img)){
                    unlink(UPLOAD_IMAGES_DIR.'shop/'.$img);
                }
            }
        }
        $sql = "DELETE FROM `".db_pref."shop_i` WHERE `ID`=$id";
        $query = $this->db->query($sql);
    }
    public function ShowCategory($row){
        $this->assign(array(
            'item' => $row,
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
            'category_image'           => UPLOAD_IMAGES_DIR.'shop/'.$row['IMAGE'],
            'category'                 => $row,
            'categories'               => $this->categories,
            'templates'                => Func::getInstance()->getTemplates($this->templates_dir.'shop/list/'),
        ));
        $this->content = $this->SetTemplate('cat.tpl');
    }
    public function ShowItem($row){
        $this->assign(array(
            'item'                     => $row,
            'item_id'                  => $row['ID'],
            'categories'               => $this->structure,
            'templates'                => Func::getInstance()->getTemplates($this->templates_dir.'shop/single/'),
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
            'item_price'               => $row['PRICE'],
            'item_price_new'           => $row['PRICE_NEW'],
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
            'item_file1'               => $row['FILE1'],
            'item_file2'               => $row['FILE2'],
            'item_file3'               => $row['FILE3'],
            'item_file1_name'          => $row['FILE1_NAME'],
            'item_file2_name'          => $row['FILE2_NAME'],
            'item_file3_name'          => $row['FILE3_NAME'],
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }

    public function getSiteMap(){
        $return = array();
        $sql = "SELECT ALIAS FROM `".db_pref."shop_i`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` DESC";
        $result = $this->db->query($sql);
        if ($this->db->num_rows($result)){
            for ($i = 0; $i < $this->db->num_rows($result); $i++){
                $row = $this->db->fetch_array($result);
                $return[]  = array(
                    'loc'           => $this->site_url . 'shop/' . $row['ALIAS'] .'/',
                    'changefreq'    => 'weekly',
                    'priority'      => '1',
                );
            }
        }

        $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `PUBLIC`=1";
        $result = $this->db->query($sql);
        if ($this->db->num_rows($result)){
            for ($i = 0; $i < $this->db->num_rows($result); $i++){
                $row = $this->db->fetch_array($result);
                $parent_id = $row['ID'];
                $sql = "SELECT COUNT(*) AS CNT FROM `".db_pref."shop_i` WHERE `PARENT` LIKE '%,$parent_id,%' AND `PUBLIC`=1";
                $result2 = $this->db->query($sql);
                if ($this->db->num_rows($result2)){
                    $row2 = $this->db->fetch_array($result2);
                    $cnt = ceil($row2['CNT']/$this->config->ShopItemListPerPage);
                    for ($j = 1; $j < $cnt+1; $j++){
                        $return[]  = array(
                            'loc'           => $this->site_url . 'shop/' . $row['ALIAS'] .'/page=' . $j . '/',
                            'changefreq'    => 'weekly',
                            'priority'      => '1',
                        );
                    }
                }
            }
        }

        return $return;
    }

    public function RemoveRaz(){
        $id = $this->get['r-id'];
        $sql = "DELETE FROM agcms_shop_raz WHERE ID = $id";
        $this->db->query($sql);
        $this->Head("?c=shop&id=" . $this->get['id']);
    }

    public function RemoveLen(){
        $id = $this->get['r-id'];
        $sql = "DELETE FROM agcms_shop_len WHERE ID = $id";
        $this->db->query($sql);
        $this->Head("?c=shop&id=" . $this->get['id']);
    }
    public function ShowTypes(){
        $sql = "SELECT * FROM agcms_shop_types";
        $items = $this->db->select($sql);
        $this->assign(array(
            'items' => $items,
        ));
        $this->content = $this->SetTemplate('types.tpl');
    }
    public function SaveType(){
        $param = array(
            'title' => $this->post['title'],
        );
        if ($this->post['id'] > 0){
            $this->db->update('agcms_shop_types', $param, "ID = " . $this->post['id']);
        } else {
            $this->db->insert('agcms_shop_types', $param);
        }
        $this->Head("?c=shop&action=types");
    }
    public function RemoveType(){
        $sql = "DELETE FROM agcms_shop_types WHERE ID = " .$this->get['id'];
        $this->db->query($sql);
        $this->Head("?c=shop&action=types");
    }
    public function Index(){
        $this->SetPlugins();
        $this->page_title = 'Магазин';
        if (isset($this->post['save-category'])){
            $this->SaveCategory();
        }
        if (isset($this->post['save-type'])){
            $this->SaveType();
        }
        if (isset($this->get['action']) && $this->get['action'] == 'remove-type'){
            $this->RemoveType();
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
            $this->head('?c=shop&act=new_c');
        }
        $this->structure = Func::getInstance()->getStructure($this->categories);
        $this->ShowMenu();

        if (isset($this->get['action']) && $this->get['action'] == 'types'){
            $this->ShowTypes();
        }
        elseif ($this->act == 'fields'){
            $this->content = $this->SetTemplate('item-fields-settings.tpl');
        }
        elseif ($this->act == 'remove-raz'){
            $this->RemoveRaz();
        }
        elseif ($this->act == 'remove-len'){
            $this->RemoveLen();
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
            $this->Head("?c=shop&cid=$this->cid");
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