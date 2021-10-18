<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:11:10
         compiled from "D:\data\domains\provoda\www\themes\default\tpl\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:978952325616d2c1e081de9-12231121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e5fe750c320ba44289620bb2993622f478005b' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\default\\tpl\\common\\footer.tpl',
      1 => 1626993775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '978952325616d2c1e081de9-12231121',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2c1e085c67_37630033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2c1e085c67_37630033')) {function content_616d2c1e085c67_37630033($_smarty_tpl) {?><footer>

        <nav class="navbar navbar-default navbar-footer">
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
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="/documents">Документы PDF</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right dropup">
                        <li class="dropdown">
                            <a href="/contacts">Контакты</a>
                        </li>
                        <li>
                            <p class="navbar-text">Поделиться</p>
                        </li>
                        <li>
                            <?php echo '<script'; ?>
 src="https://yastatic.net/share2/share.js"><?php echo '</script'; ?>
>
                            <div class="ya-share2 navbar-text" data-curtain data-shape="round" data-color-scheme="blackwhite" data-services="collections,vkontakte,facebook,odnoklassniki,messenger"></div>
                        </li>
                        <li class="dropdown">
                            <a href="/login">Войти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</footer>

<div id="feedback" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Написать нам</h4>
            </div>

            <div class="modal-body">
                [widjet name="mail_form" params="12"]
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
<?php }} ?>
