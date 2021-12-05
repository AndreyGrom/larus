<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-04 14:05:45
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\menu2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207354181261ab4b8973f182-88931515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a309f814a24442511b3eef3de590472eb421332c' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\menu2.tpl',
      1 => 1626992977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207354181261ab4b8973f182-88931515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ab4b897db5a0_16849913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ab4b897db5a0_16849913')) {function content_61ab4b897db5a0_16849913($_smarty_tpl) {?><ul <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?>class="nav"<?php } else { ?>class="ul-sub"<?php }?>>
    <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?><li><a href="?c=shop"><span class="glyphicon glyphicon-th-list btn-xs"></span> Все материалы</a></li><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <li>
        <a class="col-xs-10" href="?c=shop&cid=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
">
            <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?><span class="glyphicon glyphicon-book btn-xs"></span><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>

        </a>
        <a class="col-xs-2" data-toggle="tooltip" data-original-title="Редактировать категорию" href="?c=shop&cid=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
&act=edit"><span class="glyphicon glyphicon-pencil btn-xs"></span></a>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("menu2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'],'sub'=>true), 0);?>

        <?php }?>
    </li>
<?php endfor; endif; ?>
</ul><?php }} ?>
