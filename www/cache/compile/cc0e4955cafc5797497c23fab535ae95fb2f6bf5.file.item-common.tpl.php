<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-31 15:12:12
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\item-common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97843643061f7953435cc24-34353576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0e4955cafc5797497c23fab535ae95fb2f6bf5' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\item-common.tpl',
      1 => 1643631128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97843643061f7953435cc24-34353576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f795343a3135_56065676',
  'variables' => 
  array (
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f795343a3135_56065676')) {function content_61f795343a3135_56065676($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Название:</label>
        <div class="col-sm-9">
            <input required value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['TITLE'];?>
" name="title" id="title" type="text" class="form-control" placeholder="Введите название материала">
        </div>
    </div>
    <div class="form-group">
        <label for="parent" class="col-sm-3 control-label">Категории:</label>
        <div class="col-sm-9">
            <div style="border:1px solid #ccc;padding: 3px;">
                <?php echo $_smarty_tpl->getSubTemplate ("menu_.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

        </div>
    </div>
</div>
<?php }} ?>
