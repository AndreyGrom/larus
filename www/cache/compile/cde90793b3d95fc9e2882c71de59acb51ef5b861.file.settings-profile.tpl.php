<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:54
         compiled from "D:\data\domains\provoda\www\system\controllers\settings\tpl\settings-profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:711854429616d2f1a2d5e93-47097717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde90793b3d95fc9e2882c71de59acb51ef5b861' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\settings\\tpl\\settings-profile.tpl',
      1 => 1626993046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '711854429616d2f1a2d5e93-47097717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f1a2e1a10_83943861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f1a2e1a10_83943861')) {function content_616d2f1a2e1a10_83943861($_smarty_tpl) {?>

<div class="form-group">
    <label for="SiteDisabledMessage" class="col-sm-3 control-label">Логин администратора:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->AdminLogin;?>
" name="AdminLogin" id="AdminLogin" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Пароль администратора:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->AdminPassword;?>
" name="AdminPassword" id="AdminPassword" type="password" class="form-control" placeholder="">
    </div>
</div><?php }} ?>
