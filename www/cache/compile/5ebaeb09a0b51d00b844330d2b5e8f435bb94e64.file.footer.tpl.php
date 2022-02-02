<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 08:21:20
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329719597617ac294150ea5-17411430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebaeb09a0b51d00b844330d2b5e8f435bb94e64' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\footer.tpl',
      1 => 1643001678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329719597617ac294150ea5-17411430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac294158ba5_37512046',
  'variables' => 
  array (
    'main' => 0,
    'theme_dir' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac294158ba5_37512046')) {function content_617ac294158ba5_37512046($_smarty_tpl) {?><footer>
    <?php if ($_smarty_tpl->tpl_vars['main']->value) {?>
    <div class="footer-top" id="footer-parthers">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row row-flex mobile-margin-bottom">
                        <div class="col-sm-4 col-xs-12 mobile-margin-bottom">Наши партнеры:</div>
                        <div class="col-sm-2 col-xs-4 text-center">
                            <a href="/partners/kompaniya-nota">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-4 text-center">
                            <a href="/partners/kompaniya-mmc">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-4 text-center">
                            <a href="/partners/smartaudio-recording-lab">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row row-flex">
                        <div class="col-sm-1 col-xs-12"></div>
                        <div class="col-sm-3 col-xs-12 mobile-margin-bottom">представители:</div>
                        <div class="col-sm-3 text-center">
                            <a href="/partners/triumf-audio-g-sankt-peterburg">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-sm-3 text-center">
                            <a href="/partners/interergalereya-viessman-belorusssiya-g-minsk">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/p5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 footer-menu desctop-visible">
                    <ul class="tire-ul">
                        <li><a href="/history">История</a></li>
                        <li><a href="/texnology">Технология</a></li>
                        <li><a href="/practice">Практика</a></li>
                        <li><a href="/shop">Продукция</a></li>
                        <li><a href="/blog">Блог</a></li>
                    </ul>
                    <ul class="tire-ul">
                        <li><a href="/blog/cats=2">Новости</a></li>
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
                        <p><a href="#" data-toggle="modal" data-target="#feedback-modal"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/message.png" alt=""> Связаться с нами</a></p>
                        <p><a id="find-open" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/find.png" alt=""> Поиск по сайту</a></p>
                       
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
                <div class="col-xs-12 text-center footer-links">
                    <a href="#" data-toggle="modal" data-target="#modal-conf">Политика конфиденциальности</a>
                    <a href="#" data-toggle="modal" data-target="#modal-cookie">Правила cookie</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="modal-conf" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Политика конфиденциальности</h4>
            </div>
            <div class="modal-body">
                <p>Наша компания обязуется обеспечивать защиту вашей конфиденциальной информации. Наша политика конфиденциальности разъясняет, какую информацию мы&nbsp;о&nbsp;Вас собираем, как мы&nbsp;используем информацию, которую мы&nbsp;о&nbsp;вас собираем, как вы&nbsp;можете сообщить нам, если вы&nbsp;предпочтете ограничить использование такой информации.</p>
                <p>Предоставляя свою информацию вы&nbsp;даете свое согласие на&nbsp;использование такой информации в&nbsp;соответствии с&nbsp;данной политикой конфиденциальности. Если мы&nbsp;изменим нашу политику конфиденциальности, любые изменения будут размещены на&nbsp;этой странице без предварительного уведомления.</p>
                <div class="h2">Какие именно Ваши персональные данные мы&nbsp;собираем о&nbsp;Вас?</div>
                <p>Мы&nbsp;собираем информацию о&nbsp;пользователях нашего веб-сайта несколькими способами, в&nbsp;том числе с&nbsp;использованием идентификационных файлов, которые сохраняются в&nbsp;клиентской системе, путем регистрации, а&nbsp;также через сообщения электронной почты, отправляемые нам посредством нашего веб-сайта. Собираемая информация включает следующее:
                    Если вы&nbsp;отправляете нам сообщение по&nbsp;электронной почте, вы&nbsp;автоматически сообщаете нам адрес своего почтового ящика, а&nbsp;также другую персональную информацию, включенную в&nbsp;текст вашего сообщения.</p>
                <p>Если Вы&nbsp;звоните в&nbsp;наш центр технической поддержки, или оставляете голосовое сообщение, вы&nbsp;соглашаетесь сообщить нам свое имя, номер(а) контактного телефона, адрес вашей электронной почты, а&nbsp;также любые иные персональные данные, которые вы&nbsp;согласны предоставить нашим техническим специалистам, с&nbsp;тем, чтобы наши технические специалисты смогли отреагировать на&nbsp;вашу заявку.</p>
                <p>Мы&nbsp;собираем и&nbsp;сохраняем информацию от&nbsp;всех посетителей нашего веб-сайта, которую они либо активно предоставляют в&nbsp;наше распоряжение, либо в&nbsp;ходе их&nbsp;простого просмотра нашего веб-сайта: адрес компьютера в&nbsp;сети (IP), тип браузера, тип операционной системы, дата и&nbsp;время доступа к&nbsp;нашему сайту, адрес интернет-ресурса, с&nbsp;которого пользователь был перенаправлен на&nbsp;наш веб-сайт. Мы&nbsp;используем такую информацию для отслеживания посещаемости нашего веб-сайта, подсчета количества посетителей на&nbsp;разных секциях веб-сайта, а&nbsp;также для того, чтобы сделать наш сайт более полезным.
                </p>
                <div class="h2">Что мы&nbsp;делаем с&nbsp;информацией, которую мы&nbsp;собираем? </div>
                <p>Мы&nbsp;используем персональные данные с&nbsp;целью предоставления вам услуг, которые вы&nbsp;нас просите вам предоставить. Если только вы&nbsp;не&nbsp;уведомите нас о&nbsp;том, что более не&nbsp;желаете получать такого рода информацию, мы&nbsp;можем периодически сообщать вам о&nbsp;наших продуктах и&nbsp;услугах. Сообщая нам по&nbsp;электронной почте или по&nbsp;телефону ваши персональные данные, вы, таким образом, соглашаетесь на&nbsp;использование нами вашей информации в&nbsp;порядке, как это указано в&nbsp;данном пункте.</p>
                <p>Мы&nbsp;можем проводить статистические анализы поведения пользователя (например, анализируя данные по&nbsp;использованию веб-сайта, пассивно поступающие от&nbsp;всех пользователей) с&nbsp;целью определить относительную степень интереса потребителя к&nbsp;различным разделам нашего веб-сайта. Такой анализ поможет нам в&nbsp;наших усилиях по&nbsp;дальнейшему совершенствованию продукта.</p>
                <div class="h2">С&nbsp;кем мы&nbsp;делимся собранной информацией? </div>
                <p>Мы&nbsp;будем предоставлять ваши персональные данные, если этого потребует закон, в&nbsp;том числе, по&nbsp;запросам судебных инстанций, по&nbsp;распоряжению суда, при вызове в&nbsp;суды в&nbsp;качестве свидетеля, либо в&nbsp;соответствии с&nbsp;иными требованиями федеральных, региональных или муниципальных законов.</p>
                <p>Мы&nbsp;можем передавать статистические данные третьим лицам в&nbsp;суммарной форме без раскрытия каких-либо персональных данных наших пользователей.</p>
                <div class="h2">Как вы&nbsp;можете отказаться от&nbsp;получения информации от&nbsp;нас?</div>
                <p>Если вы&nbsp;не&nbsp;желаете, чтобы мы&nbsp;контактировали с&nbsp;вами по&nbsp;вопросу наших продуктов или услуг, вы&nbsp;можете сообщить нам об&nbsp;этом или в&nbsp;момент предоставления нам ваших контактных данных, или в&nbsp;любое другое время посредством отправки электронного письма на go@weby.pro.</p>
                <div class="h2">Ссылки на&nbsp;веб-сайты третьих лиц </div>
                <p>В&nbsp;качестве услуги мы&nbsp;можем предоставить вам ссылки на&nbsp;веб-сайты, эксплуатируемые и&nbsp;управляемые третьими лицами. Такие третьи лица используют собственную систему сбора данных. Мы&nbsp;не&nbsp;несем ответственности за&nbsp;их&nbsp;практику сбора данных, как и&nbsp;за&nbsp;содержание их&nbsp;сайтов. Мы&nbsp;советуем вам внимательно изучить степень соблюдения конфиденциальности на&nbsp;всех веб-сайтах, включая доступные по&nbsp;ссылкам с&nbsp;данной страницы.</p>
                <div class="h2">Какие средства защиты применяются для защиты вашей информации? </div>
                <p>Все касающиеся вас сведения, сохраняемые на&nbsp;нашем веб-сервере, размещаются в&nbsp;закрытых базах данных и&nbsp;защищенных целым рядом технических средств контроля доступа.</p>
            </div>
        </div>
    </div>
</div>

<div id="modal-cookie" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Правила cookie</h4>
            </div>
            <div class="modal-body">
                <p>Чтобы наш сайт функционировал оптимально, и&nbsp;чтобы все страницы отображались правильно, необходимо, чтобы ваш браузер допускал файлы cookies. Файлы-куки используются для того, чтобы сайт смог узнавать посетителя на&nbsp;основе его предыдущих посещений, или, чтобы дать посетителям доступ к&nbsp;различным функциям или услугам на&nbsp;сайте, а&nbsp;также для предоставления статистических данных владельцам сайта. Если вы&nbsp;не&nbsp;хотите получать файлы cookies с&nbsp;нашего или других веб-сайтов, вы&nbsp;можете изменить настройки вашего браузера.</p>
                <p>Файл cookie&nbsp;— это небольшой текстовый файл, который веб-сайт сохраняет на&nbsp;вашем компьютере. Различные файлы-куки имеют своё предназначение. Например, файлы-куки используются для хранения пользовательских настроек для сайта. Файлы-куки могут также использоваться для ведения сайтом статистики посещений.</p>
                <p>В&nbsp;соответствии с&nbsp;Законом об&nbsp;электронной связи, все, кто посещает веб-сайт с&nbsp;куки-файлами, должны быть проинформированы о&nbsp;следующем:<br>
                    — Что сайт содержит куки-файлы<br>
                    — Для чего используются эти куки-файлы<br>
                    — Как можно избежать загрузки куки-файлов</p>
                <p>Имеется два типа файлов-куки: сессионные и&nbsp;постоянные. Сессионные файлы-куки сохраняются на&nbsp;вашем компьютере, но&nbsp;исчезают, как только вы&nbsp;покидаете сайт. Постоянные куки-файлы сохраняются на&nbsp;вашем компьютере до&nbsp;даты, когда файл-куки считается использованным.</p>
                <h2>Хотите получить дополнительную информацию?</h2>
                <p>Хотите узнать больше о&nbsp;том, что такое файлы-куки и&nbsp;что делать, чтобы избежать&nbsp;их? Посетите сайт информационного агентства почты и&nbsp;телекоммуникаций по&nbsp;адресу <a href="http://www.allaboutcookies.org" target="_blank" class="underline">www.allaboutcookies.org</a>.</p>

            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./cookies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./find.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./feedback-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("./login-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo '<script'; ?>
>
$(document).ready(function () {
    $("a.fancy").fancybox({
        padding : 0,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
