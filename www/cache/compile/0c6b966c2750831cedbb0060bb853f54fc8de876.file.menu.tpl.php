<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-04 14:05:45
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7516543161ab4b8980a3b0-06565657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c6b966c2750831cedbb0060bb853f54fc8de876' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\menu.tpl',
      1 => 1626992979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7516543161ab4b8980a3b0-06565657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ab4b898314b7_73231281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ab4b898314b7_73231281')) {function content_61ab4b898314b7_73231281($_smarty_tpl) {?><div class="panel-group " role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Категории магазина</a>
                <span class="caret"></span>

            </h4>
            <br/>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=shop&act=new_c">
                <span class="glyphicon glyphicon-plus"></span>
                Создать категорию
            </a>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=shop&act=new">
                <span class="glyphicon glyphicon-plus"></span>
                Добавить материал
            </a>
            <a class="btn btn-info btn-xs" href="?c=shop&act=settings"><span class="glyphicon glyphicon-cog"></span></a>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
            <?php if (($_smarty_tpl->tpl_vars['menu']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            <?php }?>
        </div>
    </div>
</div><?php }} ?>
