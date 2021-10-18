<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:34
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\item-common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711378047616d52e24da817-85867675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2fe208cf0460f28613786fd0910cdb10bc1ceb' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\item-common.tpl',
      1 => 1626993042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711378047616d52e24da817-85867675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'item_title' => 0,
    'item_alias' => 0,
    'templates' => 0,
    'item_template' => 0,
    'item_publ' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d52e24f9c23_07305659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52e24f9c23_07305659')) {function content_616d52e24f9c23_07305659($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Дата публикации:</label>
        <div class="col-sm-9">
            <input required value="<?php echo $_smarty_tpl->tpl_vars['item']->value['DATE_PUBL'];?>
" name="date_publ" type="text" class="datepicker form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Дата изменения:</label>
        <div class="col-sm-9">
            <input required value="<?php echo $_smarty_tpl->tpl_vars['item']->value['DATE_EDIT'];?>
" name="date_edit" type="text" class="datepicker form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Название:</label>
        <div class="col-sm-9">
            <input required value="<?php echo $_smarty_tpl->tpl_vars['item_title']->value;?>
" name="title" id="title" type="text" class="form-control" placeholder="Введите название материала">
        </div>
    </div>
    <div class="form-group">
        <label for="alias" class="col-sm-3 control-label">Алиас:</label>
        <div class="col-sm-9">
            <input value="<?php echo $_smarty_tpl->tpl_vars['item_alias']->value;?>
" name="alias" id="alias" type="text" class="form-control" placeholder="Только символы a-z, A-Z, 0-9, -_ " />
            <p class="help-block">Только символы a-z, A-Z, 0-9, -_ <br/>
                Можно оставить пустым. Заполнится автоматически</p>
        </div>
    </div>
    <div class="form-group">
        <label for="parent" class="col-sm-3 control-label">Категории:</label>
        <div class="col-sm-9">
            <div style="height: 100px;overflow:auto;border:1px solid #ccc;padding: 3px;">
                <?php echo $_smarty_tpl->getSubTemplate ("menu_.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="template" class="col-sm-3 control-label">Шаблон:</label>
        <div class="col-sm-9">
            <select name="template" id="template" class="form-control">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <option <?php if ($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['item_template']->value) {?>selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
                <?php endfor; endif; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="publ" class="col-sm-3 control-label">Публикация:</label>
        <div class="col-sm-9">
            <label><input type="radio" name="publ" id="publ" value="1" <?php if ($_smarty_tpl->tpl_vars['item_publ']->value==1||$_smarty_tpl->tpl_vars['new']->value) {?>checked="checked"<?php }?> /> Сразу</label>
            <label><input <?php if (!$_smarty_tpl->tpl_vars['new']->value&&$_smarty_tpl->tpl_vars['item_publ']->value==0) {?>checked="checked"<?php }?> type="radio" name="publ" value="0" /> Позже</label>
        </div>
    </div>
    <div class="form-group">
        <label for="template" class="col-sm-3 control-label">Блог:</label>
        <div class="col-sm-9">
            <select name="blog" class="form-control">
                <option value="0">Не отображать</option>
                <option <?php if ($_smarty_tpl->tpl_vars['item']->value['BLOG']==1) {?>selected<?php }?> value="1">Отображать</option>
            </select>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $(function(){
        $(".datepicker").datepicker();
    });
<?php echo '</script'; ?>
><?php }} ?>
