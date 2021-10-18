<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:34
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\item-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181270424616d52e254fb34-42880330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd395d247eeccde6ac6feba75fa1efac15056c87e' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\item-content.tpl',
      1 => 1626993042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181270424616d52e254fb34-42880330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d52e25539b1_76896307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52e25539b1_76896307')) {function content_616d52e25539b1_76896307($_smarty_tpl) {?><div class="form-horizontal" role="form">

    <div class="form-group">
        <label for="content" class="col-sm-12">Полное описание:</label>
        <div class="col-sm-12">
            <textarea class="form-control textarea-edit" name="content" id="content" style="width:750px;height:400px;"><?php echo $_smarty_tpl->tpl_vars['item_content']->value;?>
</textarea>
        </div>
    </div>
</div><?php }} ?>
