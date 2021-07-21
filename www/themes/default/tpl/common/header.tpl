<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>{$meta_title|strip_tags}</title>
    <meta name="description" content="{$meta_description|strip_tags}">
    <meta name="keywords" content="{$meta_keywords}">
    <meta name="yandex-verification" content="" />
    <meta name="google-site-verification" content="" />

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:image" content="{if $meta_image}{$meta_image}{else}{$theme_dir}img/logo_social2.jpg{/if}" />
    <meta property="og:type" content="website"/>
    <meta property="profile:first_name" content="Андрей"/>
    <meta property="profile:last_name" content="Гром"/>
    <meta property="profile:username" content="grominfo"/>
    <meta property="og:title" content="{$meta_title}"/>
    <meta property="og:description" content="{$meta_description|strip_tags}"/>
    <meta property="og:image" content="{if $meta_image}{$meta_image}{else}{$theme_dir}img/logo_social2.jpg{/if}"/>
    <meta property="og:url" content="{$self_url}"/>
    <meta property="og:site_name" content="{$config->SiteTitle}"/>
    <meta property="og:see_also" content="{$self_url}"/>

    <meta itemprop="name" content="{$meta_title}"/>
    <meta itemprop="description" content="{$meta_description|strip_tags}"/>
    <meta itemprop="image" content="{if $meta_image}{$meta_image}{else}{$theme_dir}img/logo_social2.jpg{/if}"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{$config->SiteTitle}"/>
    <meta name="twitter:title" content="{$meta_title}">
    <meta name="twitter:description" content="{$meta_description|strip_tags}"/>
    <meta name="twitter:creator" content="{$config->SiteDirector}"/>
    <meta name="twitter:image:src" content="{if $meta_image}{$meta_image}{else}{$theme_dir}img/logo_social2.jpg{/if}"/>
    <meta name="twitter:domain" content="{$self_url}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" />

   {* <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>*}
    <link rel="stylesheet" href="{$theme_dir}css/bootstrap.min.css">
    <link rel="stylesheet" href="{$theme_dir}css/font-awesome.min.css">




    <link rel="stylesheet" href="{$html_plugins_dir}fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="{$html_plugins_dir}geshi/geshi.css">
    {*<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>*}

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{$theme_dir}css/ie.css">
    <script  type="text/javascript" src="{$theme_dir}js/html5shiv.min.js"></script>
    <script  type="text/javascript" src="{$theme_dir}js/selectivizr.min.js"></script>
    <![endif]-->

    <script  type="text/javascript" src="{$theme_dir}js/jquery-1.9.1.min.js"></script>
    <script  src="{$theme_dir}js/bootstrap.min.js"></script>

    <script  type="text/javascript" src="{$html_plugins_dir}fancybox/jquery.fancybox.js"></script>
    <script  type="text/javascript" src="{$html_plugins_dir}fancybox/jquery.fancybox.pack.js"></script>
    <script  type="text/javascript" src="{$theme_dir}js/odkl_share.js"></script>

    <!-- Добавляем стили из CDN -->
    <link rel="stylesheet" type="text/css" href="/themes/default/js/slick/slick.css"/>
    <!-- Добавляем тему по умолчанию из CDN -->
    <link rel="stylesheet" type="text/css" href="/themes/default/js/slick/slick-theme.css"/>

    <script type="text/javascript" src="/themes/default/js/slick/slick.min.js"></script>
    <script type="text/javascript" src="/system/plugins/share42/share42.js"></script>
   {* <script  src="{$theme_dir}js/main.js"></script>*}
    {section name=i loop=$js}
        <script  type="text/javascript" src="{$js[i]}"></script>
    {/section}
    {section name=i loop=$css}
        <link type="text/css" rel="stylesheet" href="{$css[i]}">
    {/section}
    <link rel="stylesheet" href="{$theme_dir}css/main.css">

    <script src="/system/plugins/jquery.collagePlus.js"></script>
    <script src="/system/plugins/extras/jquery.removeWhitespace.js"></script>
    <script src="/system/plugins/extras/jquery.collageCaption.js"></script>
    <script type="text/javascript">

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

    </script>
    <script type="text/javascript" src="/system/plugins/jquery.cookie.js"></script>
</head>

<body class="{if $module_name == 'pages' && $alias == ''}main-page{/if}">
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
                    <li {if $alias == 'about-as'} class="active" {/if}><a href="/about-as">О нас</a></li>
                    <li {if $alias == 'Philosophy'} class="active" {/if}><a href="/Philosophy">Философия</a></li>
                    <li {if $alias == 'kabeli-i-zvuk'} class="active" {/if}><a href="/kabeli-i-zvuk">Кабели и звук</a></li>
                    <li {if $alias == 'master-klass'} class="active" {/if}><a href="/master-klass">Мастер-класс</a></li>
                    <li {if $module_name == 'catalog'} class="active" {/if}><a href="/catalog">Продукция</a></li>
                    <li class="shop-menu {if $module_name == 'shop'} active {/if} ">
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
                    <li {if $module_name == 'partners'} class="active" {/if}>>
                        <a href="/partners">Представители</a>
                    </li>
                    <li {if $module_name == 'blog'} class="active" {/if}><a href="/blog">Блог</a></li>
                    <li {if $alias == 'tradein'} class="active" {/if}><a href="/tradein">Trade-in</a></li>
                    <li {if $module_name == 'news'} class="active" {/if}><a href="/news">Новости</a></li>
                    <li id="cart-btn" {if !$cart_menu}style="display: none;{/if}"><a href="/shop/cart">Корзина</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

{if $slider}
<div class="container">
    <div id="dws-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url(/themes/default/img/s1.jpg)">
                {*<img src="/themes/default/img/s1.jpg" alt="Картинка 1">*}
                <div class="carousel-caption">
                    <h3 class="text-uppercase">АТМОСФЕРА ЖИВОГО ЗВУКА</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet elit lorem, ac congue mi
                        eleifend sit amet. Sed dignissim viverra neque a tristique.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(/themes/default/img/s1.jpg)">
                {*<img src="/themes/default/img/s1.jpg" alt="Картинка 2">*}
                <div class="carousel-caption">
                    <h3 class="text-uppercase">АТМОСФЕРА ЖИВОГО ЗВУКА</h3>
                    <p>Aenean cursus imperdiet erat sit amet facilisis. Phasellus congue, sem in consectetur accumsan,
                        tellus risus sollicitudin mauris, quis ornare libero magna eget ex.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(/themes/default/img/s1.jpg)">
                {*<img src="/themes/default/img/s1.jpg" alt="Картинка 3">*}
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
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
{else}
    <div class="header-b"></div>
{/if}









