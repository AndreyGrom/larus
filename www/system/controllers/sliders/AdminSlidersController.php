<?php

class AdminSlidersController extends AdminController {
    public function __construct() {
        parent::__construct();
        $this->categories    = array();
        $this->structure     = array();
        $this->sliders       = array();
        $this->id            = $this->get['id'];
        $this->sid           = $this->get['sid'];
        $this->act           = $this->get['act'];
        $this->act2          = $this->get['act2'];
        $this->upload_dir    = UPLOAD_IMAGES_DIR.'sliders/';
    }
    public function SetPlugins(){
        $this->js[] = HTML_PLUGINS_DIR.'autoresize.jquery.js';
    }
    public function ShowMenu(){
        $this->assign(array(
            'sliders'              => $this->sliders,
        ));
        $this->widget_left_top .=$this->fetch('menu.tpl');
    }
    public function GetSliders(){
        $sliders = array();
        $sql = "SELECT * FROM `".db_pref."sliders`";
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $sliders[] = $row;
        }
        return $sliders;
    }
    public function ShowNewSlider(){
        $this->assign(array(
            'templates'  => $this->GetTemplatesSliders(),
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }
    public function GetTemplatesSliders(){
        $path = dirname(__FILE__).'/templates/';
        $list = scandir($path);
        $result = array();
        foreach ($list as $v){
            if ($v =='.' || $v == '..') continue;
            if (!file_exists($path.$v.'/info.txt')) continue;
            $name = file_get_contents($path.$v.'/info.txt');
            $result[] = array('name'=>$name, 'alias'=>$v, 'init'=>htmlspecialchars(@file_get_contents($path.$v.'/init.tpl')));
        }
        return $result;
    }

    public function SaveSlider(){
        $slider_name = $this->db->input($this->post['slider_name']);
        $slider_desc = $this->db->input($this->post['slider_desc']);
        $slider_view = $this->db->input($this->post['slider_view']);
        $slider_init = $this->db->input($this->post['slider_init']);
        if (isset($this->sid)){
            $id =$this->sid;
            $sql = "UPDATE `".db_pref."sliders` SET `NAME`='$slider_name',`DESC`='$slider_desc',`VIEW`='$slider_view',`INIT`='$slider_init' WHERE `ID`=$id";
            $this->db->query($sql);
        } else {
            $sql = "INSERT INTO `".db_pref."sliders`(`NAME`,`DESC`,`VIEW`,`INIT`) VALUES('$slider_name','$slider_desc','$slider_view','$slider_init')";
            $this->db->query($sql);
            $this->sid = $this->db->last_id();
        }
        $upload_file = $_FILES["slider_item_image"];
        $image = $this->func->UploadFile($upload_file['name'],$upload_file['tmp_name'], $this->upload_dir.$this->sid.'/');
        if ($image){
            $slider_item_title = $this->db->input($this->post['slider_item_title']);
            $slider_item_url = $this->db->input($this->post['slider_item_url']);
            $slider_item_desc = $this->db->input($this->post['slider_item_desc']);
            $sql = "INSERT INTO `".db_pref."sliders_items`(
            `SLIDER_ID`,
            `IMAGE`,
            `URL`,
            `TITLE`,
            `DESC`,
            `POSITION`
            ) VALUES(
            '$this->sid',
            '$image',
            '$slider_item_url',
            '$slider_item_title',
            '$slider_item_desc',
            '999'
            )";
            $this->db->query($sql);
        }
        $this->Head("?c=sliders&sid=".$this->sid);
    }
    public function GetSlider($id){
        $items = array();
        $sql = "SELECT * FROM `".db_pref."sliders` WHERE `ID`=$id";
        $query = $this->db->query($sql);
        $slider = $this->db->fetch_array($query);
        $sql = "SELECT * FROM `".db_pref."sliders_items` WHERE `SLIDER_ID`=$id ORDER BY `POSITION`";
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $row['NEW_IMAGE'] = $this->func->GetImage($this->upload_dir.$row['SLIDER_ID'].'/'.$row['IMAGE'], 50,50,'','sliders/'.$row['SLIDER_ID']);
            $items[] = $row;
        }
        return array('slider'=>$slider,'items'=>$items);
    }
    public function ShowSlider($id){
        $this->assign(array(
            'templates'  => $this->GetTemplatesSliders(),
            'slider'  => $this->GetSlider($id),
        ));
        $this->content = $this->SetTemplate('item.tpl');
    }
    public function SortItems(){
        if ($this->post["items_sort"]!==''){
            $list = explode(';', $this->post["items_sort"]);
            foreach ($list as $k=>$v){
                if ($v=='') continue;
                $sql = "UPDATE `".db_pref."sliders_items` SET `POSITION`=$k WHERE `ID` = $v";
                $query = $this->db->query($sql);
            }
        }
        $this->Head("?c=sliders&sid=".$this->sid);
    }
    public function GetSliderItem($id){
        $sql = "SELECT * FROM `".db_pref."sliders_items` WHERE `ID`=$id LIMIT 1";
        $query = $this->db->query($sql);
        return $this->db->fetch_array($query);
    }
    public function DeleteSliderItem(){
        $sid = $this->sid;
        $id = $this->id;
        $slider = $this->GetSliderItem($id);
        $image =  $this->upload_dir.$sid.'/'.$slider['IMAGE'];
        if (file_exists($image)){
            unlink($image);
        }
        $sql = "DELETE FROM `".db_pref."sliders_items` WHERE `ID`=$id";
        $query = $this->db->query($sql);
        $this->Head("?c=sliders&sid=".$sid);
    }
    public function ShowEditSliderItem(){
        $sid = $this->sid;
        $id = $this->id;
        $slide = $this->GetSliderItem($id);
        $slide['IMAGE_NEW'] = $this->func->GetImage($this->upload_dir.$slide['SLIDER_ID'].'/'.$slide['IMAGE'], 50,50,'','sliders/'.$slide['SLIDER_ID']);
        $this->assign(array(
            'slide'  => $slide,
        ));
        $this->content = $this->SetTemplate('slider-item.tpl');
    }
    public function SaveSliderItem(){
        $sid = $this->sid;
        $id = $this->id;
        $slide = $this->GetSliderItem($id);
        $image_old = $this->upload_dir.$slide['SLIDER_ID'].'/'.$slide['IMAGE'];
        $upload_file = $_FILES["slider_item_image"];
        $image = $this->func->UploadFile($upload_file['name'],$upload_file['tmp_name'], $this->upload_dir.$sid.'/');
        if ($image){
            if (file_exists($image_old)) unlink($image_old);
            $sql_image = "`IMAGE`='$image',";
        }
        $slider_item_title = $this->db->input($this->post['slider_item_title']);
        $slider_item_url = $this->db->input($this->post['slider_item_url']);
        $slider_item_desc = $this->db->input($this->post['slider_item_desc']);
        $sql = "UPDATE `".db_pref."sliders_items` SET
        `URL`='$slider_item_url',
        `TITLE`='$slider_item_title',
        $sql_image
        `DESC`='$slider_item_desc'
         WHERE `ID`=$id;
        ";
        $query = $this->db->query($sql);
        $this->Head("?c=sliders&sid=".$sid);
    }
    public function RemoveSlider(){
        $sid = $this->sid;
        $this->func->DelDir($this->upload_dir.$sid);
        $sql = "DELETE FROM `".db_pref."sliders_items` WHERE `SLIDER_ID`='$sid'";
        $query = $this->db->query($sql);
        $sql = "DELETE FROM `".db_pref."sliders` WHERE `ID`='$sid'";
        $query = $this->db->query($sql);
        $this->Head("?c=sliders");
    }
    public function Index(){
        $this->SetPlugins();
        $this->page_title = 'Управление слайдерами';
        if (isset($this->post['slider_name'])){
            $this->SaveSlider();
        }
        if (isset($this->post['items_sort'])){
            $this->SortItems();
        }
        if (isset($this->post['slider-item-edit'])){
            $this->SaveSliderItem();
        }
        $this->sliders = $this->GetSliders();
        $this->ShowMenu();

        if ($this->act == 'new'){
            $this->ShowNewSlider();
        }
        elseif ($this->act == 'del'){
            $this->DeleteSliderItem();
        }
        elseif ($this->act == 'edit'){
            $this->ShowEditSliderItem();
        }
        elseif ($this->act == 'remove'){
            $this->RemoveSlider();
        }
        elseif (isset($this->sid)){
            $this->ShowSlider($this->sid);
        }
        else{
            $this->assign(array(
                'sliders'    => $this->sliders,
                'templates'  => $this->GetTemplatesSliders(),
            ));
            $this->content = $this->SetTemplate('main.tpl');
        }


        return $this->content;
    }
}
?>