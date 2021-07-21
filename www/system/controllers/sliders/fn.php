<?php

function GetSlider($id){
    $db = Database::getInstance();
    $func = Func::getInstance();
    $upload_dir = UPLOAD_IMAGES_DIR.'sliders/';
    $items = array();
    $sql = "SELECT i.*,s.VIEW, s.INIT FROM `".db_pref."sliders_items` i LEFT JOIN `".db_pref."sliders` s ON i.SLIDER_ID=s.ID WHERE `SLIDER_ID`=$id ORDER BY `POSITION`";
    $query = $db->query($sql);
    for ($i=0; $i < $db->num_rows($query); $i++) {
        $row = $db->fetch_array($query);
        $row['NEW_IMAGE'] = $func->GetImage($upload_dir.$row['SLIDER_ID'].'/'.$row['IMAGE'], 50,50,'','sliders/'.$row['SLIDER_ID']);
        $items[] = $row;
    }
    /*return array('slider'=>$slider,'items'=>$items);*/
    return $items;
}
function ag_slider ($id) {
    $result = '';
    $smarty = Smart::getInstance();
    if (isset($id)){
        $slider = GetSlider($id);
        if (is_array($slider) && count($slider) > 0){
            $js = array();
            $css = array();
            $path = dirname(__FILE__).'/templates/'.$slider[0]['VIEW'].'/';
            $path2 = HTML_CONTROLLERS_DIR.'sliders/templates/'.$slider[0]['VIEW'].'/';
            @include_once($path.'include.php');
            if (count($js) > 0){
                foreach($js as $v){
                    Manager::getInstance()->SetJS($path2.$v);
                }
            }
            if (count($css) > 0){
                foreach($css as $v){
                    Manager::getInstance()->SetCSS($path2.$v);
                }
            }

            $smarty->assign(array(
                'ag_slider' => $slider,
            ));
            $result = $smarty->fetch($path.'template.tpl');
            $smarty->assign(array(
                'slider_id' => $slider[0]['SLIDER_ID'],
            ));
            $result .= $smarty->fetch($path.'init.tpl');
        }
    }

    return $result ;
}

?>