<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:48:13
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item-price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1723785204616d50ed996003-61941785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db60f54f28088f5e84cc239a47757aa8c4e29810' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\item-price.tpl',
      1 => 1626993008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1723785204616d50ed996003-61941785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_price' => 0,
    'item_price_new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d50ed9a7955_31016388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d50ed9a7955_31016388')) {function content_616d50ed9a7955_31016388($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-3 control-label">Цена:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_price']->value;?>
" name="price" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Новая цена:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_price_new']->value;?>
" name="price_new" type="text" class="form-control">
        </div>
    </div>
</div><?php }} ?>
