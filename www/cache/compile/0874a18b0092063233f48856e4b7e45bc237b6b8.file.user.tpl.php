<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 08:04:37
         compiled from "D:\data\domains\provoda\www\system\controllers\register\tpl\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61336788861ee2ff53f2671-95795748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0874a18b0092063233f48856e4b7e45bc237b6b8' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\register\\tpl\\user.tpl',
      1 => 1643000187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61336788861ee2ff53f2671-95795748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee2ff54aa028_58166915',
  'variables' => 
  array (
    'groups' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee2ff54aa028_58166915')) {function content_61ee2ff54aa028_58166915($_smarty_tpl) {?><form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-cog"></span> Изменение данных пользователя
                <div class="pull-right">
                    <a class="btn btn-primary btn-xs" href="?c=register"><span class="glyphicon glyphicon-arrow-left"></span></a>
                    <button name="save-user" type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                </div>
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Группа:</label>
                    <div class="col-sm-9">
                        <select name="group_id" id="" class="form-control">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <option <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['GROUP_ID']==$_smarty_tpl->tpl_vars['user']->value['GROUP_ID']) {?> selected="selected" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['GROUP_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['GROUP_NAME'];?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <hr/>
               <div class="form-group">
                    <label class="col-sm-3 control-label">ФИО:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['user']->value['FIO'];?>
" name="fio" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['user']->value['EMAIL'];?>
" name="email" type="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Пароль:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['user']->value['PASSWORD'];?>
" name="password" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Телефон:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['user']->value['PHONE'];?>
" name="phone" type="tel" class="form-control">
                    </div>
                </div>

            </div>
        </div>
    </div>
</form><?php }} ?>
