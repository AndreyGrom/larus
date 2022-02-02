<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-31 11:22:59
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\item-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162002772661f795ad5f48c4-56618429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fcf9dcfdbdb1c455b73ba2b8d347ee5eb1cbd47' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\item-content.tpl',
      1 => 1643617361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162002772661f795ad5f48c4-56618429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f795ad5f8746_38051075',
  'variables' => 
  array (
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f795ad5f8746_38051075')) {function content_61f795ad5f8746_38051075($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="content" class="col-sm-12">Краткое описание:</label>
        <div class="col-sm-12">
            <textarea name="short_content" class="textarea-edit" id="short_content" style="width:750px;height:100px;"><?php echo $_smarty_tpl->tpl_vars['blog']->value['SHORT_CONTENT'];?>
</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="content" class="col-sm-12">Полное описание:</label>
        <div class="col-sm-12">
            <textarea class="form-control textarea-edit" name="content" id="content" style="width:750px;height:400px;"><?php echo $_smarty_tpl->tpl_vars['blog']->value['CONTENT'];?>
</textarea>
        </div>
    </div>
</div><?php }} ?>
