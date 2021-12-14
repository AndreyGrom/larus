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

    public function ShowCategory(){
        $sql = "SELECT i.* FROM agcms_shop_i i WHERE i.PARENT LIKE '%," . $this->category['ID'] . ",%'";
        $sql = "SELECT i.*, @id:=i.ID,
        (SELECT COUNT(*) FROM agcms_comments WHERE CONTROLLER = 'shop' AND MATERIAL_ID = @id) AS COMMENTS_COUNT
            , (SELECT MIN(PRICE) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN_PRICE
            , (SELECT MIN(LEN) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN
        FROM agcms_shop_i i WHERE i.PARENT LIKE '%," . $this->category['ID'] . ",%'";
        $items = $this->db->select($sql);

        $this->assign(array(
            'category'  => $this->category,
            'items' => $items,
        ));

        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('category.tpl');
    }


    public function Index(){
        $this->GetCategories();
        $this->assign(array(
            'categories'  => $this->categories,
        ));
        if (count($this->get) > 0){
            if ($this->category = $this->GetCategory($this->query[0])){
                $this->ShowCategory();

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