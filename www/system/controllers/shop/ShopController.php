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
        FROM agcms_shop_i i WHERE i.PARENT LIKE '%," . $category_id . ",%' ORDER BY i.SORT";
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

    public function GetItemFromId($id){
        $sql = "SELECT i.* FROM agcms_shop_i i  WHERE i.ID = $id LIMIT 1";
        $item = array();
        if ($item = $this->db->select($sql, array('single_array' => true))) {
            $sql = "SELECT * FROM agcms_shop_len WHERE PRODUCT_ID = " . $item['ID'];
            $item['LEN'] = $this->db->select($sql);

            $sql = "SELECT * FROM agcms_shop_raz WHERE PRODUCT_ID = " . $item['ID'];
            $item['RAZ'] = $this->db->select($sql);
        }
        return $item;
    }

    public function AjaxCart(){
        $act = $this->post['act'];
        $id = $this->post['id'];
        $rs = '';
        if ($act == 'GetLin'){
            $rs .= '<option value="0">Выбрать линейку</option>';
            foreach ($this->categories as $category) {
                if ($category['ID'] == $id){
                    foreach ($category['SUB'] as $category2) {
                        $rs .= '<option value="' . $category2['ID'] . '">' . $category2['TITLE'] . '</option>';
                    }
                }
            }
        }
        if ($act == 'GetType'){
            $rs .= '<option value="0">Выбрать тип кабеля</option>';
            $items = $this->GetItems($id);
            foreach ($items as $i) {
                $rs .= '<option value="' . $i['ID'] . '">' . $i['TITLE'] . '</option>';
            }
        }
        if ($act == 'GetKabel'){
            $item = $this->GetItemFromId($id);
            echo json_encode($item);
            exit;
        }
        echo $rs;
        exit;
    }

    public function SetCartId(){
        if (!isset($_COOKIE['cart_id'])){
            $cart_id = Func::getInstance()->generateName();
            setcookie('cart_id', $cart_id, time()+3600*24*30*6, '/');
        } else {
            $cart_id = $_COOKIE['cart_id'];
        }
        return $cart_id;
    }

    public function AddToCart(){
        $cart_id = $this->SetCartId();
        $params = array(
            'PRODUCT_ID' => $this->post['product_id'],
            'LEN_ID' => $this->post['len_id'],
            'RAZ_ID' => $this->post['raz_id'],
            'SER_ID' => $this->post['ser_id'],
            'LIN_ID' => $this->post['lin_id'],
            'HASH' => $cart_id,
            'CNT' => $this->post['cnt'],
        );
        $this->db->insert('agcms_shop_cart', $params);
        exit;
    }

    public function ShowCart(){
        $cart_id = $this->SetCartId();
        $total = 0;
        $sql = "SELECT cart.*, len.LEN AS LEN, len.PRICE AS LEN_PRICE, 
        raz.SNAME AS RAZ, raz.SCAPT AS RAZ_CAPT, raz.PRICE AS RAZ_PRICE, 
        i.TITLE AS PRODUCT_TITLE, i.MODEL AS PRODUCT_MODEL, i.SKIN,
        c.TITLE AS SER_TITLE , c2.TITLE AS LIN_TITLE
        FROM agcms_shop_cart cart
        LEFT JOIN agcms_shop_c c ON cart.SER_ID = c.ID
        LEFT JOIN agcms_shop_c c2 ON cart.LIN_ID = c2.ID
        LEFT JOIN agcms_shop_i i ON cart.PRODUCT_ID = i.ID
        LEFT JOIN agcms_shop_len len ON cart.LEN_ID = len.ID
        LEFT JOIN agcms_shop_raz raz ON cart.RAZ_ID = raz.ID
        WHERE cart.HASH = '$cart_id' GROUP BY cart.ID";
        if ($items = $this->db->select($sql)){
            foreach ($items as $i){
                $total = $total + $i['LEN_PRICE'] + $i['RAZ_PRICE'];
            }
        }

        $this->assign(array(
            'items' => $items,
            'total' => $total,
        ));
//       var_dump($this->db->error());
//        var_dump($sql);
//        var_dump($items);
        $this->SetPath('shop/');
        $this->content = $this->SetTemplate('cart.tpl');
    }

    public function CartDeleteRaz(){
        $cart_id = $this->SetCartId();
        $id = $this->get['cart-delete-raz'];
        $sql = "UPDATE agcms_shop_cart SET RAZ_ID =0 WHERE ID = $id AND HASH = '$cart_id'";
        $this->db->query($sql);
        $this->Head("/shop/cart");
    }

    public function CartDeleteItem(){
        $cart_id = $this->SetCartId();
        $id = $this->get['cart-delete-item'];
        $sql = "DELETE FROM agcms_shop_cart WHERE ID = $id AND HASH = '$cart_id'";
        $this->db->query($sql);
        $this->Head("/shop/cart");
    }

    public function Index(){
        $this->GetCategories();
        $this->assign(array(
            'categories'  => $this->categories,
        ));

        if (isset($this->post['act'])){
            $this->AjaxCart();
        }
        if (isset($this->get['cart-delete-raz'])){
            $this->CartDeleteRaz();
        }
        if (isset($this->get['cart-delete-item'])){
            $this->CartDeleteItem();
        }
        if (isset($this->post['add_cart'])){
            $this->AddToCart();
        }
        if (count($this->get) > 0){
            if ($this->category = $this->GetCategory($this->query[0])){
                $this->ShowCategory();
            } elseif (isset($this->get['cart'])){
                $this->ShowCart();
            }
            else {
                $this->ShowItem();
            }
        } else{
            $this->ShowMainPage();
        }

        return $this->content;
    }




}
?>