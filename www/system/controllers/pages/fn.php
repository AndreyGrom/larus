<?php
function GetBlog ($params, &$smarty) {
    if (isset($params['cid'])){
        $db = Database::getInstance();
        $cid = isset($params['cid'])?$params['cid']:1;
        $source =isset($params['source'])?$params['source']:'blog';
        $sort = isset($params['sort'])?$params['sort']:'DATE_PUBL ASC';
        $sort = "ORDER BY $sort";
        $sql = "SELECT * FROM agcms_blog_i WHERE PARENT LIKE '%,$cid,%' AND PUBLIC=1 $sort";
        $item = false;
        if ($items = $db->select($sql)) {
            $item = $items[0];
            $item['NUMBER'] = 0;
        }
    }
    $smarty->assign($source, $item);
}


Smart::getInstance()->register_function("get_blog", "GetBlog");

?>