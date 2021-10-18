<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:21:36
         compiled from "D:\data\domains\provoda\www\system\controllers\pages\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104920587616d4ab023bcc5-62612648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4aa899af86b868c38134e878741b793cbaafa25' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\pages\\tpl\\menu.tpl',
      1 => 1626993017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104920587616d4ab023bcc5-62612648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_alias' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d4ab024f558_49996196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d4ab024f558_49996196')) {function content_616d4ab024f558_49996196($_smarty_tpl) {?><div class="panel-group hidden-sm hidden-xs" role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Страницы сайта</a>
                <span class="caret"></span>
                <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=<?php echo $_smarty_tpl->tpl_vars['module_alias']->value;?>
&act=new">
                    <span class="glyphicon glyphicon-plus"></span>
                    Создать страницу
                </a>
                <a class="btn btn-info btn-xs" href="?c=<?php echo $_smarty_tpl->tpl_vars['module_alias']->value;?>
&act=settings"><span class="glyphicon glyphicon-cog"></span></a>
            </h4>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="collapseListGroupHeading1" aria-expanded="true">

            <?php if (($_smarty_tpl->tpl_vars['menu']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            <?php }?>
        </div>
        <h5 class="panel-footer"><span class="glyphicon glyphicon-paperclip"></span> <a href="?c=<?php echo $_smarty_tpl->tpl_vars['module_alias']->value;?>
&act=templates">Управление шаблонами</a></h5>
    </div>
</div><?php }} ?>
