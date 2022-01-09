<?php
function print_other_items_blog ($params, &$smarty) {
    $items = array();
    if (isset($params['cid'])){
        $db = Database::getInstance();
        $cid = $params['cid'];
        $sort = isset($params['sort'])?$params['sort']:'DATE_PUBL ASC';
        $sort = "ORDER BY $sort";

        $sql = "SELECT * FROM `".db_pref."blog_i` WHERE `PARENT` LIKE '%,$cid,%' AND `PUBLIC`=1 $sort";
        $query = $db->query($sql);
        if ($db->num_rows($query) > 0){
            for ($i=0; $i < $db->num_rows($query); $i++) {
                $row = $db->fetch_array($query);
                $items[] = $row;
            }
        }
    }
    $smarty->assign('items_category',$items);
}

function BlogGetCategories($params, &$smarty){
    $db = Database::getInstance();
    $source = $params['source'];
    $sql = "SELECT * FROM `".db_pref."blog_c` WHERE `PUBLIC` = '1'";
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $categories[] = $db->fetch_array($query);
    }
    $categories =  Func::getInstance()->getStructure($categories);
    $smarty->assign($source,$categories);
}

function BlogGetPopular ($params, &$smarty) {
    $items = array();
    $db = Database::getInstance();
    $source = $params['source'];
    $image_width = $params['image_width'];
    $image_height = $params['image_height'];
    $limit = isset($params['limit'])?$params['limit']: 10;
    $sql = "SELECT * FROM `".db_pref."blog_i` WHERE `VIEWS` > 0 ORDER BY `VIEWS` DESC LIMIT $limit";
    $query = $db->query($sql);
    if ($db->num_rows($query) > 0){
        for ($i=0; $i < $db->num_rows($query); $i++) {
            $row = $db->fetch_array($query);
            if (isset($image_width) && isset($image_height)){
                $row['SKIN_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'blog/'.$row['SKIN'], $image_width,$image_height,'','blog');
            }
            $items[] = $row;
        }
    }
    $smarty->assign($source,$items);
}

function blog_latest_items ($params, &$smarty) {
    $items = array();
    $sourse = $params['sourse'];
    if (isset($params['cid'])){
        $db = Database::getInstance();
        $cid = $params['cid'];
        $sort = 'DATE_PUBL ASC';
        $sort = "ORDER BY $sort";
        $limit = "LIMIT " . $params['limit'];
        $sql = "SELECT * FROM `".db_pref."blog_i` WHERE `PARENT` LIKE ',%$cid%,' AND `PUBLIC`=1 $sort $limit";
        $items = $db->select($sql);
    }
    $smarty->assign($sourse, $items);
}

Smart::getInstance()->register_function("blog_categories", "BlogGetCategories");
Smart::getInstance()->register_function("blog_pupular", "BlogGetPopular");
Smart::getInstance()->register_function("other_items_blog", "print_other_items_blog");
Smart::getInstance()->register_function("blog_items", "blog_latest_items");

function blog_images ($id) {
    if (isset($id)){
        $db = Database::getInstance();
        $sql = "SELECT * FROM agcms_blog_i WHERE ID = $id LIMIT 1";
        $row = $db->select($sql, array('single_array' => true));
        $skin = $row["SKIN"];
        $items = explode(',',$row['IMAGES']);
        $smarty = Smart::getInstance();
        $smarty->template_dir = TEMPLATES_DIR.Config::getInstance()->Theme.'/tpl/blog/';
        $file = TEMPLATES_DIR.Config::getInstance()->Theme.'/tpl/blog/images.tpl';
        if (file_exists($file)){
            $smarty->assign(array('skin' => $skin, 'items' => $items));
            $rs = $smarty->fetch('images.tpl');
        }
        Manager::getInstance()->SetJS(HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.js');
        Manager::getInstance()->SetJS(HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.pack.js');
        Manager::getInstance()->SetCSS(HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.css');
    }

    return $rs;
}
?>