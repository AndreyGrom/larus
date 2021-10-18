<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:20
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1070015696616d52d456f0d8-28544836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b636e78f30a44c09176af63e4e42447de2ea26' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\menu.tpl',
      1 => 1626993044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1070015696616d52d456f0d8-28544836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d52d4574e90_11045303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52d4574e90_11045303')) {function content_616d52d4574e90_11045303($_smarty_tpl) {?><div class="panel-group " role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Категории новостей</a>
                <span class="caret"></span>

            </h4>
            <br/>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=news&act=new_c">
                <span class="glyphicon glyphicon-plus"></span>
                Создать категорию
            </a>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=news&act=new">
                <span class="glyphicon glyphicon-plus"></span>
                Добавить материал
            </a>
            <a class="btn btn-info btn-xs" href="?c=news&act=settings"><span class="glyphicon glyphicon-cog"></span></a>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
            <?php if (($_smarty_tpl->tpl_vars['menu']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            <?php }?>
        </div>
    </div>
</div><?php }} ?>
