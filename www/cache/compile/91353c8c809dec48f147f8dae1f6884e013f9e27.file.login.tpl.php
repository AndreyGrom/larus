<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-13 14:44:56
         compiled from "D:\data\domains\provoda\www\system\controllers\login\tpl\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7455465161b732388a2fa4-83558307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91353c8c809dec48f147f8dae1f6884e013f9e27' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\login\\tpl\\login.tpl',
      1 => 1626992981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7455465161b732388a2fa4-83558307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61b732388d9ab6_58642497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b732388d9ab6_58642497')) {function content_61b732388d9ab6_58642497($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Панель управления</title>

    <link href="/system/AdminDesign/css/bootstrap.min.css" rel="stylesheet">
    <link href="/system/AdminDesign/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<section id="signin_main" class="authenty signin-main" style="">
    <div class="section-content">
        <div class="wrap">
            <div class="container">
                <div class="form-wrap">
                    <div class="row">
                        <div class="text-center">
                            <h1>Вход в админ панель</h1>
                            <p class="lead">Центр управления AG CMS</p>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                        <div id="form_1" data-animation="bounceIn" class="animated bounceIn">
                        <form method="post">
                            <div class="form-header">
                                <img src="/system/AdminDesign/img/logo2.png" alt=""/>
                            </div>
                            <div class="form-main">
                                <div class="form-group">
                                    <input type="text" id="un_1" name="user" class="form-control" placeholder="Логин" required="required">
                                    <input type="password" id="pw_1" name="password" class="form-control" placeholder="Пароль" required="required">
                                </div>
                                <button id="signIn_1" type="submit" class="btn btn-block signin">Вход</button>
                            </div>
                            <div class="form-footer">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Система управления сайтом AG CMS v. 3.02</p>
                <p>© <a href="http://andreygrom.ru/" style="margin-top: -7px;" data-toggle="tooltip" title="Автор программного кода AG CMS. Перейти на сайт разработчика Андрей Гром. Программирование, и не только..." target="_blank"><img src="http://andreygrom.ru/favicon.ico" style="width:16px;">Андрей Гром</a> Все права защищены!</p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery Version 1.11.1 -->
<?php echo '<script'; ?>
 type="text/javascript" src="/system/AdminDesign/js/jquery.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="/system/AdminDesign/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
<?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
