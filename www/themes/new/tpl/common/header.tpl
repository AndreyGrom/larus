<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$meta_title|strip_tags}</title>
    <meta name="description" content="{$meta_description|strip_tags}">
    <meta name="keywords" content="{$meta_keywords}">

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

    <link rel="shortcut icon" href="/favicon.ico" />

    <link rel="stylesheet" href="{$theme_dir}css/bootstrap.min.css">
    <link rel="stylesheet" href="{$theme_dir}css/font-awesome.min.css">
    <script type="text/javascript" src="{$theme_dir}js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="{$theme_dir}js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$theme_dir}slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{$theme_dir}slick/slick-theme.css"/>
    <script type="text/javascript" src="{$theme_dir}slick/slick.min.js"></script>
    <link rel="stylesheet" href="{$theme_dir}css/style.css">
    <link href="{$html_plugins_dir}fancybox/jquery.fancybox.css" rel="stylesheet">
    <script type="text/javascript" src="{$html_plugins_dir}fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="{$html_plugins_dir}fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/system/plugins/jquery.cookie.js"></script>
    <script type="text/javascript" src="{$theme_dir}js/main.js"></script>
    {section name=i loop=$js}
        <script  type="text/javascript" src="{$js[i]}"></script>
    {/section}
    {section name=i loop=$css}
        <link type="text/css" rel="stylesheet" href="{$css[i]}">
    {/section}

</head>
<body class="{if $main}main-page{else}default-page{/if}">
<header>
    <nav class="navbar navbar-default {if $main}navbar-fixed-top{/if} navbar-custom">
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
                            <li {if $module_name == 'pages' && $page.ID == 9}class="active"{/if}><a href="/history">История</a></li>
                            <li {if $module_name == 'pages' && $page.ID == 10}class="active"{/if}><a href="/texnology">Технология</a></li>
                            <li {if $module_name == 'pages' && $page.ID == 11}class="active"{/if}><a href="/practice">Практика</a></li>
                            <li {if $module_name == 'shop'}class="active"{/if}><a href="/shop">Продукция</a></li>
                            <li {if $module_name == 'blog'}class="active"{/if}><a href="/blog">Блог</a></li>
                        </ul>
                    </div>s
                </div>
                <div class="box-center-absolute-horizontal">
                    <a href="/"><img class="img-responsive" src="{$theme_dir}img/logo2.png" alt=""></a>
                </div>
                <div class="pull-right menu-padding top-right-menu">
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="/main#footer-parthers">партнеры и представители</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-tradein hidden-sm hidden-xs" href="/tradein">trade-in</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-icons">
                        <li class="icon-find"><a href="#"><img src="{$theme_dir}img/find.png" alt=""></a></li>
                        <li class="hidden-sm hidden-xs"><a href="#" data-toggle="modal" data-target="#feedback-modal"><img src="{$theme_dir}img/message.png" alt=""></a></li>
                        {*<li class="hidden-sm hidden-xs"><a href="#"><img src="{$theme_dir}img/signin.png" alt=""></a></li>*}
                    </ul>
                    <ul class="hidden-sm hidden-xs nav navbar-nav">
                        <li><a href="/shop/cart"><img src="{$theme_dir}img/cart.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>