<?php

class LoginController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->error = '';
    }
    public function Index(){
        if (count($this->query) > 0 && $this->query[0] == 'out'){
            setcookie('hash','',time()+3600*24*30*6,'/');
            setcookie('user_id','',time()+3600*24*30*6,'/');
            unset($_SESSION['user']);
            $this->Head("/");
        }
/*        if (isset($this->get['redirect'])){
            $this->redirect = str_replace('-','/',$this->get['redirect']);
        }
        if ($this->login){
            if ($this->redirect!==''){
                $this->Head('/'.$this->redirect);
            } else {
                $this->Head('/');
            }
        }*/
        if (isset($_POST['action']) && $_POST['action'] == 'login'){
            $email = $_POST['user-email'];
            $password = $_POST['user-password'];
            $sql = "SELECT * FROM agcms_users WHERE EMAIL = '$email' AND PASSWORD = '$password' LIMIT 1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){
                $row = $this->db->fetch_array($query);
                setcookie('hash',$row['HASH'],time()+3600*24*30*6,'/');
                setcookie('user_id',$row['ID'],time()+3600*24*30*6,'/');
                echo 0;
            } else{
                echo  'Неправильная пара "Логин-пароль"!';
            }
            exit;
        }
    }
}
?>