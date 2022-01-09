<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 17:42:49
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item-seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32711483261d30b69b1d759-69918233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8c8e335ac3f251f2c084df2efdc66b7378d3fd' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\item-seo.tpl',
      1 => 1626993007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32711483261d30b69b1d759-69918233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_meta_title' => 0,
    'item_meta_desc' => 0,
    'item_meta_keywords' => 0,
    'item_tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61d30b69b25454_85961143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d30b69b25454_85961143')) {function content_61d30b69b25454_85961143($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-title:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_meta_title']->value;?>
" name="meta_title" type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-description:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_meta_desc']->value;?>
" name="meta_description" type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-keywords:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_meta_keywords']->value;?>
" name="meta_keywords" type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Теги:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_tags']->value;?>
" name="tags" type="text" class="form-control" />
            <p class="help-block">Через запятую</p>
        </div>
    </div>
</div><?php }} ?>
