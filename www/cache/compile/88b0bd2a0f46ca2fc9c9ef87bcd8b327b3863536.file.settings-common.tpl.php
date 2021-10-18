<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:54
         compiled from "D:\data\domains\provoda\www\system\controllers\settings\tpl\settings-common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919770099616d2f1a231d42-11291875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b0bd2a0f46ca2fc9c9ef87bcd8b327b3863536' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\settings\\tpl\\settings-common.tpl',
      1 => 1626993045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1919770099616d2f1a231d42-11291875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'themes' => 0,
    'page_template' => 0,
    'modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f1a268862_51775944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f1a268862_51775944')) {function content_616d2f1a268862_51775944($_smarty_tpl) {?><div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="SiteEnabled" id="SiteEnabled" class="form-control">
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->SiteEnabled=='1') {?>selected<?php }?> value="1">Сайт включен</option>
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->SiteEnabled=='0') {?>selected<?php }?> value="0">Сайт отключен</option>
        </select>
    </div>
</div>
<div class="form-group disabled-message" <?php if ($_smarty_tpl->tpl_vars['config']->value->SiteEnabled=='1') {?>style="display:none;"<?php }?>>
    <label for="SiteDisabledMessage" class="col-sm-3 control-label">Сообщение при отключенном сайте:</label>
    <div class="col-sm-9">
        <textarea name="SiteDisabledMessage" id="SiteDisabledMessage" class="form-control"><?php echo $_smarty_tpl->tpl_vars['config']->value->SiteDisabledMessage;?>
</textarea>
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Название сайта:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteTitle;?>
" name="SiteTitle" id="SiteTitle" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Описание сайта:</label>
    <div class="col-sm-9">
        <textarea name="SiteDescription" id="SiteDescription" cols="30" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['config']->value->SiteDescription;?>
</textarea>
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Владелец:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteDirector;?>
" name="SiteDirector" id="SiteDirector" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="template" class="col-sm-3 control-label">Тема оформления:</label>
    <div class="col-sm-9">
        <select name="Theme" id="Theme" class="form-control">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['themes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option <?php if ($_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['page_template']->value) {?>selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
            <?php endfor; endif; ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Модуль на главной:</label>
    <div class="col-sm-9">
        <select name="ModuleDefault" id="ModuleDefault" class="form-control">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modules']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <?php if ($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']!==0) {?>
                    <option <?php if ($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['alias']==$_smarty_tpl->tpl_vars['config']->value->ModuleDefault) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
                <?php }?>
            <?php endfor; endif; ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Мета-описание по-умолчанию:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->DefaultMetaDesc;?>
" name="DefaultMetaDesc" type="text" class="form-control" />
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-3 control-label">Ключевые слова по-умолчанию:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->DefaultMetaKeywords;?>
" name="DefaultMetaKeywords" type="text" class="form-control" />
    </div>
</div>
<hr/>
<div class="form-group">
    <label class="col-sm-3 control-label">Консоль отладки:</label>
    <div class="col-sm-9">
        <select name="ShowDebugConsole" id="ShowDebugConsole" class="form-control">
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->ShowDebugConsole=='1') {?>selected<?php }?> value="1">Показывать</option>
            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->ShowDebugConsole=='0') {?>selected<?php }?> value="0">Не показывать</option>
        </select>
    </div>
</div>
<?php echo '<script'; ?>
>
    $("#SiteEnabled").change(function(){
        if ($(this).val() == 0){
            $(".disabled-message").show();
        } else {
            $(".disabled-message").hide();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
