<?php
function print_latest_gallery ($params, &$smarty) {
    $items = array();
    if (isset($params['count'])){
        $db = Database::getInstance();
        $count = $params['count'];
        $source = $params['source'];
        $sql = "SELECT * FROM `".db_pref."gallery_i` WHERE `PUBLIC`=1 ORDER BY ID DESC LIMIT $count";
        $query = $db->query($sql);
        if ($db->num_rows($query) > 0){
            for ($i=0; $i < $db->num_rows($query); $i++) {
                $row = $db->fetch_array($query);

                /*Получаем список категорий, к которым принадлежит материал*/
                $str = $row['PARENT'];
                $parents = explode(",",$str);
                $parents = array_filter($parents);
                sort($parents);
                $str = implode(",",$parents);
                if (count($parents)>0) {
                    $sql2 = "SELECT * FROM `".db_pref."gallery_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
                    $query2 = $db->query($sql2);
                    for ($i2=0; $i2 < $db->num_rows($query2); $i2++) {
                        $row2 = $db->fetch_array($query2);
                        $categories[] = $row2;
                    }
                    $row['PARENTS'] = $categories;
                }

                $items[] = $row;
            }
        }
    }

    $smarty->assign($source,$items);
}
Smart::getInstance()->register_function("latest_gallery", "print_latest_gallery");


?>