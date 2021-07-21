<?php

class RegisterController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->error = '';
        $this->tags = "<a><b><p><img><br>";
    }

    public function SaveUser(){
        if (isset($_FILES['avatar'])){
            $upload_dir    = UPLOAD_IMAGES_DIR.'users/avatars/'.$this->user['ID'].'/';
            if ($this->user['AVATAR_SRC']){
                if (file_exists($upload_dir.$this->user['AVATAR'])){
                    unlink($upload_dir.$this->user['AVATAR']);
                }
            }
            $avatar = Func::getInstance()->UploadFile($_FILES['avatar']['name'],$_FILES['avatar']['tmp_name'],$upload_dir);

        }

/*        $id = $this->user['ID'];
        $sql = "SELECT FROM `".db_pref."users` WHERE ID=$id LIMIT 1";
        $query = $this->db->query($sql);
        $user = $this->db->fetch_array($query);*/
        $id = $this->user['ID'];
        $first_name = isset($this->post['first_name']) ? strip_tags($this->db->input($_POST['first_name'])) : $this->user['FIRST_NAME'];
        $last_name = isset($this->post['last_name']) ? strip_tags($this->db->input($_POST['last_name'])) : $this->user['LAST_NAME'];
        $father_name = isset($this->post['father_name']) ? strip_tags($this->db->input($_POST['father_name'])) : $this->user['FATHER_NAME'];
        /*$nick = isset($this->post['nick']) ? strip_tags($this->db->input($_POST['nick'])) : $this->user['NICK'];*/
        $email = isset($this->post['email']) ? strip_tags($this->db->input($_POST['email'])) : $this->user['EMAIL'];
        $password = isset($this->post['password']) ? strip_tags($this->db->input($_POST['password'])) : $this->user['PASSWORD'];
        $phone = isset($this->post['phone']) ? strip_tags($this->db->input($_POST['phone'])) : $this->user['PHONE'];
        $skype = isset($_POST['skype']) ? strip_tags($this->db->input($_POST['skype'])) : $this->user['SKYPE'];
        $icq = isset($_POST['icq']) ? strip_tags($this->db->input($_POST['icq'])) : $this->user['ICQ'];
        $site = isset($_POST['site']) ? strip_tags($this->db->input($_POST['site'])) : $this->user['SITE'];
        $birthday = isset($_POST['birthday']) ? strip_tags($this->db->input($_POST['birthday'])) : $this->user['BIRTHDAY'];
        $country = isset($_POST['country']) ? strip_tags($this->db->input($_POST['country'])) : $this->user['COUNTRY'];
        $region = isset($_POST['region']) ? strip_tags($this->db->input($_POST['region'])) : $this->user['REGION'];
        $city = isset($_POST['city']) ? strip_tags($this->db->input($_POST['city'])) : $this->user['CITY'];
        $wmr = isset($_POST['wmr']) ? strip_tags($this->db->input($_POST['wmr'])) : $this->user['WMR'];
        $wmz = isset($_POST['wmz']) ? strip_tags($this->db->input($_POST['wmz'])) : $this->user['WMZ'];
        $yamoney = isset($_POST['yamoney']) ? strip_tags($this->db->input($_POST['yamoney'])) : $this->user['YAMONEY'];
        $qiwi = isset($_POST['qiwi']) ? strip_tags($this->db->input($_POST['qiwi'])) : $this->user['QIWI'];
        $card = isset($_POST['card']) ? strip_tags($this->db->input($_POST['card'])) : $this->user['CARD'];
        $signature = isset($_POST['signature']) ? strip_tags($this->db->input($_POST['signature']),$this->tags) : $this->user['SIGNATURE'];

        $sql = "UPDATE `".db_pref."users` SET
        `AVATAR`='$avatar',
        `FIRST_NAME`='$first_name',
        `LAST_NAME`='$last_name',
        `FATHER_NAME`='$father_name',
        `EMAIL`='$email',
        `PASSWORD`='$password',
        `PHONE`='$phone',
        `SKYPE`='$skype',
        `ICQ`='$icq',
        `SITE`='$site',
        `BIRTHDAY`='$birthday',
        `COUNTRY`='$country',
        `REGION`='$region',
        `CITY`='$city',
        `WMR`='$wmr',
        `WMZ`='$wmz',
        `YAMONEY`='$yamoney',
        `QIWI`='$qiwi',
        `CARD`='$card',
        `SIGNATURE`='$signature'
         WHERE `ID`=$id";
        $query = $this->db->query($sql);
        $this->Head("/register/profile");
    }

    public function RegisterUser(){
        if (isset($_POST['register'])){
            if($_SESSION['register'] !== $_POST['captcha']){
                $this->error = 'Неверно введен код с картинки!';
            }
            unset($_SESSION['register']);

            if ($this->error == ''){
                $first_name = isset($_POST['first_name']) ? $this->db->input($_POST['first_name']) : '';
                $last_name = isset($_POST['last_name']) ? $this->db->input($_POST['last_name']) : '';
                $father_name = isset($_POST['father_name']) ? $this->db->input($_POST['father_name']) : '';
                $nick = isset($_POST['nick']) ? trim($this->db->input($_POST['nick'])) : '';
                $email = isset($_POST['email']) ? $this->db->input($_POST['email']) : '';
                $password = isset($_POST['password']) ? $this->db->input($_POST['password']) : '';
                $phone = isset($_POST['phone']) ? $this->db->input($_POST['phone']) : '';
                $skype = isset($_POST['skype']) ? $this->db->input($_POST['skype']) : '';
                $icq = isset($_POST['icq']) ? $this->db->input($_POST['icq']) : '';
                $site = isset($_POST['site']) ? $this->db->input($_POST['site']) : '';
                $birthday = isset($_POST['birthday']) ? $this->db->input($_POST['birthday']) : '';
                $country = isset($_POST['country']) ? $this->db->input($_POST['country']) : '';
                $region = isset($_POST['region']) ? $this->db->input($_POST['region']) : '';
                $city = isset($_POST['city']) ? $this->db->input($_POST['city']) : '';
                $wmr = isset($_POST['wmr']) ? $this->db->input($_POST['wmr']) : '';
                $wmz = isset($_POST['wmz']) ? $this->db->input($_POST['wmz']) : '';
                $yamoney = isset($_POST['yamoney']) ? $this->db->input($_POST['yamoney']) : '';
                $qiwi = isset($_POST['qiwi']) ? $this->db->input($_POST['qiwi']) : '';
                $card = isset($_POST['card']) ? $this->db->input($_POST['card']) : '';
                $signature = isset($_POST['signature']) ? $this->db->input($_POST['signature']) : '';
                $ip = $_SERVER['REMOTE_ADDR'];
                $hash = $this->generateName(30);
                $date = time();
                $sql = "SELECT * FROM `".db_pref."users` WHERE `EMAIL`='$email'";
                $query = $this->db->query($sql);
                if ($this->db->num_rows($query) > 0){
                    $this->error = 'Email "<b>'.$email.'</b>" уже зарегистрирован в системе!';
                }
                $sql = "SELECT * FROM `".db_pref."users` WHERE `NICK`='$nick'";
                $query = $this->db->query($sql);
                if ($this->db->num_rows($query) > 0){
                    $this->error = 'Ник "<b>'.$nick.'</b>" уже зарегистрирован в системе!';
                }
                if ($this->error == ''){
                    $sql = "INSERT INTO `".db_pref."users` (
                    `FIRST_NAME`,
                    `LAST_NAME`,
                    `FATHER_NAME`,
                    `NICK`,
                    `EMAIL`,
                    `PASSWORD`,
                    `PHONE`,
                    `HASH`,
                    `DATE_CREATE`,
                    `SKYPE`,
                    `ICQ`,
                    `SITE`,
                    `BIRTHDAY`,
                    `COUNTRY`,
                    `REGION`,
                    `CITY`,
                    `WMR`,
                    `WMZ`,
                    `YAMONEY`,
                    `QIWI`,
                    `CARD`,
                    `SIGNATURE`,
                    `REG_IP`,
                    `LOGIN_IP`
                    )
                    VALUES (
                    '$first_name',
                    '$last_name',
                    '$father_name',
                    '$nick',
                    '$email',
                    '$password',
                    '$phone',
                    '$hash',
                    '$date',
                    '$skype',
                    '$icq',
                    '$site',
                    '$birthday',
                    '$country',
                    '$region',
                    '$city',
                    '$wmr',
                    '$wmz',
                    '$yamoney',
                    '$qiwi',
                    '$card',
                    '$signature',
                    '$ip',
                    '$ip'
                    )";
                    $query = $this->db->query($sql);
                    $id = $this->db->last_id();
                    setcookie('hash',$hash,time()+3600*24*30*6,'/');
                    setcookie('user_id',$id,time()+3600*24*30*6,'/');
                    $params = array(
                        "email" => $email,
                        "subject" => 'Регистрация на сайте '.$this->config->SiteTitle,
                        "tpl" => 'registration.tpl',
                        "site_name" => $this->config->SiteTitle,
                        "site_email" => $this->config->SiteEmail,
                        "site_phone" => $this->config->SitePhone,
                        "site_url" => 'http://'.$_SERVER['SERVER_NAME'].'/',
                        "user_name" => $first_name,
                        "user_email" => $email,
                        "user_password" => $password,
                    );
                    $this->SetMail($params);

                    if ($this->redirect!==''){
                        $this->Head('/'.$this->redirect);
                    } else {
                        $this->Head('/');
                    }
                }
            }
        }
    }

    public function ShowFormRegistry(){
        if ($this->login){
            $this->Head('/');
        }
        $this->page_title = 'Регистрация аккаунта';
        $this->meta_title = $this->page_title .' -'. $this->config->SiteTitle;

        $this->breadcrumbs = array(
            array('text' => 'Главная', 'href' => '/'),
            array('text' => 'Регистрация аккаунта', 'href' => ''),
        );
        $this->assign(array(
            'rand' => rand(1111111,9999999),
            'error' => $this->error,
            'page_title' => $this->page_title,
        ));
        $this->SetPath('register/register');
        $this->content =$this->SetTemplate('default.tpl');
    }
    public function ShowProfile(){
        if ($this->login){
            $this->page_title = 'Мой профиль';
            $this->assign(array(
                'user' => $this->user,
            ));
            $this->SetPath('register/profile');
            $this->content =$this->SetTemplate('default.tpl');
        } else {
            $this->Head('/registry');
        }

    }
    public function Index(){
/*        if (isset($this->post['email'])){
            $this->SaveUser();
        }*/
        if (isset($_POST['register'])){
            //$this->RegisterUser();
        }
        if (isset($this->get['profile'])){
            $this->ShowProfile();
        } else {
            //$this->ShowFormRegistry();
        }

        return $this->content;
    }
}