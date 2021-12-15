<?php

class ShopController extends Controller {
    private $categories;
    private $category;
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->row = array();
        $this->cid = 0;
        $this->categories = array();
        $this->template = '';
        $this->alias = '';
        $this->desc = '';
        $this->desc2 = '';
    }

    public function GetCategory($alias){
        $result = false;
        $sql = "SELECT * FROM agcms_shop_c WHERE ALIAS = '$alias' LIMIT 1";
        if ($row = $this->db->select($sql, array('single_array' => true))){
            $result = $row;
        }
        return $result;
    }

    public function GetCategoryFromID($id){
        $result = false;
        $sql = "SELECT * FROM agcms_shop_c WHERE ID = '$id' LIMIT 1";
        if ($row = $this->db->select($sql, array('single_array' => true))){
            $result = $row;
        }
        return $result;
    }

    public function GetCategories($parent = 0){
        $sql = "SELECT * FROM agcms_shop_c";
        $categories = $this->db->select($sql);
        $this->categories = Func::getInstance()->getStructure($categories);
        return $categories;
    }

    public function ShowMainPage(){
        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('main.tpl');
    }

    public function GetItems($category_id){
        $sql = "SELECT i.*, @id:=i.ID,
        (SELECT COUNT(*) FROM agcms_comments WHERE CONTROLLER = 'shop' AND MATERIAL_ID = @id) AS COMMENTS_COUNT
            , (SELECT MIN(PRICE) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN_PRICE
            , (SELECT MIN(LEN) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN
        FROM agcms_shop_i i WHERE i.PARENT LIKE '%," . $category_id . ",%'";
        return $this->db->select($sql);
    }

    public function ShowCategory(){

        $items = $this->GetItems($this->category['ID']);
        $this->assign(array(
            'category'  => $this->category,
            'items' => $items,
        ));

        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('category.tpl');
    }

    public function ShowItem(){
        $alias = $this->query[0];
        $sql = "SELECT i.* FROM agcms_shop_i i  WHERE i.ALIAS = '$alias' LIMIT 1";
        if ($item = $this->db->select($sql, array('single_array' => true))){

            $id = $item['ID'];

            $parents = explode(",", $item['PARENT']);
            $parents = array_filter($parents);
            sort($parents);
            $this->category = $this->GetCategoryFromID($parents[0]);
            $items = $this->GetItems($this->category['ID']);

            $item["DATE_PUBL"] = $this->DateFormat($item["DATE_PUBL"]);
            $item["DATE_EDIT"] = $this->DateFormat($item["DATE_EDIT"]);

            $str = $item['TAGS'];
            $tags = explode(",",$str);
            $tags = array_filter($tags);
            sort($tags);

            $files = array();
            $str = $item["FILES"];
            if ($str!==''){
                $files = unserialize($str);
            }

            $this->meta_title = $item['META_TITLE'];
            $this->meta_description = $item['META_DESC'];
            if (trim($this->meta_description == '')){
                $this->meta_description = mb_substr(trim(strip_tags($item['SHORT_CONTENT'])),0,200);
            }
            if (trim($this->meta_description == '')){
                $this->meta_description = mb_substr(trim(strip_tags($item['CONTENT'])),0,200);
            }
            $this->meta_keywords = $item['META_KEYWORDS'];
            $this->page_title = $item['TITLE'];
            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }
            $this->page_title = $item["TITLE"];

            if ($item["IMAGES"] !==''){
                $item["IMAGES"] = explode(',', $item["IMAGES"]);
            }

            $sql = "SELECT * FROM agcms_shop_len WHERE PRODUCT_ID = " . $item['ID'];
            $len = $this->db->select($sql);

            $sql = "SELECT * FROM agcms_shop_raz WHERE PRODUCT_ID = " . $item['ID'];
            $raz = $this->db->select($sql);

            $this->assign(array(
                'item'             => $item,
                'len'             => $len,
                'raz'             => $raz,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'page_title'       => $this->page_title ,
                'images'           => explode(",",$item['IMAGES']),
                'category'  => $this->category,
                'items' => $items,
            ));
        }
        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('item.tpl');
    }

    public function Index(){
        $this->GetCategories();
        $this->assign(array(
            'categories'  => $this->categories,
        ));
        if (count($this->get) > 0){
            if ($this->category = $this->GetCategory($this->query[0])){
                $this->ShowCategory();
            } else {
                $this->ShowItem();
            }
        } else{
            $this->ShowMainPage();
        }

        return $this->content;
    }



    public function ShowCart(){
        $itog = 0;
        $cart = json_decode($_COOKIE['cart']);

        foreach ($cart as &$c){
            $itog = $itog + ($c->len + $c->raz) * $c->count;
        };
        $this->assign(array(
            'itog' => $itog,
            'cart' => $cart,
        ));

        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('cart.tpl');
    }
}
?>