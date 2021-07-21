<?php
function print_other_items_category_shop ($params, &$smarty) {
    $items = array();
    if (isset($params['cid'])){
        $db = Database::getInstance();
        $cid = $params['cid'];
        $sort = isset($params['sort'])?$params['sort']:'DATE_PUBL ASC';
        $sort = "ORDER BY $sort";

        $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `PARENT` LIKE '%,$cid,%' AND `PUBLIC`=1 $sort";
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

function ShopGetCategories($params, &$smarty){
    $db = Database::getInstance();
    $source = $params['source'];
    $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `PUBLIC` = '1'";
    if (isset($params['no_id'])){
        $sql .= " AND ID NOT IN(".$params['no_id'].")";
    }
    if (isset($params['order'])){
        $sql .= " ORDER BY ".$params['order'];
    }
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $row = $db->fetch_array($query);
        $categories[] = $row;
    }
    $categories =  Func::getInstance()->getStructure($categories);
    $smarty->assign($source,$categories);
}

Smart::getInstance()->register_function("other_items_category_shop", "print_other_items_category_shop");
Smart::getInstance()->register_function("shop_categories", "ShopGetCategories");

?>