<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 17:42:49
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item-price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119564115061d30b699b9f76-52413700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '119564115061d30b699b9f76-52413700',
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
  'unifunc' => 'content_61d30b699ecc01_32663946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d30b699ecc01_32663946')) {function content_61d30b699ecc01_32663946($_smarty_tpl) {?><div class="form-horizontal" role="form">
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
