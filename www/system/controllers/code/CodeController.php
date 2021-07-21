<?php

class codeController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->row = array();
    }
    public function Index(){
        if ($this->query){
            $alias = end($this->query);
            $sql = "SELECT * FROM `".db_pref."codes` WHERE `ALIAS` = '$alias' AND `PUBLIC`=1 LIMIT 1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){
                $row = $this->db->fetch_array($query);
                $this->page_title = $row['TITLE'];
                $this->meta_description = $row['META_DESC'];
                $this->meta_keywords = $row['META_KEYWORDS'];
                $in_file = dirname(__FILE__).'/source/'.$row['ID'].'/index.php';
                if (file_exists($in_file)){
                    ob_start();
                    include_once($in_file);
                    $content = ob_get_contents();
                    ob_end_clean();
                }
                $this->assign(array(
                    'site_title'       => $row['TITLE'].' - '. $this->config->SiteTitle,
                    'page_title'       => $row['TITLE'],
                    'content'       => $content,
                ));
                $this->SetPath('code/');
                $this->content = $this->SetTemplate($row['TEMPLATE'].'.tpl');

            }
        }
        return $this->content;
    }
}
?>