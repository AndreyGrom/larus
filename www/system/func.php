<?php
function generatePassword($length = 8){
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    return $string;
}

function mail_sender_plain($to, $subject, $content, $attach=false)
{
    require_once(dirname(__FILE__).'/classes/Config.class.php');
    require_once(dirname(__FILE__).'/classes/DB.class.php');
    require_once(dirname(__FILE__).'/plugins/phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true);
    $config = Config::getInstance();

  /*  if ($config->MailSMTPEnabled){
        $mail->IsSMTP();
    }*/

    try {
        $mail->CharSet    = 'UTF-8';
        $mail->FromName = "livingathmos";
        $mail->addAddress('larussia@yandex.ru');
        $mail->addAddress('grominfo@gmail.com');
        $mail->isHTML(true);
        $mail->isHTML(true);
        $mail->Subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
        $mail->Body =$content;
        $mail->Send();
        return true;
    } catch (phpmailerException $e) {
        return false;
    } catch (Exception $e) {
        return false;
    }
}

?>