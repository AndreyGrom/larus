<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-14 16:24:08
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\item-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44711370861b89af80f0d39-09610690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f09be3ebd29570bdd14585e728e360a499c7d3c3' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\item-content.tpl',
      1 => 1626992977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44711370861b89af80f0d39-09610690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61b89af80f4bb9_40338975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b89af80f4bb9_40338975')) {function content_61b89af80f4bb9_40338975($_smarty_tpl) {?><div class="form-horizontal" role="form">

    <div class="form-group">
        <label for="content" class="col-sm-12">Полное описание:</label>
        <div class="col-sm-12">
            <textarea class="form-control textarea-edit" name="content" id="content" style="width:750px;height:400px;"><?php echo $_smarty_tpl->tpl_vars['item_content']->value;?>
</textarea>
        </div>
    </div>
</div><?php }} ?>
