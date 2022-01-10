<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-10 20:20:27
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1125350525617ac293ee18c0-10852104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e34527bf2ec5d9f3ce0e28aebb2ab960f63347' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\header.tpl',
      1 => 1641767813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125350525617ac293ee18c0-10852104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac294085c72_56357127',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_image' => 0,
    'theme_dir' => 0,
    'self_url' => 0,
    'config' => 0,
    'html_plugins_dir' => 0,
    'js' => 0,
    'css' => 0,
    'main' => 0,
    'module_name' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac294085c72_56357127')) {function content_617ac294085c72_56357127($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_title']->value);?>
</title>
    <meta name="description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_description']->value);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['meta_image']->value) {
echo $_smarty_tpl->tpl_vars['meta_image']->value;
} else {
echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo_social2.jpg<?php }?>" />
    <meta property="og:type" content="website"/>
    <meta property="profile:first_name" content="Андрей"/>
    <meta property="profile:last_name" content="Гром"/>
    <meta property="profile:username" content="grominfo"/>
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
"/>
    <meta property="og:description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_description']->value);?>
"/>
    <meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['meta_image']->value) {
echo $_smarty_tpl->tpl_vars['meta_image']->value;
} else {
echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo_social2.jpg<?php }?>"/>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['self_url']->value;?>
"/>
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteTitle;?>
"/>
    <meta property="og:see_also" content="<?php echo $_smarty_tpl->tpl_vars['self_url']->value;?>
"/>

    <meta itemprop="name" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
"/>
    <meta itemprop="description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_description']->value);?>
"/>
    <meta itemprop="image" content="<?php if ($_smarty_tpl->tpl_vars['meta_image']->value) {
echo $_smarty_tpl->tpl_vars['meta_image']->value;
} else {
echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo_social2.jpg<?php }?>"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteTitle;?>
"/>
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
">
    <meta name="twitter:description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_description']->value);?>
"/>
    <meta name="twitter:creator" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteDirector;?>
"/>
    <meta name="twitter:image:src" content="<?php if ($_smarty_tpl->tpl_vars['meta_image']->value) {
echo $_smarty_tpl->tpl_vars['meta_image']->value;
} else {
echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo_social2.jpg<?php }?>"/>
    <meta name="twitter:domain" content="<?php echo $_smarty_tpl->tpl_vars['self_url']->value;?>
"/>

    <link rel="shortcut icon" href="/favicon.ico" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/font-awesome.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
slick/slick-theme.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
slick/slick.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/style.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.css" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/system/plugins/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/main.js"><?php echo '</script'; ?>
>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['js']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo '</script'; ?>
>
    <?php endfor; endif; ?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['css']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
">
    <?php endfor; endif; ?>

</head>
<body class="<?php if ($_smarty_tpl->tpl_vars['main']->value) {?>main-page<?php } else { ?>default-page<?php }?>">
<header>
    <nav class="navbar navbar-default <?php if ($_smarty_tpl->tpl_vars['main']->value) {?>navbar-fixed-top<?php }?> navbar-custom">
        <div class="container">
            <div class="row" style="position:relative;">
                <div class="pull-left menu-padding main-menu" style="position: relative;z-index: 9;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-main">
                        <ul class="nav navbar-nav">
                            <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='pages'&&$_smarty_tpl->tpl_vars['page']->value['ID']==9) {?>class="active"<?php }?>><a href="/history">История</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='pages'&&$_smarty_tpl->tpl_vars['page']->value['ID']==10) {?>class="active"<?php }?>><a href="/texnology">Технология</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='pages'&&$_smarty_tpl->tpl_vars['page']->value['ID']==11) {?>class="active"<?php }?>><a href="/practice">Практика</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='shop') {?>class="active"<?php }?>><a href="/shop">Продукция</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='blog') {?>class="active"<?php }?>><a href="/blog">Блог</a></li>
                        </ul>
                    </div>s
                </div>
                <div class="box-center-absolute-horizontal">
                    <a href="/"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo2.png" alt=""></a>
                </div>
                <div class="pull-right menu-padding top-right-menu">
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="/main#footer-parthers">партнеры и представители</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-tradein hidden-sm hidden-xs" href="/tradein">trade-in</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-icons">
                        <li class="icon-find"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/find.png" alt=""></a></li>
                        <li class="hidden-sm hidden-xs"><a href="#" data-toggle="modal" data-target="#feedback-modal"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/message.png" alt=""></a></li>
                        
                    </ul>
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="/shop/cart"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/cart.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header><?php }} ?>
