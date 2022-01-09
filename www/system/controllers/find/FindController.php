<?php

class FindController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);

    }
    public function Index(){
        $items_blog = array();
        $items_shop = array();
        if (isset($this->get['q'])){
            $q = urldecode($this->get['q']);
            $sql = "SELECT * FROM agcms_blog_i WHERE TITLE LIKE '%$q%' OR CONTENT LIKE '%$q%'";
            $items_blog = $this->db->select($sql);
            $q = urldecode($this->get['q']);
            $sql = "SELECT * FROM agcms_shop_i WHERE TITLE LIKE '%$q%' OR CONTENT LIKE '%$q%'";
            $items_shop = $this->db->select($sql);
            $this->assign(array(
                'items_blog' => $items_blog,
                'items_shop' => $items_shop,
            ));
        }

        $this->SetPath('find/');
        $this->content = $this->SetTemplate('index.tpl');
        return $this->content;
    }
}
?>