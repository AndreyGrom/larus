<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-28 18:32:16
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090135674617ac280501583-44251415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9862124cdec7dbacfbaa8cb7bf6989014e38b9e6' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\menu.tpl',
      1 => 1626993008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090135674617ac280501583-44251415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac28057a711_06199155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac28057a711_06199155')) {function content_617ac28057a711_06199155($_smarty_tpl) {?><div class="panel-group " role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Категории блога</a>
                <span class="caret"></span>

            </h4>
            <br/>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=blog&act=new_c">
                <span class="glyphicon glyphicon-plus"></span>
                Создать категорию
            </a>
            <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=blog&act=new">
                <span class="glyphicon glyphicon-plus"></span>
                Добавить материал
            </a>
            <a class="btn btn-info btn-xs" href="?c=blog&act=settings"><span class="glyphicon glyphicon-cog"></span></a>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
            <?php if (($_smarty_tpl->tpl_vars['menu']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            <?php }?>
        </div>
    </div>
</div><?php }} ?>
