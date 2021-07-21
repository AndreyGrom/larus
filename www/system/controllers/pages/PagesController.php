<?php

class PagesController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->table_name = '`'.db_pref.'pages`';
        $this->module_alias = 'pages';
    }
    public function Index(){
        $this->LoadModel('pages');
        if ($this->query){
            $row = $this->ModelPages->GetPageClient(end($this->query));
        } else {
            $row = $this->ModelPages->GetPage(1);
        }

        if ($row){
            $row['DATE_PUBL'] = $this->DateFormat($row["DATE_PUBL"]);
            $row['DATE_EDIT'] = $this->DateFormat($row["DATE_EDIT"]);
            $this->page_title = $row['TITLE'];
            $this->meta_title = $row['META_TITLE'];
            $this->meta_description = $row['META_DESC'];
            $this->meta_keywords = $row['META_KEYWORDS'];
            $this->page_title = $row['TITLE'];
            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }
            if ($this->meta_description == ''){
                $this->meta_description = mb_substr(strip_tags($row['CONTENT']), 0, 200, 'UTF-8');;
            }
            if ($row['ID']>1){
                $this->breadcrumbs = array(
                    array('text' => 'Главная', 'href' => '/'),
                    array('text' => $row['TITLE'], 'href' => ''),
                );
            }


            $this->SetPath($this->module_alias.'/');
            $this->assign(array(
                'page_title'       => $row['TITLE'],
                'page_content'     => $row['CONTENT'],
            ));
            $this->content =$this->SetTemplate($row['TEMPLATE'] . '.tpl');
        } else {

        }
        return $this->content;
    }

    public function getSiteMap(){
        $sql = "SELECT ALIAS FROM `".db_pref."pages`  WHERE `PUBLIC`=1 ORDER BY `DATE_PUBL` DESC";
        $result = $this->db->query($sql);
        $return = array();
        if ($this->db->num_rows($result)){
            for ($i = 0; $i < $this->db->num_rows($result); $i++){
                $row = $this->db->fetch_array($result);
                $return[]  = array(
                    'loc'           => $this->site_url . $row['ALIAS'] .'/',
                    'changefreq'    => 'weekly',
                    'priority'      => '1',
                );
            }
        }
        return $return;
    }
}