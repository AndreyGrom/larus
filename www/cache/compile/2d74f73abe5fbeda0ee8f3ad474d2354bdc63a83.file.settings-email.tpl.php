<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:54
         compiled from "D:\data\domains\provoda\www\system\controllers\settings\tpl\settings-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508729365616d2f1a2f3363-33731447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d74f73abe5fbeda0ee8f3ad474d2354bdc63a83' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\settings\\tpl\\settings-email.tpl',
      1 => 1626993045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508729365616d2f1a2f3363-33731447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f1a306bf0_46868442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f1a306bf0_46868442')) {function content_616d2f1a306bf0_46868442($_smarty_tpl) {?><div class="form-group">
    <label class="col-sm-3 control-label">Почтовый сервер:</label>
    <div class="col-sm-9">
        <select name="MailSMTPEnabled" id="MailSMTPEnabled" class="form-control">
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->MailSMTPEnabled=='0') {?>selected<?php }?> value="0">Функция Mail</option>
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->MailSMTPEnabled=='1') {?>selected<?php }?> value="1">Внешний SMTP</option>
        </select>
    </div>
</div>
<div class="smtp-settings" <?php if ($_smarty_tpl->tpl_vars['config']->value->MailSMTPEnabled=='0') {?>style="display: none" <?php }?>>
    <div class="form-group">
        <label for="MailSMTPHost" class="col-sm-3 control-label">SMTP Host:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->MailSMTPHost;?>
" name="MailSMTPHost" id="MailSMTPHost" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="MailSMTPPort" class="col-sm-3 control-label">SMTP Port:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->MailSMTPPort;?>
" name="MailSMTPPort" id="MailSMTPPort" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="MailSMTPUserName" class="col-sm-3 control-label">SMTP User Name:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->MailSMTPUserName;?>
" name="MailSMTPUserName" id="MailSMTPUserName" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="MailSMTPUserPassword" class="col-sm-3 control-label">SMTP User Password:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->MailSMTPUserPassword;?>
" name="MailSMTPUserPassword" id="MailSMTPUserPassword" type="text" class="form-control" placeholder="">
        </div>
    </div>

    <div class="form-group">
        <label for="MailSMTPFromName" class="col-sm-3 control-label">SMTP From Name</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->MailSMTPFromName;?>
" name="MailSMTPFromName" id="MailSMTPFromName" type="text" class="form-control" placeholder="">
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $("#MailSMTPEnabled").change(function(){
        if ($(this).val() == 1){
            $(".smtp-settings").show();
        } else {
            $(".smtp-settings").hide();
        }
    });
<?php echo '</script'; ?>
>
<?php }} ?>
