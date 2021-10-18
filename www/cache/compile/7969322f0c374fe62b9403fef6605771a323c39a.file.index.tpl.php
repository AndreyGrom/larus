<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:47
         compiled from "D:\data\domains\provoda\www\system\controllers\index\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247838741616d2f1324cc29-51535143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7969322f0c374fe62b9403fef6605771a323c39a' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\index\\tpl\\index.tpl',
      1 => 1626993030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247838741616d2f1324cc29-51535143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_count' => 0,
    'catalog_count' => 0,
    'comments_count' => 0,
    'codes_count' => 0,
    'pages' => 0,
    'catalog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f13295085_73166877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f13295085_73166877')) {function content_616d2f13295085_73166877($_smarty_tpl) {?><h1>Панель управления</h1>
<div class="row">
<div class="col-sm-12">
    <div class="panel-group" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                <h4 class="panel-title">
                    Общая статистика
                    <a class="pull-right" data-toggle="collapse" href="#collapse1" aria-expanded="true"
                       aria-controls="collapseListGroup1">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>

                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in clearfix" style="padding: 10px" role="tabpanel"
                 aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
                <div class="col-sm-3">
                    <a href="?c=pages">
                        <span class="glyphicon glyphicon-edit"></span>
                        Страницы: <?php echo $_smarty_tpl->tpl_vars['page_count']->value;?>

                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="?c=catalog">
                        <span class="glyphicon glyphicon-th-list"></span>
                        Каталог: <?php echo $_smarty_tpl->tpl_vars['catalog_count']->value;?>

                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="?c=comments">
                        <span class="glyphicon glyphicon-comment"></span>
                        Комментарии: <?php echo $_smarty_tpl->tpl_vars['comments_count']->value;?>

                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="?c=code">
                        <span class="glyphicon glyphicon-random"></span>
                        Коды: <?php echo $_smarty_tpl->tpl_vars['codes_count']->value;?>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-group" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="collapseL2">
                <h4 class="panel-title">
                    <a href="?c=pages">Страницы</a>: недавно измененные
                    <a class="pull-right" data-toggle="collapse" href="#collapse2" aria-expanded="true"
                       aria-controls="collapse2">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>

                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in clearfix" style="padding: 10px" role="tabpanel"
                 aria-labelledby="collapseL2" aria-expanded="true">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <div class="col-sm-3">
                        <span><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_EDIT'];?>
</span>
                    </div>
                    <div class="col-sm-9">
                        <span style="font-weight: bold"><a href="?c=pages&id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></span>
                    </div>
                <?php endfor; endif; ?>

            </div>
        </div>
    </div>

    <div class="panel-group" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="collapseL3">
                <h4 class="panel-title">
                    <a href="?c=catalog">Каталог</a>: недавно измененные
                    <a class="pull-right" data-toggle="collapse" href="#collapse3" aria-expanded="true"
                       aria-controls="collapse3">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>

                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in clearfix" style="padding: 10px" role="tabpanel"
                 aria-labelledby="collapseL3" aria-expanded="true">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalog']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <div class="col-sm-3">
                        <span><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_EDIT'];?>
</span>
                    </div>
                    <div class="col-sm-9">
                        <span style="font-weight: bold"><a href="?c=pages&id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['catalog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></span>
                    </div>
                <?php endfor; endif; ?>

            </div>
        </div>
    </div>
</div>
</div><?php }} ?>
