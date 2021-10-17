<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:32:22
         compiled from "W:\domains\provoda\www\themes\default\tpl\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129640592360fc2476b82ef2-40357024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe38902b8320f1a84f26d87090be7138ad99847b' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\common\\footer.tpl',
      1 => 1626993775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129640592360fc2476b82ef2-40357024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc2476b82ef9_33422662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc2476b82ef9_33422662')) {function content_60fc2476b82ef9_33422662($_smarty_tpl) {?><footer>

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
