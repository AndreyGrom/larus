<?php
function print_other_items_video ($params, &$smarty) {
    $items = array();
    if (isset($params['cid'])){
        $db = Database::getInstance();
        $cid = $params['cid'];
        $sort = isset($params['sort'])?$params['sort']:'DATE_PUBL ASC';
        $sort = "ORDER BY $sort";

        $sql = "SELECT * FROM `".db_pref."video_i` WHERE `PARENT` LIKE '%,$cid,%' AND `PUBLIC`=1 $sort";
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
function VideoGetCategories($params, &$smarty){
    $db = Database::getInstance();
    $source = $params['source'];
    $sql = "SELECT * FROM `".db_pref."video_c` WHERE `PUBLIC` = '1' ORDER BY `TITLE`";
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $categories[] = $db->fetch_array($query);
    }
    $categories =  Func::getInstance()->getStructure($categories);
    $smarty->assign($source,$categories);
}

Smart::getInstance()->register_function("video_categories", "VideoGetCategories");
Smart::getInstance()->register_function("other_items_video", "print_other_items_video");

function vid ($id) {
    $rs = '';
    if (isset($id)){
        $db = Database::getInstance();
        $sql = "SELECT * FROM agcms_video_i WHERE ID = $id";
        if ($row = $db->select($sql, array('single_array' => true))){
            $rs = $row['VIDEO_CODE'];
        }

    }

    return $rs ;
}

?>