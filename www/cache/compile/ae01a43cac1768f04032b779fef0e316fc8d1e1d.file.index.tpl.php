<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-28 18:32:16
         compiled from "D:\data\domains\provoda\www\system\controllers\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643155294617ac28062e248-68948604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae01a43cac1768f04032b779fef0e316fc8d1e1d' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\index.tpl',
      1 => 1626992970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643155294617ac28062e248-68948604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'html_plugins_dir' => 0,
    'js' => 0,
    'css' => 0,
    'widget_head_top' => 0,
    'modules' => 0,
    'site_url' => 0,
    'widget_head_bottom' => 0,
    'widget_left_top' => 0,
    'widget_left_bottom' => 0,
    'widget_content_top' => 0,
    'content' => 0,
    'widget_content_bottom' => 0,
    'widget_footer_top' => 0,
    'alert' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac2806bac61_00493496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac2806bac61_00493496')) {function content_617ac2806bac61_00493496($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Центр управления AG CMS - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- jQuery Version 1.11.1 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/system/plugins/jquery-ui-1.11.4.custom/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
func.js"><?php echo '</script'; ?>
>
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

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="/system/AdminDesign/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap Core CSS -->
    <link href="/system/AdminDesign/css/bootstrap.min.css" rel="stylesheet">
    <link href="/system/AdminDesign/css/main2.css" rel="stylesheet">
    <link href="/system/plugins/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">

    <?php echo '<script'; ?>
>
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: 'Предыдущий',
            nextText: 'Следующий',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    <?php echo '</script'; ?>
>

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['css']->value;?>


</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['widget_head_top']->value;?>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Старт главного меню -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Главное меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> Модули <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modules']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <?php if ($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['visible']) {?>
                            <li>
                                <a href="?c=<?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['alias'];?>
" class="">
                                    <span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['icon'];?>
"></span>
                                    <?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>

                                </a>
                            </li>
                            <?php }?>
                        <?php endfor; endif; ?>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> Инструменты <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" onclick="OpenFM()" data-toggle="tooltip" data-placement="bottom" title="">
                                <span class="glyphicon glyphicon-file"></span> Файловый менеджер
                            </a>
                        </li>
                        <li>
                            <a href="?remove-system-cash" data-toggle="tooltip" data-placement="bottom" title="">
                                <span class="glyphicon glyphicon-trash"></span> Удалить весь кеш
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> Профиль <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?c=manual" data-toggle="tooltip" data-placement="bottom"
                               title="Документация для разработчика. Как пользоватся админ-панелью - см. на сайте презентации движка."><span
                                        class="glyphicon glyphicon-list-alt"></span> Документация</a>
                        </li>
                        <li>
                            <a href="?c=support" data-toggle="tooltip" data-placement="bottom"
                               title="Написать письмо разработчику AG Landing Panel"><span
                                        class="glyphicon glyphicon-envelope"></span> Написать разработчику</a>
                        </li>
                        <li>
                            <a href="?c=login&out" data-toggle="tooltip" data-placement="bottom"
                               title="Выйти из панели на страницу входа в админку"><span
                                        class="glyphicon glyphicon-log-out"></span> Выйти из панели</a>
                        </li>
                        <li>
                            <a href="?c=login&out&all" data-toggle="tooltip" data-placement="bottom"
                               title="Выйти из панели на страницу входа в админку"><span
                                        class="glyphicon glyphicon-log-out"></span> Выйти со всех устройств</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" data-toggle="tooltip" data-placement="bottom" title="">
                        <span class="glyphicon glyphicon-globe"></span> Перейти на сайт
                    </a>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div id="about-agcms" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Система управления содержимым</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                 <div class="text-center"><img style="display: inline-block" src="/system/AdminDesign/img/logo2.png" class="img-responsive" alt=""/></div>
                <h4 class="text-center">Индивидуальная система управления содержимым!</h4>
                <div class="alert alert-info">
                    <p class="text-center">Разработчик: <span><a target="_blank" href="http://andreygrom.ru/"><img style="width:16px;" src="http://andreygrom.ru/favicon.ico"> Андрей Гром</a></span></p>
                </div>
                <p class="text-center">По всем вопросам обращайтесь по адресу: <a href="mailto:grominfo@gmail.com">grominfo@gmail.com</a></p>
                <p class="text-center">Или звоните по телефону: +7 960 859 96 38</p>
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['widget_head_bottom']->value;?>


<!-- Основной контент -->
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <div class="left-widget">
                <?php echo $_smarty_tpl->tpl_vars['widget_left_top']->value;?>

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modules']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <?php if ($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['visible']) {?>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['icon'];?>
"></span>
                                    <a href="?c=<?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['alias'];?>
" class=""><?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php endfor; endif; ?>
            <?php echo $_smarty_tpl->tpl_vars['widget_left_bottom']->value;?>

        </div>
        <div class="col-md-8 text-left">
            <?php echo $_smarty_tpl->tpl_vars['widget_content_top']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['widget_content_bottom']->value;?>

        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php echo $_smarty_tpl->tpl_vars['widget_footer_top']->value;?>

<section class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Система управления сайтом</p>
                <p>
                    Все права защищены!
                </p>
            </div>
        </div>
    </div>
</section>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['alert']->value) {?>
    <div class="alert-message">
        <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

    </div>
    <?php echo '<script'; ?>
>
        
        $(".alert-message").animate({"top":"0"}).delay(3000).animate({"top":-70});
        
    <?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>
    <div class="alert-message">
        <?php echo $_smarty_tpl->tpl_vars['demo']->value;?>

    </div>
    <?php echo '<script'; ?>
>
        
        $(".alert-message").animate({"top":"0"}).delay(3000).animate({"top":-70});
        
    <?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
>
   $(".left-widget a[data-toggle='collapse']").click(function(){
       var el = $(this);
       var data_val;
       var data_group = el.attr("aria-controls");
       if (!$("#"+data_group).hasClass('in')){
           data_val = 1;
       } else {
           data_val = 0;
       }
       $.cookie(data_group, data_val, { expires: 360,path: '/'});
    });
   $(".left-widget a[data-toggle='collapse']").each(function(i,elem) {
       var data_group = $(this).attr("aria-controls");
       if  ($.cookie(data_group)){
           if ($.cookie(data_group)==1){
               $("#"+data_group).addClass('in');
           } else {
               $("#"+data_group).removeClass('in');
           }
       }
   });
    function OpenFM(){
        window.open('/filemanager/dialog.php?type=2&popup=1' ,  "rfm_cleditr",
                "status=0, toolbar=0, location=0, menubar=0, directories=0, " +
                        "resizable=0, scrollbars=0, width=900, height=600");
    }

<?php echo '</script'; ?>
>
</body>

</html><?php }} ?>
