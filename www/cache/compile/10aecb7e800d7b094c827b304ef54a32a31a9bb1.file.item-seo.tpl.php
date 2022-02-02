<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-31 12:04:43
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\item-seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41624805161f795ad63add9-91833746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10aecb7e800d7b094c827b304ef54a32a31a9bb1' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\item-seo.tpl',
      1 => 1643619880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41624805161f795ad63add9-91833746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f795ad63ec57_77216397',
  'variables' => 
  array (
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f795ad63ec57_77216397')) {function content_61f795ad63ec57_77216397($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-title:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['META_TITLE'];?>
" name="meta_title" type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-description:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['META_DESC'];?>
" name="meta_desc" type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Meta-keywords:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['META_KEYWORDS'];?>
" name="meta_keywords" type="text" class="form-control" />
        </div>
    </div>
</div><?php }} ?>
