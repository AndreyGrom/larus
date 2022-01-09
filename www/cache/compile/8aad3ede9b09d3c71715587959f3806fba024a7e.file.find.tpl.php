<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-27 15:11:40
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\find.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162577037961c32462b846b1-93800077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aad3ede9b09d3c71715587959f3806fba024a7e' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\find.tpl',
      1 => 1640607096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162577037961c32462b846b1-93800077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61c32462b88532_05244152',
  'variables' => 
  array (
    'theme_dir' => 0,
    'placeholder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c32462b88532_05244152')) {function content_61c32462b88532_05244152($_smarty_tpl) {?><form action="/find/" method="get"  id="find-form">
    <div class="container">
        <div class="row">
            <div class="find-form">
                <div class="row">
                    <div class="col-sm-1 text-center">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/find.png" alt="" id="find-icon">
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="q" id="q" placeholder="<?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo $_smarty_tpl->tpl_vars['placeholder']->value;
} else { ?>Поиск по сайту<?php }?>">
                    </div>
                    <div class="col-sm-1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/delete.png" alt="" id="close-find-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php echo '<script'; ?>
>
    $(".icon-find a, #find-open").click(function (e) {
        e.preventDefault();
        $("#find-form").show();
    });
    $("#close-find-icon").click(function (e) {
        $("#find-form").hide();
    });
    $("#find-form").submit(function () {
        if ($("#find-form #q").val() !== ""){
            document.location.href = "/find/q=" + $("#find-form #q").val();
        }
        return false;
    });
    $("#find-icon").click(function (e) {
        $("#find-form").submit();
    });

<?php echo '</script'; ?>
><?php }} ?>
