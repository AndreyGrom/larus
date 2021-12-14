<?php

class ShopController extends Controller {
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
        $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `ALIAS` = '$alias' AND `PUBLIC`=1 LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
        }
        return $result;
    }

    public function Index(){

        if (!$this->config->ShopEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (isset($this->get['cancel'])){
            unset($this->session['cart']);
            unset($_SESSION['cart']);;
            setcookie('cart','',time()+3600*24*30*6,'/');
            $this->Head($_SERVER['HTTP_REFERER']);
        }
        elseif (isset($this->get['cart'])){
            $this->ShowCart();
        }
        elseif (isset($this->get['tag'])){
            $this->ShowItems();
        }
        elseif (count($this->query)==1 && is_numeric($this->query[0])){
            $this->ShowItem($this->query[0]);
        }
        elseif ($this->query){ // если есть алиас

            $this->alias = end($this->query);
            if (strpos($this->alias, 'page') === false) {

                $row = $this->GetCategory($this->alias);
                $this->categories = $row;

                if ($row){ // Если алиас принадлежит категории
                    $this->cid = $row['ID']; // получаем id категории для вывода всех материалов подкатегорий
                    $this->alias = $row['ALIAS'];
                    $this->template = $row['TEMPLATE'];
                    $this->page_title = $row['TITLE'];
                    $this->desc = $row['DESC'];
                    $this->desc2 = $row['DESC2'];
                    $this->meta_title = $row['META_TITLE'];
                    $this->meta_description = $row['META_DESC'];
                    $this->meta_keywords = $row['META_KEYWORDS'];

                    if (!$this->ShowCategories()){ // если нет подкатегорий
                        $this->ShowItems();       // то выводим материалы
                    }
                } else { // Если алиас принадлежит материалу, то выводим его
                    $this->ShowItem();
                }
            } else { // если нет алиаса, то выводим корневые категории
                $this->ShowMainPage();
            }
        } else {

            $this->ShowMainPage();
        }

        return $this->content;
    }

    public function ShowMainPage(){
        $this->page_title = $this->config->ShopModuleTitle;
        $this->meta_title = $this->config->ShopModuleTitle.' - '. $this->config->SiteTitle;
        $this->meta_description = $this->config->ShopModuleDescription;
        $this->meta_keywords = $this->config->ShopModuleKeywords;
        $this->template = 'default';
        $this->ShowItems();
        //$this->ShowCategories();
    }

    public function ShowCategories(){
        $sql = "SELECT * FROM `".db_pref."shop_c` WHERE `PARENT` = '$this->cid' AND `PUBLIC`=1"; // получаем потомков
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){ // Если в категории есть подкатегории, то выводим их
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['IMAGE']!==''){
                    $row['IMAGE_NEW'] = Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'shop/'.$row['IMAGE'], $this->config->ShopImageWidthCategoryList,$this->config->ShopImageHeightCategoryList,'','shop');
                }

                $this->categories[] = $row;
            }
            $this->assign(array(
                'page_title'       => $this->page_title,
                'categories'       => $this->categories,
                'cid'              => $this->cid,
            ));
            $this->SetPath('shop/list/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
            return true;
        }
    }

    public function ShowItems(){
        $sort = $this->config->ShopItemListSort;
        $this->breadcrumbs[] = array('text' => 'Главная', 'href' => '/');
        if($this->cid > 0){
            $this->breadcrumbs[] = array('text' => $this->config->ShopModuleTitle, 'href' => '/shop');
            $this->breadcrumbs[] = array('text' => $this->page_title, 'href' => '');
        } elseif(isset($this->get['tag'])){
            $tag = urldecode($this->get['tag']);
            $this->page_title = $tag;
            $this->breadcrumbs[] = array('text' => $this->config->ShopModuleTitle, 'href' => '/shop');
            $this->breadcrumbs[] = array('text' => $this->page_title, 'href' => '');
        }
        else{
            $this->breadcrumbs[] = array('text' => $this->config->ShopModuleTitle, 'href' => '');
        }
        $sql = "SELECT i.*, @id:=i.ID,
        (SELECT COUNT(*) FROM `".db_pref."comments` WHERE `CONTROLLER` = 'shop' AND `MATERIAL_ID` = @id) AS COMMENTS_COUNT
            , (SELECT MIN(PRICE) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN_PRICE
            , (SELECT MIN(LEN) FROM agcms_shop_len WHERE PRODUCT_ID = @id) as LEN
        FROM ".db_pref."shop_i i";

        if (isset($this->get['tag'])){
            $sql .= "  WHERE i.TAGS LIKE '%,$tag,%' AND i.PUBLIC=1";
            $url = '/shop/tag=' .  $tag . '/';
        }
        elseif ($this->cid==0){
            $sql .= " WHERE i.PUBLIC=1";
            $url = '/shop/';
        } else {
            $sql .= " WHERE i.PARENT LIKE '%,$this->cid,%' AND i.PUBLIC=1";
            $url = '/shop/' . $this->alias . '/';
        }
        $sql .= " ORDER BY i.SORT, i.ID ASC";

        $params = array(
            'sql' => $sql,
            'per_page' => $this->config->ShopItemListPerPage,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => $url,
            'get_name' => 'page',
        );
        $result = $this->getPagination($params);

        $query = $result['query'];
        $num_pages = $result['num_pages'];
        $pagination = $result['pagination'];
        $items = $result['items'];
        foreach ($items as &$i){
            $i["DATE_PUBL"] = $this->DateFormat($i["DATE_PUBL"]);
            $i["DATE_EDIT"] = $this->DateFormat($i["DATE_EDIT"]);
            $i['PARENTS'] =   explode(',',  $i['PARENT']);
            $i['PARENTS'] = array_diff($i['PARENTS'], array(''));

            $i['PARENTS'] = $i['PARENTS'][1];

        }

        if ($this->meta_title == ''){
            $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
        }

        $sql = "SELECT * FROM agcms_shop_c";
        $categories = $this->db->select($sql);

        $category = array();
        $category2 = array();
        if (count($items) > 0){
            if ($category = $this->db->select("SELECT * FROM agcms_shop_c WHERE ID = " .  $items[0]['PARENTS'])){
                if ($category[0]['PARENT'] > 0){

                    $category2 = $this->db->select("SELECT * FROM agcms_shop_c WHERE ID = " .  $category[0]['PARENT']);
                }

            }
        }

        $this->assign(array(
            'page_title'       => $this->page_title,
            'items'            => $items,
            'cid'              => $this->cid,
            'desc'             => $this->desc,
            'desc2'            => $this->desc2,
            'pagination'       => $pagination,
            'num_pages'        => $num_pages,
            'category'         => $category[0],
            'category2'         => $category2[0],
            'categories'         => $categories,
        ));

        $this->SetPath('shop/list/');
        if ($this->template == ''){
            $this->template = 'default';
        }
        $this->content = $this->SetTemplate($this->template.'.tpl');
    }

    public function ShowItem($id=0){

        if ($id > 0){
            $sql = "SELECT * FROM `".db_pref."shop_i`  WHERE `ID` = '$id' AND `PUBLIC`=1 LIMIT 1";
        } else {
            $sql = "SELECT i.*

            FROM `".db_pref."shop_i` i  WHERE i.ALIAS = '$this->alias' AND i.PUBLIC = 1 LIMIT 1";
        }
        $categories = array();
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $row = $this->db->fetch_array($query);
            $row["DATE_PUBL"] = $this->DateFormat($row["DATE_PUBL"]);
            $row["DATE_EDIT"] = $this->DateFormat($row["DATE_EDIT"]);
            $item = $row;
            $item['CONTENT'] = Func::getInstance()->syntax_filter( $item['CONTENT']);

            $str = $row['TAGS'];
            $tags = explode(",",$str);
            $tags = array_filter($tags);
            sort($tags);

            $files = array();
            $str = $row["FILES"];
            if ($str!==''){
                $files = unserialize($str);
            }

            $this->meta_title = $row['META_TITLE'];
            $this->meta_description = $row['META_DESC'];
            if (trim($this->meta_description == '')){
                $this->meta_description = mb_substr(trim(strip_tags($item['SHORT_CONTENT'])),0,200);
            }
            if (trim($this->meta_description == '')){
                $this->meta_description = mb_substr(trim(strip_tags($item['CONTENT'])),0,200);
            }
            $this->meta_keywords = $row['META_KEYWORDS'];
            $this->page_title = $row['TITLE'];
            if ($this->meta_title == ''){
                $this->meta_title = $this->page_title.' - '. $this->config->SiteTitle;
            }
            $this->page_title = $row["TITLE"];

            if ($item["IMAGES"] !==''){
                $item["IMAGES"] = explode(',', $item["IMAGES"]);
            }


            /*Получаем список категорий, к которым принадлежит материал*/
            $str = $row['PARENT'];
            $parents = explode(",",$str);
            $parents = array_filter($parents);
            sort($parents);
            $str = implode(",",$parents);
            $sql = "SELECT * FROM `".db_pref."shop_c`  WHERE `ID` IN ($str) AND `PUBLIC`=1";
            $query = $this->db->query($sql);
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                $categories[] = $row;
            }
            /*///////////////////*/

            /*Выбираем похожие материалы*/
            $other_items = array();
            if (count($tags) > 0){
                $sql = "";
                foreach ($tags as $k=>$t){
                    if ($k>0){
                        $sql.= " OR `TAGS` LIKE '%$t%'";
                    } else {
                        $sql.= "`TAGS` LIKE '%$t%'";
                    }
                }
                $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            if (count($other_items) == 0){
                $sql = "";
                foreach ($parents as $k=>$t){
                    if ($k>0){
                        $sql.= " OR `PARENT` LIKE '%$t%'";
                    } else {
                        $sql.= "`PARENT` LIKE '%$t%'";
                    }
                }
                $sql = "SELECT * FROM `".db_pref."shop_i` WHERE `ID` <> ".$item["ID"]." AND ( ".$sql." ) ORDER BY `DATE_EDIT` DESC LIMIT 10";
                $query = $this->db->query($sql);
                for ($i=0; $i < $this->db->num_rows($query); $i++) {
                    $row = $this->db->fetch_array($query);
                    $other_items[] = $row;
                }
            }
            /*///////////////////*/

            if ($this->config->CatalogCommentsEnabled && $item['COMMENTS']){
                include_once(dirname(__FILE__).'../../comments/CommentsController.php');
                $comments = new CommentsController($this->query, $this->controller);
                $comments->material_id = $item["ID"];
                $comments->controller = $this->controller;
                $comments->premoderation = $this->config->CatalogCommentsModerationEnabled;
                $comments->captcha = $this->config->CatalogCommentsCaptchaEnabled;
                $comments->tpl_view = $this->config->CatalogCommentsTemplateView.'.tpl';
                $comments->tpl_form = $this->config->CatalogCommentsTemplateForm.'.tpl';


                $comments ->Index();
                $this->smarty->assign(array(
                    'comments_form'                 => $comments->comments_form,
                    'comments'                      => $comments->comments,
                ));
                if (count($comments->js) > 0){
                    foreach ($comments->js as $j){
                        $this->js[]=$j;
                    }
                }
                if (count($comments->css) > 0){
                    foreach ($comments->css as $j){
                        $this->css[]=$j;
                    }
                }
            }


/*            $this->breadcrumbs = array(
                array('text' => 'Главная', 'href' => '/'),
                array('text' => $categories[0]['TITLE'], 'href' => '/shop/'.$categories[0]['ALIAS']),
                array('text' => $item['TITLE'], 'href' => ''),
            );*/
            $this->breadcrumbs[] = array('text' => 'Главная', 'href' => '/');
            $this->breadcrumbs[] = array('text' => 'Магазин', 'href' => '/shop/');
            foreach ($categories as $c){
                $this->breadcrumbs[] = array('text' => $c['TITLE'], 'href' => '/shop/'.$c['ALIAS']);
            }
            $this->breadcrumbs[] = array('text' => $item['TITLE'], 'href' => '');

            $sql = "SELECT * FROM agcms_shop_len WHERE PRODUCT_ID = " . $item['ID'];
            $len = $this->db->select($sql);

            $sql = "SELECT * FROM agcms_shop_raz WHERE PRODUCT_ID = " . $item['ID'];
            $raz = $this->db->select($sql);

            $this->assign(array(
                'item'             => $item,
                'len'             => $len,
                'raz'             => $raz,
                'other_items'      => $other_items,
                'parents'          => $categories,
                'files'            => $files,
                'tags'             => $tags,
                'image'            => $item['SKIN'],
                'page_title'       => $this->page_title ,
                'image_new'        => Func::getInstance()->GetImage(UPLOAD_IMAGES_DIR.'shop/'.$item['SKIN'], $this->config->CatalogImageWidthItem,$this->config->CatalogImageHeightItem,'','shop'),
                'images'           => explode(",",$item['IMAGES']),
            ));

            $this->SetPath('shop/single/');
            $this->content = $this->SetTemplate('default.tpl');
        }
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