<?php
session_start();
require_once(CLASSES_DIR.'DB.class.php');

function emailValidation($email) {
    if($email){
        if(preg_match("/[0-9a-z_\.\-]+@[0-9a-z_\.\-]+\.[a-z]{2,4}/i", $email))  {
            return true;
        }
        else  {
            return false;
        }
    }
    else  {
        return false;
    }
}

if (isset($_POST['nick'])){
    $nick = $_POST['nick'];
    $nick_length = mb_strlen($nick,'UTF-8');
    if ($nick_length >= 2 && $nick_length <= 20){
        $db = Database::getInstance();
        $sql = "SELECT * FROM `".db_pref."users` WHERE `NICK`='$nick' LIMIT 1";
        $query = $db->query($sql);
        $result = '';
        if ($db->num_rows($query) > 0){
            $result = 'Данный ник уже занят';
        } else{
            $result = '0';
        }
    } else {
        $result = 'Длина ника должна быть от 2 до 20 символов';
    }
    echo $result;
}
if (isset($_POST['email'])){
    $email = $_POST['email'];
    if (emailValidation($email)){
        $db = Database::getInstance();
        $sql = "SELECT * FROM `".db_pref."users` WHERE `EMAIL`='$email' LIMIT 1";
        $query = $db->query($sql);
        $result = '';
        if ($db->num_rows($query) > 0){
            $result = 'Данный email уже зарегистрирован в системе';
        } else{
            $result = '0';
        }
    } else{
        $result = 'Некорректный email';
    }

    echo $result;
}
if (isset($_POST['password'])){
    $length = mb_strlen($_POST['password'],'UTF-8');
    if ($length >= 4 && $length <= 20){
        $result = '0';
    } else {
        $result = 'Длина пароля должна быть от 4 до 20 символов';
    }
    echo $result;
}
if (isset($_POST['captcha'])){
    $captcha = $_POST['captcha'];
    if ($captcha == $_SESSION['register']){
        $result = '0';
    } else {
        $result = 'Несовпадение';
    }
    echo $result;
}
?>
