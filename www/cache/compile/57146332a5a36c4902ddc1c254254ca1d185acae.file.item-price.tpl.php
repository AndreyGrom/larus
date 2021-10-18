<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:34
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\item-price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268966048616d52e255f533-66261866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57146332a5a36c4902ddc1c254254ca1d185acae' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\item-price.tpl',
      1 => 1626993044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268966048616d52e255f533-66261866',
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
  'unifunc' => 'content_616d52e2586646_70877330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52e2586646_70877330')) {function content_616d52e2586646_70877330($_smarty_tpl) {?><div class="form-horizontal" role="form">
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
