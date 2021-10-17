<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:32:22
         compiled from "W:\domains\provoda\www\themes\default\tpl\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153289944960fc2476a2f0f9-33023521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c644f0ad2ab181a24cf0f2490aa003d1fbb192' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\common\\header.tpl',
      1 => 1626993775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153289944960fc2476a2f0f9-33023521',
  'function' => 
  array (
  ),
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
    'module_name' => 0,
    'alias' => 0,
    'cart_menu' => 0,
    'slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc2476ad5180_33951402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc2476ad5180_33951402')) {function content_60fc2476ad5180_33951402($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_title']->value);?>
</title>
    <meta name="description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['meta_description']->value);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="yandex-verification" content="" />
    <meta name="google-site-verification" content="" />

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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" />

   
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/font-awesome.min.css">




    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
geshi/geshi.css">
    

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/ie.css">
    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/selectivizr.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
fancybox/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
  type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
js/odkl_share.js"><?php echo '</script'; ?>
>

    <!-- Добавляем стили из CDN -->
    <link rel="stylesheet" type="text/css" href="/themes/default/js/slick/slick.css"/>
    <!-- Добавляем тему по умолчанию из CDN -->
    <link rel="stylesheet" type="text/css" href="/themes/default/js/slick/slick-theme.css"/>

    <?php echo '<script'; ?>
 type="text/javascript" src="/themes/default/js/slick/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/system/plugins/share42/share42.js"><?php echo '</script'; ?>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
css/main.css">

    <?php echo '<script'; ?>
 src="/system/plugins/jquery.collagePlus.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/system/plugins/extras/jquery.removeWhitespace.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/system/plugins/extras/jquery.collageCaption.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        // All images need to be loaded for this plugin to work so
        // we end up waiting for the whole window to load in this example
        $(window).load(function () {
            $(document).ready(function(){
                collage();
                $('.Collage').collageCaption();
            });
        });


        // Here we apply the actual CollagePlus plugin
        function collage() {
            $('.Collage').removeWhitespace().collagePlus(
                    {
                        'fadeSpeed'     : 2000,
                        'targetHeight'  : 200
                    }
            );
        };

        // This is just for the case that the browser window is resized
        var resizeTimer = null;
        $(window).bind('resize', function() {
            // hide all the images until we resize them
            $('.Collage .Image_Wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/system/plugins/jquery.cookie.js"><?php echo '</script'; ?>
>
</head>

<body class="<?php if ($_smarty_tpl->tpl_vars['module_name']->value=='pages'&&$_smarty_tpl->tpl_vars['alias']->value=='') {?>main-page<?php }?>">
<div class="wrapper">
<header>
    <a href="/"><img class="logo" src="/themes/default/img/logo2.png" alt=""/></a>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                    <span class=sr-only>Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li <?php if ($_smarty_tpl->tpl_vars['alias']->value=='about-as') {?> class="active" <?php }?>><a href="/about-as">О нас</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['alias']->value=='Philosophy') {?> class="active" <?php }?>><a href="/Philosophy">Философия</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['alias']->value=='kabeli-i-zvuk') {?> class="active" <?php }?>><a href="/kabeli-i-zvuk">Кабели и звук</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['alias']->value=='master-klass') {?> class="active" <?php }?>><a href="/master-klass">Мастер-класс</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='catalog') {?> class="active" <?php }?>><a href="/catalog">Продукция</a></li>
                    <li class="shop-menu <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='shop') {?> active <?php }?> ">
                        <a href="#">Магазин</a>
                        <div class="shop-menu-sub">

                            <ul>
                                <li>
                                    <img src="/upload/images/catalog/2ikNBNQGfRFbQ5Ha9996.jpg" alt=""/>
                                    <span>OPTIMUS</span>
                                    <ul class="tab-ul">
                                        <li><a href="/shop/standart-line-page">Standard Line</a></li>
                                        <li><a href="/shop/reference-line-page">Reference line</a></li>
                                        <li><a href="/shop/ultimate-line-page">Ultimate Line</a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <img src="/upload/images/catalog/2ikNBNQGfRFbQ5Ha9996.jpg" alt=""/>
                                    <span>CLASSIC</span>
                                    <ul class="tab-ul">
                                        <li><a href="/shop/standard-line">Standard Line</a></li>
                                        <li><a href="/shop/reference-line">Reference line</a></li>
                                        <li><a href="/shop/ultimate-line">Ultimate Line</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <img src="/upload/images/catalog/2ikNBNQGfRFbQ5Ha9996.jpg" alt=""/>
                                    <span>UNIVERSUM</span>
                                    <ul class="tab-ul">
                                        <li><a href="/shop/standard-line-universum">Standard Line</a></li>
                                        <li><a href="/shop/reference-line-universum">Reference line</a></li>
                                        <li><a href="/shop/ultimate-line-universum">Ultimate Line</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='partners') {?> class="active" <?php }?>>>
                        <a href="/partners">Представители</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='blog') {?> class="active" <?php }?>><a href="/blog">Блог</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['alias']->value=='tradein') {?> class="active" <?php }?>><a href="/tradein">Trade-in</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['module_name']->value=='news') {?> class="active" <?php }?>><a href="/news">Новости</a></li>
                    <li id="cart-btn" <?php if (!$_smarty_tpl->tpl_vars['cart_menu']->value) {?>style="display: none;<?php }?>"><a href="/shop/cart">Корзина</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php if ($_smarty_tpl->tpl_vars['slider']->value) {?>
<div class="container">
    <div id="dws-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url(/themes/default/img/s1.jpg)">
                
                <div class="carousel-caption">
                    <h3 class="text-uppercase">АТМОСФЕРА ЖИВОГО ЗВУКА</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet elit lorem, ac congue mi
                        eleifend sit amet. Sed dignissim viverra neque a tristique.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(/themes/default/img/s1.jpg)">
                
                <div class="carousel-caption">
                    <h3 class="text-uppercase">АТМОСФЕРА ЖИВОГО ЗВУКА</h3>
                    <p>Aenean cursus imperdiet erat sit amet facilisis. Phasellus congue, sem in consectetur accumsan,
                        tellus risus sollicitudin mauris, quis ornare libero magna eget ex.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(/themes/default/img/s1.jpg)">
                
                <div class="carousel-caption">
                    <h3 class="text-uppercase">АТМОСФЕРА ЖИВОГО ЗВУКА</h3>
                    <p>Praesent dictum, orci eget eleifend auctor, urna ex dapibus odio, vitae pretium neque massa vel
                        neque. Donec et interdum diam. Morbi dignissim vestibulum mi ac viverra.</p>
                </div>
            </div>
        </div>

        <!-- Элементы управления -->
        <a class="left carousel-control" href="#dws-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#dws-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators">
            <li data-target="#dws-slider" data-slide-to="0" class="active"></li>
            <li data-target="#dws-slider" data-slide-to="1"></li>
            <li data-target="#dws-slider" data-slide-to="2"></li>
        </ol>

    </div>
</div>
<?php echo '<script'; ?>
>
    $('.carousel').carousel({
        interval: 3000
    })
<?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="header-b"></div>
<?php }?>









<?php }} ?>
