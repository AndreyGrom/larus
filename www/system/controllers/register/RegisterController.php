<?php

class RegisterController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);

    }
    public function SetPlugins(){
        /*        $this->js[]   = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.min.js';
                $this->js[]   = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.rfm.js';
                $this->css[]  = HTML_PLUGINS_DIR.'cleeditor/jquery.cleditor.css';*/
        $this->js[]   = HTML_PLUGINS_DIR.'tinymce/tinymce.min.js';
        $this->js[]   = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.js';
        $this->js[]   = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.pack.js';
        $this->js[]   = HTML_CONTROLLERS_DIR.'news/action.js';
        $this->js[]   = HTML_PLUGINS_DIR.'ajaxupload.3.5.js';
        $this->css[]  = HTML_PLUGINS_DIR.'fancybox/jquery.fancybox.css';
        $this->js[]   = HTML_PLUGINS_DIR.'jquery-ui-1.11.4.custom/jquery-ui.min.js';
        $this->css[]  = HTML_PLUGINS_DIR.'jquery-ui-1.11.4.custom/jquery-ui.min.css';
    }
    public function Login(){

    }

    public function ShowProfile(){
            $this->page_title = 'Мой профиль';
            $this->assign(array(
                'user' => $this->user,
            ));
            $this->SetPath('register/profile');
            $this->content =$this->SetTemplate('default.tpl');
    }

    public function ShowBlog(){
        if ($this->login){
            $this->page_title = 'Мой блог';
            $sql = "SELECT * FROM agcms_blog_i WHERE USER_ID = " . $this->user['ID'];
            $items = $this->db->select($sql);
            $this->assign(array(
                'items' => $items,
            ));
            $this->SetPath('register/profile');
            $this->content =$this->SetTemplate('blog.tpl');
        } else {
            $this->Head('/registry');
        }

    }
    public function GetBlog($id){
        $sql = "SELECT * FROM agcms_blog_i WHERE ID = $id AND USER_ID = " . $this->user['ID'];
        $item = $this->db->select($sql, array('single_array' => true));
        $item['PARENTS'] = explode(',', $item['PARENT']);
        $item['PARENTS'] = array_filter($item['PARENTS']);
        $item['PARENTS'] = array_values($item['PARENTS']);
        if (isset($item['IMAGES']) && $item['IMAGES'] !== ''){
            $item['IMAGES'] = explode(',', $item['IMAGES']);
        }
        return $item;
    }

    public function getCategories($parent = false){
        $sql = "SELECT * FROM agcms_blog_c ORDER BY ID";
        $items = $this->db->select($sql);
        return $items;
    }
    public function GetVideos(){
        $sql = "SELECT * FROM agcms_video_i ORDER BY TITLE";
        $items = $this->db->select($sql);
        return $items;
    }
    public function ShowBlogItem(){
        $this->SetPlugins();
        $categories = $this->getCategories();
        $structure = Func::getInstance()->getStructure($categories);
        if ($this->get['blog-item'] > 0){
            $item = $this->GetBlog($this->get['blog-item']);
            $this->assign(array(
                'blog' => $item,
            ));
            //var_dump($item['IMAGES']);
        }
        $this->assign(array(
            'categories' => $structure,
            'videos' => $this->GetVideos(),
        ));
        $this->SetPath('register/profile');
        $this->content =$this->SetTemplate('blog-item.tpl');
    }
    public function SaveBlog(){
        if ($this->user['GROUP_ID'] == 6){
            $parents = '';
            if (isset($this->post['parents'])){
                $parents = ',' . implode(',',$this->post['parents']) . ',';
            }
            $id = $this->get['blog-item'];
            $params = array(
                'TITLE' => $this->post['title'],
                'ALIAS' => Func::getInstance()->TranslitURL($this->post['title']),
                'TEMPLATE' => 'default',
                'PARENT' => $parents,
                'PUBLIC' => 1,
                'COMMENTS' => 1,
                'DATE_PUBL' => time(),
                'SHORT_CONTENT' => $this->post['short_content'],
                'CONTENT' => $this->post['content'],
                'META_TITLE' => $this->post['meta_title'],
                'META_DESC' => $this->post['meta_desc'],
                'META_KEYWORDS' => $this->post['meta_keywords'],
                'VIDEO' => isset($this->post['video']) ? $this->post['video'] : 0,
                'USER_ID' => $this->user['ID'],
            );
            //var_dump($params);
            if ($id > 0){
                $this->db->update('agcms_blog_i', $params, "ID = $id AND USER_ID = " . $this->user['ID']);
            } else {
                $this->db->insert('agcms_blog_i', $params);
                $id = $this->db->last_id();
            }
            if ($this->db->error() !== ''){
                die($this->db->error());
            }
            $this->Head("/register/blog-item=$id");
        } else {
            $this->Head("/");
        }
    }
    public function RemoveBlogItem(){
        $sql = "DELETE FROM agcms_blog_i WHERE ID = " . $this->get['remove-blog-item'] . " AND USER_ID = " . $this->user['ID'];
        $this->db->query($sql);
        $this->Head("/register/blog/");
    }
    public function UploadImages(){
        $done_files = array();
        $id = $this->post['id'];
        $html = '';
        $upload_path = UPLOAD_IMAGES_DIR . 'blog/';
        $item = $this->GetBlog($id);
        $images = array();
        if (isset($item['IMAGES']) && $item['IMAGES'] !== ''){
            $images = $item['IMAGES'];
        }
        if ($id > 0) {
            foreach ($_FILES as $file) {
                if ($image = Func::getInstance()->UploadFile($file['name'], $file['tmp_name'], $upload_path)) {
                    $images[] = $image;
                    $this->assign(array(
                        'image' => $image,
                        'id' => $id,
                    ));

                    $this->smarty->template_dir = TEMPLATES_DIR . 'new/tpl/register/profile/';
                    $html .= $this->fetch( 'image.tpl');
                    $done_files[] = array('image' => $image) ;
                }
            }
            $sql = "UPDATE agcms_blog_i SET IMAGES = '" . implode(',', $images) . "' WHERE ID = $id";
            $query = $this->db->query($sql);
        }


        $data = array('files' => $done_files, 'html' => $html, 'error' => $this->db->error());
        die( json_encode( $data ) );
    }
    public function RemoveImage(){
        $id = $this->post['id'];
        $name = $this->post['name'];
        if ($item = $this->GetBlog($id)){
            foreach ($item['IMAGES'] as $img){
                if ($img !== $name){
                    $images[] =  $img;
                }
            }
            $images = implode(',', $images);
            $sql = "UPDATE agcms_blog_i SET IMAGES = '" . $images . "' WHERE ID = $id";
            $query = $this->db->query($sql);
            $file = UPLOAD_IMAGES_DIR.'blog/'.$name;
            if (file_exists($file)){
                unlink($file);
            }
        }
        die(true);
    }
    public function SetSkin(){
        $id = $this->post['id'];
        $name = $this->post['name'];
        $sql = "UPDATE agcms_blog_i SET SKIN = '" . $name . "' WHERE ID = $id";
        $query = $this->db->query($sql);
        die(true);
    }
    public function Index(){
        if ($this->login) {
            if (isset($this->post['save-blog'])){
                $this->SaveBlog();
            }
            if (isset($this->post['action']) && $this->post['action'] == 'images-upload'){
                $this->UploadImages();
            }
            if (isset($this->post['action']) && $this->post['action'] == 'remove-image'){
                $this->RemoveImage();
            }
            if (isset($this->post['action']) && $this->post['action'] == 'set-skin'){
                $this->SetSkin();
            }
            if (isset($this->get['profile'])) {
                $this->ShowProfile();
            } elseif (isset($this->get['blog'])) {
                $this->ShowBlog();
            } elseif (isset($this->get['blog-item'])) {
                $this->ShowBlogItem();
            }
            elseif (isset($this->get['remove-blog-item'])) {
                $this->RemoveBlogItem();
            }
        } else {
            $this->Head('/registry');
        }
        return $this->content;
    }
}