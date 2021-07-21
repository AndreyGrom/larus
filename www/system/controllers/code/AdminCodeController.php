<?php

class AdminCodeController extends AdminController {
    public function __construct() {
        parent::__construct();
        $this->categories    = array();
        $this->structure     = array();
        $this->id            = $this->get['id'];
        $this->act           = $this->get['act'];
        $this->source_dir = dirname(__FILE__).'/source/';
        if (!is_dir($this->source_dir)) mkdir($this->source_dir);
    }

    public function SetPlugins(){
        $this->js[] = HTML_PLUGINS_DIR.'edit_area/edit_area_full.js';
    }

    public function ShowMenu(){
        $this->assign(array(
            'pages' => $this->structure,
        ));
        $menu = $this->fetch('menu2.tpl');
        $this->assign(array(
            'menu' => $menu,
        ));
        $this->widget_left_top .=$this->fetch('menu.tpl');
    }

    public function SavePage(){
        $title = $this->post['title'];
        $alias = ($this->post['alias']!=='')?$this->post['alias']:Func::getInstance()->TranslitURL($title);
        $content = $this->db->input($this->post['content']);

        $template = $this->post['template'];
        $comments = $this->post['comments'];
        $publ = isset($this->post['publ'])?$this->post['publ']:1;
        $meta_desc = $this->post['meta_description'];
        $meta_keywords = $this->post['meta_keywords'];
        $date = time();
        $sql = "SELECT * FROM `".db_pref."codes` WHERE `ALIAS`='$alias'";
        if (!isset($this->act)){
            $sql .= " AND ID <> $this->id";
        }
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            if ($this->act == 'new'){
                $sql = "
            INSERT INTO `".db_pref."codes` (
            `TITLE`, `ALIAS`,`META_DESC`,`META_KEYWORDS`,`COMMENTS`,`PUBLIC`,`TEMPLATE`,`DATE_PUBL`,`DATE_EDIT`,`POSITION`)
            VALUES
            ('$title','$alias','$meta_desc','$meta_keywords','$comments','$publ','$template','$date','$date','99999')";
                $query = $this->db->query($sql);
                $this->id = $this->db->last_id();

            }else{
                $date_edit = $this->post['DATE_EDIT'];
                $sql = "UPDATE `".db_pref."codes` SET
        `TITLE` = '$title',
        `ALIAS` = '$alias',
        `META_DESC` = '$meta_desc',
        `META_KEYWORDS` = '$meta_keywords',
        `COMMENTS` = '$comments',
        `PUBLIC` = '$publ',
        `TEMPLATE` = '$template',
        `DATE_EDIT` = '$date'
         WHERE `ID` = $this->id";
                $query = $this->db->query($sql);
            }
            if (!is_dir($this->source_dir.$this->id)) mkdir($this->source_dir.$this->id);
            file_put_contents($this->source_dir.$this->id.'/index.php', $content);
            $this->Head("?c=code&id=$this->id");
        } else {
            $this->session['alert'] = 'Такой алиас уже существует';
        }
    }

    public function getPages($id = null){
        $pages = array();
        if ($id){
            $sql = "SELECT * FROM `".db_pref."codes` WHERE `ID`=$id LIMIT 1";
        } else {
            $sql = "SELECT * FROM `".db_pref."codes` ORDER BY `ID`";
        }
        $query = $this->db->query($sql);
        for ($i=0; $i < $this->db->num_rows($query); $i++) {
            $row = $this->db->fetch_array($query);
            $row['DATE_PUBL'] = $this->DateFormat($row["DATE_PUBL"]);
            $row['DATE_EDIT'] = $this->DateFormat($row["DATE_EDIT"]);
            $pages[] = $row;
        }
        if ($id && count($pages) == 1){
            return $pages[0];
        } else {
            return $pages;
        }
    }

    public function ShowPageNew(){
        $this->assign(array(
            'page_title'            => $this->post['title'],
            'page_alias'            => $this->post['alias'],
            'page_template'         => $this->post['template'],
            'page_parent'           => $this->post['parent'],
            'page_publ'             => isset($this->post['publ'])?$this->post['publ']:1,
            'page_content'          => $this->post['content'],
            'page_meta_desc'        => $this->post['meta_description'],
            'page_meta_keywords'    => $this->post['meta_keywords'],
            'pages'                 => $this->pages,
            'templates'             => $this->func->getTemplates($this->templates_dir.'code/'),
            'new'                   => true,
        ));
        $this->content = $this->SetTemplate('code.tpl');
    }

    public function DeletePage($id){
        $sql = "SELECT * FROM `".db_pref."codes` WHERE `PARENT`=$id";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) == 0){
            $sql = "DELETE FROM `".db_pref."codes` WHERE `ID`=$id";
            $query = $this->db->query($sql);
            $this->Head('?c=code&id=1');
        } else {
            $_SESSION['alert'] = 'Сначала удалите вложенные страницы!';
            $this->Head("?c=code&id=$id");
        }
    }

    public function ShowPage(){
        $row = $this->getPages($this->id);
        $content = @file_get_contents($this->source_dir.$this->id.'/index.php');
        $this->assign(array(
            'page_id'         => $this->id,
            'page_title'      => isset($this->post['title'])    ?   $this->post['title']    :    $row['TITLE'],
            'page_alias'      => isset($this->post['alias'])    ?   $this->post['alias']    :    $row['ALIAS'],
            'page_template'   => isset($this->post['template']) ?   $this->post['template'] :    $row['TEMPLATE'],
            'page_parent'     => isset($this->post['parent'])   ?   $this->post['parent']   :    $row['PARENT'],
            'page_publ'       => isset($this->post['publ'])     ?   $this->post['publ']     :    $row['PUBLIC'],
            'page_content'    => isset($this->post['content'])  ?   $this->post['content']  :    $content,
            'page_meta_desc'  => isset($this->post['meta_description'])?   $this->post['meta_description']:    $row['META_DESC'],
            'page_meta_keywords'  => isset($this->post['meta_keywords'])?   $this->post['meta_keywords']:    $row['META_KEYWORDS'],
            'pages'           => $this->pages,
            'templates'       => $this->func->getTemplates($this->templates_dir.'code/'),
        ));
        $this->content = $this->SetTemplate('code.tpl');
    }

    public function getSiteMap(){
        $return = array();
        $sql = "SELECT ALIAS FROM `".db_pref."codes`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` DESC";
        $result = $this->db->query($sql);
        if ($this->db->num_rows($result)){
            for ($i = 0; $i < $this->db->num_rows($result); $i++){
                $row = $this->db->fetch_array($result);
                $return[]  = array(
                    'loc'           => $this->site_url . 'code/' . $row['ALIAS'] .'/',
                    'changefreq'    => 'weekly',
                    'priority'      => '1',
                );
            }
        }

        return $return;
    }

    public function Index(){
        $this->SetPlugins();
        $this->page_title = 'Управление произвольными кодами';
        if (isset($this->post['title']) && trim($this->post['title'])!==''){
            $this->SavePage();
        }

        $this->pages = $this->getPages();
        $this->structure = $this->func->getStructure($this->pages);
        $this->ShowMenu();

        if ($this->act == 'new'){
            $this->ShowPageNew();
        }
        elseif ($this->act=='del'){
            $this->DeletePage($this->id);
        }
        elseif (isset($this->id) && $this->id!==''){
            $this->ShowPage();
        }

        if(!isset($this->act) && !isset($this->id)){
            $this->head('?c=code&act=new');
        }

        return $this->content;
    }
}
?>