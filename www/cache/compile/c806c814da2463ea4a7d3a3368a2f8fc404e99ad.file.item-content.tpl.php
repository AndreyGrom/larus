<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:48:13
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341550161616d50ed986604-31446996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c806c814da2463ea4a7d3a3368a2f8fc404e99ad' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\item-content.tpl',
      1 => 1626993007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341550161616d50ed986604-31446996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'short_item_content' => 0,
    'item_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d50ed98a489_57038631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d50ed98a489_57038631')) {function content_616d50ed98a489_57038631($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="content" class="col-sm-12">Краткое описание:</label>
        <div class="col-sm-12">
            <textarea name="short_content" class="textarea-edit" id="short_content" style="width:750px;height:100px;"><?php echo $_smarty_tpl->tpl_vars['short_item_content']->value;?>
</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="content" class="col-sm-12">Полное описание:</label>
        <div class="col-sm-12">
            <textarea class="form-control textarea-edit" name="content" id="content" style="width:750px;height:400px;"><?php echo $_smarty_tpl->tpl_vars['item_content']->value;?>
</textarea>
        </div>
    </div>
</div><?php }} ?>
