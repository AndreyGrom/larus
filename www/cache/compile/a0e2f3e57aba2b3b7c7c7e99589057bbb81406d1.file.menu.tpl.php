<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 08:11:15
         compiled from "D:\data\domains\provoda\www\system\controllers\register\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46496936361ee2ff1145957-07856676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e2f3e57aba2b3b7c7c7e99589057bbb81406d1' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\register\\tpl\\menu.tpl',
      1 => 1643001072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46496936361ee2ff1145957-07856676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee2ff1182235_38179813',
  'variables' => 
  array (
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee2ff1182235_38179813')) {function content_61ee2ff1182235_38179813($_smarty_tpl) {?><div class="panel-group " role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="module_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_heading">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-user"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Пользователи сайта</a>
                <span class="caret"></span>

            </h4>

        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="module_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_heading" aria-expanded="true">
            <div class="row" style="padding-left: 16px; padding-top: 9px;">
                <div class="col-sm-12">
                    <a class="btn btn-info btn-xs" href="?c=register"><span class="glyphicon glyphicon-user"></span> Список пользователей</a>
                </div>
            </div>
            <div class="row" style="padding-left: 16px; padding-top: 9px;">
                <div class="col-sm-12">
                    <a class="btn btn-info btn-xs" href="?c=register&act=groups"><span class="glyphicon glyphicon-cog"></span> Группы пользователей</a>
                </div>
            </div>
            <br/>
        </div>
    </div>
</div><?php }} ?>
