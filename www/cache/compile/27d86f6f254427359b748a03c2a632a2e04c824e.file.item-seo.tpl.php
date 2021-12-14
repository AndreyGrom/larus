<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-14 16:24:08
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\item-seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17445651761b89af826bc05-98614615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d86f6f254427359b748a03c2a632a2e04c824e' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\item-seo.tpl',
      1 => 1626992978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17445651761b89af826bc05-98614615',
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
  'unifunc' => 'content_61b89af8273901_37677088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b89af8273901_37677088')) {function content_61b89af8273901_37677088($_smarty_tpl) {?><div class="form-horizontal" role="form">
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
