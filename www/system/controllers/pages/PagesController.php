<?php

class PagesController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->table_name = 'agcms_pages`';
        $this->module_alias = 'pages';
    }
    public function GetBlog(){
        $rs = false;
        $number = $this->post['id'];
        $nap = $this->post['nap'];
        $cid = $this->post['cid'];
        $sql = "SELECT * FROM agcms_blog_i WHERE PARENT LIKE '%,$cid,%' AND PUBLIC=1";
        if ($items = $this->db->select($sql)){
            if ($nap == 1){
                $number = $number + 1;
            }
            if ($nap == 0){
                $number = $number - 1;
            }
            if (count($items) == $number){
                $number = 0;
            }
            if ($number == -1){
                $number = count($items)-1;
            }

            $rs = $items[$number];
            $rs['NUMBER'] = $number;
            $rs['SHORT_CONTENT'] = mb_substr(($rs['CONTENT']), 0, 400);
        }
        echo json_encode($rs);
        exit;
    }
    public function Index(){
        if (isset($this->post['action']) && $this->post['action'] == 'GebBlog'){
            $this->GetBlog();
        }
        $this->LoadModel('pages');
        if ($this->query){
            $row = $this->ModelPages->GetPageClient(end($this->query));
        } else {
            $row = $this->ModelPages->GetPage(1);
        }

        if ($row){
            $id = $row['ID'];
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
            if ($row['PARENT'] > 0){
                $parent_id = $row['PARENT'];
            }
            $sub_pages_status = false;
            $sub_pages = $this->ModelPages->GetPagesParent($id);
            if (count($sub_pages) > 0){
                $row['CONTENT'] = $sub_pages[0]['CONTENT'];
                $sub_pages_status = true;
            } else {
                $sub_pages = $this->ModelPages->GetPagesParent($parent_id);
                //var_dump($sub_pages);
                if (count($sub_pages) > 0){
                    //$row['CONTENT'] = $sub_pages[0]['CONTENT'];
                    $sub_pages_status = true;
                }
            }

            if ($row['ID']>1){
                $this->breadcrumbs = array(
                    array('text' => 'Главная', 'href' => '/'),
                    array('text' => $row['TITLE'], 'href' => ''),
                );
            }


            $this->SetPath($this->module_alias.'/');
            $this->assign(array(
                'page'             => $row,
                'sub_pages'        => $sub_pages,
                'sub_pages_status'        => $sub_pages_status,
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