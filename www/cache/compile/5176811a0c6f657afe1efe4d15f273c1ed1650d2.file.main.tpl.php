<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 14:27:03
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\pages\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952842933616d2f263d93c5-93298000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5176811a0c6f657afe1efe4d15f273c1ed1650d2' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\pages\\main.tpl',
      1 => 1634556420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952842933616d2f263d93c5-93298000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f263dd249_45467353',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_image' => 0,
    'theme_dir' => 0,
    'self_url' => 0,
    'config' => 0,
    'js' => 0,
    'css' => 0,
    'blog_items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f263dd249_45467353')) {function content_616d2f263dd249_45467353($_smarty_tpl) {?><!doctype html>
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
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
    <?php echo '<script'; ?>
 type="text/javascript" src="/system/plugins/jquery.cookie.js"><?php echo '</script'; ?>
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
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="row">
                <div class="pull-left menu-padding">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-main">
                        <ul class="nav navbar-nav">
                            <li><a href="/istoriya">История</a></li>
                            <li><a href="/texnologiya">Технология</a></li>
                            <li><a href="/praktika">Практика</a></li>
                            <li><a href="/catalog">Продукция</a></li>
                            <li><a href="/blog/blog">Блог</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-center-absolute-horizontal">
                    <a href="/"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo2.png" alt=""></a>
                </div>
                <div class="pull-right menu-padding">
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="/partners">партнеры и представители</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-tradein hidden-sm hidden-xs" href="/tradein">trade-in</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-icons">
                        <li class="icon-find"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/find.png" alt=""></a></li>
                        <li class="hidden-sm hidden-xs"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/message.png" alt=""></a></li>
                        <li class="hidden-sm hidden-xs"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/signin.png" alt=""></a></li>
                    </ul>
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/cart.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>
<section class="s1">
    <div class="container">
        <div class="rect-top text-center">
            <div class="rect-top-content">
                <span class="rect-top-1">
                    Не теряя ни одного оттенка,
                </span>
                <span class="rect-top-2">
                    НАСТОЯЩИЙ
                </span>
                <span class="rect-top-2">
                    - ЖИВОЙ -
                </span>
                <span class="rect-top-2">
                    ЗВУК
                </span>
            </div>
        </div>
    </div>
    <div class="carousel-box">
        <div class="container">
            <?php echo blog_latest_items(array('sourse'=>"blog_items",'cid'=>2,'limit'=>10),$_smarty_tpl);?>

            <div class="slider news-carousel">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['blog_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <div>
                    <h3 class="ss1">
                        <a href="#"><img src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['blog_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" class="img-responsive"/></a>
                    </h3>
                    <h3 class="ss2">
                        <p class="news-carousel-text"><a href="#"><?php echo $_smarty_tpl->tpl_vars['blog_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></p>
                        <p class="news-carousel-more"><a href="/blog/<?php echo $_smarty_tpl->tpl_vars['blog_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">Читать далее</a> <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow.png" alt=""></p>
                    </h3>
                </div>
                <?php endfor; endif; ?>
                
            </div>
        </div>

    </div>
    <?php echo '<script'; ?>
>
        $('.news-carousel').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<img src='img/arrow-left.png' class='slick-prev' alt='1'>",
            nextArrow: "<img src='img/arrow-right.png' class='slick-next' alt='2'>",
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 537,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    <?php echo '</script'; ?>
>
</section>
<section class="s2">
    <div class="container">
        <div class="row row-flex" style="padding-left:15px; padding-right:15px;">
            <div class="col-md-5 col-sm-12 col-xs-12 s2-col-1">
                <span class="span1">Низкоэнтропийные аудиокабели</span>
                <br><span class="span2">LIVING ATHMOS</span>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 s2-col-2">
                <p class="p1">
                    <a href="#">Аудиокабели LIVING ATHMOS</a>  - уникальный продукт, который произведет впечатление на истинного любителя музыки и высококачественного звука. В основе разработки кабелей лежит теория передачи сигналов с низкой энтропией,
                    что позволяет получить звук максимально полный и реалистичный.
                    <br><br>Идеально подходит для создания <a href="#">Атмосферы Живого Звука</a>  в квартире, жилом доме, отдельном специальном помещении или студии. Почувствуйте музыку «телом и душой»
                </p>
            </div>
        </div>
    </div>

    <div class="carousel-box-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s2-1.jpg" alt="">
                        <div class="tit">
                            <span>Компании 10 лет</span>
                            <a href="#" data-toggle="modal" data-target="#MyModal" class="arrow-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s2-1.jpg" alt="">
                        <div class="tit">
                            <span>Слепой аудио тест кабелей, июнь 2019</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s2-3.jpg" alt="">
                        <div class="tit">
                            <span>Битва форматов, апрель 2019</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s2-4.jpg" alt="">
                        <div class="tit">
                            <span>Кабели LIVINGATHMOS в звукозаписывающей студии</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="s3">
    <div class="container">
        <div class="row row-flex desctop-visible">
            <div class="col-sm-5 s3-col-1">

                <div class="p1">
                    <span>Hi-Fi & High End Show 2019 Битва Форматов 2019</span>
                    <br>
                    <div class="alert alert-danger">
                        Слайдер сделаю, когда буду натягивать на движок, потому что инфорация будет браться из базы при перелистывании
                    </div>
                    Аудитории предлагалось прослушать одну и ту же музыкальную композицию, записанную на разных носителях: компакт-диске, магнитной ленте, компактной кассете, виниловом диске, а также в виде файла высокого разрешения.
                    <br><br>
                    Далее слушатели заполняли анкету, на которой указывали их мнение, в какой последовательности были воспроизведены эти носители...
                    <br>
                    <a href="#">Читать далее</a>
                </div>

            </div>
            <div class="col-sm-7 s3-col-2">
                <span class="span1">LIVING ATHMOS</span><br>
                <span class="span2">на выставках в России</span>
            </div>
        </div>
        <div class="mobile-visible">
            <div class="s3-col-2">
                <span class="span1">LIVING ATHMOS</span><br>
                <span class="span2">на выставках в России</span>
            </div>
            <div class="s3-col-1">
                <div class="p1">
                    <span>Hi-Fi & High End Show 2019 Битва Форматов 2019</span>
                    <br>
                    <div class="alert alert-danger">
                        Слайдер сделаю, когда буду натягивать на движок, потому что инфорация будет браться из базы при перелистывании
                    </div>
                    Аудитории предлагалось прослушать одну и ту же музыкальную композицию, записанную на разных носителях: компакт-диске, магнитной ленте, компактной кассете, виниловом диске, а также в виде файла высокого разрешения.
                    <br><br>
                    Далее слушатели заполняли анкету, на которой указывали их мнение, в какой последовательности были воспроизведены эти носители...
                    <br>
                    <a href="#">Читать далее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-box-3">
        <div class="container">
            <div class="slider carousel-3">
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s3-1.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s3-2.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s3-3.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/s3-4.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $('.carousel-3').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<img src='img/arrow-left.png' class='slick-prev' alt='1'>",
            nextArrow: "<img src='img/arrow-right.png' class='slick-next' alt='2'>",
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    <?php echo '</script'; ?>
>
</section>

<div id="MyModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Подробности</h4>
            </div>
            <div class="modal-body">
                <p>Пока не нашел в шаблонах вид всплывающего окна</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="footer-top">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row row-flex mobile-margin-bottom">
                        <div class="col-sm-4 col-xs-12 mobile-margin-bottom">Наши партнеры:</div>
                        <div class="col-sm-2 col-xs-4 text-center"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p1.jpg" alt=""></div>
                        <div class="col-sm-3 col-xs-4 text-center"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p2.jpg" alt=""></div>
                        <div class="col-sm-3 col-xs-4 text-center"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p3.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row row-flex">
                        <div class="col-sm-1 col-xs-12"></div>
                        <div class="col-sm-3 col-xs-12 mobile-margin-bottom">представители:</div>
                        <div class="col-sm-3 text-center"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p4.jpg" alt=""></div>
                        <div class="col-sm-3 text-center"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p5.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 footer-menu desctop-visible">
                    <ul class="tire-ul">
                        <li><a href="#">История</a></li>
                        <li><a href="#">Технология</a></li>
                        <li><a href="#">Практика</a></li>
                        <li><a href="#">Продукция</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                    <ul class="tire-ul">
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Представители</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 text-center col-xs-12  mobile-margin-bottom">
                    <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/logo-footer.png" alt=""></a>
                </div>
                <div class="col-sm-5 desctop-visible">
                    <div class="footer-icons">
                        <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/message.png" alt=""> Связаться с нами</a></p>
                        <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/find.png" alt=""> Поиск по сайту</a></p>
                        <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/signin.png" alt=""> Выход</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>поделиться</p>
                </div>
            </div>
            <div class="row mobile-margin-bottom">
                <div class="col-sm-12 text-center footer-social">
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/vk.png" alt=""></a>
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/fb.png" alt=""></a>
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/ok.png" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    Технический текст, заполнить о политике конфидециальности, правилах копирования, публичной оферте
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html><?php }} ?>
