<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 08:08:52
         compiled from "D:\data\domains\provoda\www\system\controllers\register\tpl\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205366217261ee2ff16950c4-10655058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ccf3840fdcf064ddc91e08a5b28bda15fb1757' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\register\\tpl\\users.tpl',
      1 => 1643000922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205366217261ee2ff16950c4-10655058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee2ff16b44d9_09226365',
  'variables' => 
  array (
    'users' => 0,
    'pagination' => 0,
    'start' => 0,
    'items_count' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee2ff16b44d9_09226365')) {function content_61ee2ff16b44d9_09226365($_smarty_tpl) {?><h3>Пользователи сайта
    <div class="pull-right">
        <a class="btn btn-primary btn-xs" href="?c=register&act=new"><span class="glyphicon glyphicon-plus"></span></a>
    </div>
</h3>
<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
    <div class="col-sm-6">
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

    </div>
    <div class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>col-sm-6<?php } else { ?>col-sm-12<?php }?> text-right">
        <p style="margin-top: 10px;">Показано пользователей: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['items_count']->value+$_smarty_tpl->tpl_vars['start']->value-1;?>
 из <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</p>
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Регистрация</th>
            <th>Активность</th>
            <th>Действия</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['FIO'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_CREATE'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_ACTIVE'];?>
</td>
                <td>
                    <a class="btn btn-success btn-xs" data-original-title="Редактировать данные пользователя" title="" data-toggle="tooltip" href="?c=register&id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a class="btn btn-danger btn-xs del-user" data-original-title="Удалить пользователя" title="" data-toggle="tooltip" href="?c=register&act=del&id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
        <?php endfor; endif; ?>
    </table>
    <div class="col-sm-6">
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

    </div>
    <div class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>col-sm-6<?php } else { ?>col-sm-12<?php }?> text-right">
        <p style="margin-top: 10px;">Показано пользователей: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['items_count']->value+$_smarty_tpl->tpl_vars['start']->value-1;?>
 из <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</p>
    </div>
    <?php echo '<script'; ?>
>
        $(".del-user").click(function(e){
            if (!confirm("Вы действительно хотите удалить пользователя?")){
                e.preventDefault();
            }
        });
    <?php echo '</script'; ?>
>
<?php } else { ?>
    Пользователей нет
<?php }?>
<?php }} ?>
