<?php
function NewsGetCategories($params, &$smarty){
    $db = Database::getInstance();
    $source = $params['source'];
    $sql = "SELECT * FROM `".db_pref."news_c` WHERE `PUBLIC` = '1'";
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $categories[] = $db->fetch_array($query);
    }
    $categories =  Func::getInstance()->getStructure($categories);
    $smarty->assign($source,$categories);
}
Smart::getInstance()->register_function("news_categories", "NewsGetCategories");

function NewsGetLast($params, &$smarty){
    $db = Database::getInstance();
    $source = $params['source'];
    $limit = $params['limit'];
    $sql = "SELECT * FROM `".db_pref."news_i` WHERE `PUBLIC` = '1' ORDER BY ID DESC LIMIT $limit";
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $categories[] = $db->fetch_array($query);
    }
    $categories =  Func::getInstance()->getStructure($categories);
    $smarty->assign($source,$categories);
}
Smart::getInstance()->register_function("news_last", "NewsGetLast");

?>