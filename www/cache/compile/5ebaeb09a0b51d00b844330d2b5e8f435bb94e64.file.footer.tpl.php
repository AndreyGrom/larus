<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 18:54:03
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329719597617ac294150ea5-17411430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebaeb09a0b51d00b844330d2b5e8f435bb94e64' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\footer.tpl',
      1 => 1641225233,
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
                <div class="col-xs-12 text-center">
                    Технический текст, заполнить о политике конфидециальности, правилах копирования, публичной оферте
                </div>
            </div>
        </div>
    </div>
</footer>

<?php echo $_smarty_tpl->getSubTemplate ("./cookies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./find.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./feedback-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
