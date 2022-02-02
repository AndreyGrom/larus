<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 08:10:46
         compiled from "D:\data\domains\provoda\www\system\controllers\register\tpl\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19514138461ee34d6706229-13538071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e14bda2b22a6d13aa9f672e3d852cd356a31201' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\register\\tpl\\settings.tpl',
      1 => 1626993031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19514138461ee34d6706229-13538071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee34d67d9160_56785925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee34d67d9160_56785925')) {function content_61ee34d67d9160_56785925($_smarty_tpl) {?><form method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                Настройки модуля "<?php echo $_smarty_tpl->tpl_vars['config']->value->RegisterModuleTitle;?>
"
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Статус:</label>
                    <div class="col-sm-9">
                        <select name="RegisterEnabled" id="RegisterEnabled" class="form-control">
                            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterEnabled=='1') {?>selected<?php }?> value="1">Модуль включен</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterEnabled=='0') {?>selected<?php }?> value="0">Модуль отключен</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Название модуля:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['config']->value->RegisterModuleTitle;?>
" name="RegisterModuleTitle" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                        <h4>Форма регистрации</h4>
                        <div style="height: 300px;overflow: auto">
                            <table class="table">
                                <tr>
                                    <th>Поле</th>
                                    <th>Показывать</th>
                                    <th>Обязательное</th>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="checkbox" checked disabled/></td>
                                    <td><input type="checkbox" checked disabled/></td>
                                </tr>
                                <tr>
                                    <td>Пароль</td>
                                    <td><input type="checkbox" checked disabled/></td>
                                    <td><input type="checkbox" checked disabled/></td>
                                </tr>
                                <tr>
                                    <td>Аватар</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldAvatarShow) {?>checked<?php }?> name="RegisterFieldAvatarShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldAvatarRequired) {?>checked<?php }?> name="RegisterFieldAvatarRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Ник</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldNickShow) {?>checked<?php }?> name="RegisterFieldNickShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldNickRequired) {?>checked<?php }?> name="RegisterFieldNickRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Телефон</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldPhoneShow) {?>checked<?php }?> name="RegisterFieldPhoneShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldPhoneRequired) {?>checked<?php }?> name="RegisterFieldPhoneRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Skype</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSkypeShow) {?>checked<?php }?> name="RegisterFieldSkypeShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSkypeRequired) {?>checked<?php }?> name="RegisterFieldSkypeRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>ICQ</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldICQShow) {?>checked<?php }?> name="RegisterFieldICQShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldICQRequired) {?>checked<?php }?> name="RegisterFieldICQRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Сайт</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSiteShow) {?>checked<?php }?> name="RegisterFieldSiteShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSiteRequired) {?>checked<?php }?> name="RegisterFieldSiteRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Фамилия</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldFirstNameShow) {?>checked<?php }?> name="RegisterFieldFirstNameShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldFirstNameRequired) {?>checked<?php }?> name="RegisterFieldFirstNameRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldNameShow) {?>checked<?php }?> name="RegisterFieldNameShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldNameRequired) {?>checked<?php }?> name="RegisterFieldNameRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Отчество</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldFatherNameShow) {?>checked<?php }?> name="RegisterFieldFatherNameShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldFatherNameRequired) {?>checked<?php }?> name="RegisterFieldFatherNameRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Дата рождения</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldBirthdayShow) {?>checked<?php }?> name="RegisterFieldBirthdayShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldBirthdayRequired) {?>checked<?php }?> name="RegisterFieldBirthdayRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Страна</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCountryShow) {?>checked<?php }?> name="RegisterFieldCountryShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCountryRequired) {?>checked<?php }?> name="RegisterFieldCountryRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Регион</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldRegionShow) {?>checked<?php }?> name="RegisterFieldRegionShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldRegionRequired) {?>checked<?php }?> name="RegisterFieldRegionRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Город</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCityShow) {?>checked<?php }?> name="RegisterFieldCityShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCityRequired) {?>checked<?php }?> name="RegisterFieldCityRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>WMR-кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldWMRShow) {?>checked<?php }?> name="RegisterFieldWMRShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldWMRRequired) {?>checked<?php }?> name="RegisterFieldWMRRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>WMZ-кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldWMZShow) {?>checked<?php }?> name="RegisterFieldWMZShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldWMZRequired) {?>checked<?php }?> name="RegisterFieldWMZRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Яндекс кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldYaMoneyShow) {?>checked<?php }?> name="RegisterFieldYaMoneyShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldYaMoneyRequired) {?>checked<?php }?> name="RegisterFieldYaMoneyRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Qiwi кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldQiwiShow) {?>checked<?php }?> name="RegisterFieldQiwiShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldQiwiRequired) {?>checked<?php }?> name="RegisterFieldQiwiRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Банковская карта</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCardShow) {?>checked<?php }?> name="RegisterFieldCardShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldCardRequired) {?>checked<?php }?> name="RegisterFieldCardRequired" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Подпись</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSignatureShow) {?>checked<?php }?> name="RegisterFieldSignatureShow" type="checkbox"/></td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->RegisterFieldSignatureRequired) {?>checked<?php }?> name="RegisterFieldSignatureRequired" type="checkbox"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                        <h4>Профиль пользователя</h4>
                        <div style="height: 300px;overflow: auto">
                            <table class="table">
                                <tr>
                                    <th>Поле</th>
                                    <th>Показывать</th>
                                </tr>
                                <tr>
                                    <td>Аватар</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldAvatarShow) {?>checked<?php }?> name="ProfileFieldAvatarShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="checkbox" checked disabled/></td>
                                </tr>
                                <tr>
                                    <td>Пароль</td>
                                    <td><input type="checkbox" checked disabled/></td>
                                </tr>
                                <tr>
                                    <td>Ник</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldNickShow) {?>checked<?php }?> name="ProfileFieldNickShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Телефон</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldPhoneShow) {?>checked<?php }?> name="ProfileFieldPhoneShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Skype</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldSkypeShow) {?>checked<?php }?> name="ProfileFieldSkypeShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>ICQ</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldICQShow) {?>checked<?php }?> name="ProfileFieldICQShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Сайт</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldSiteShow) {?>checked<?php }?> name="ProfileFieldSiteShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Фамилия</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldFirstNameShow) {?>checked<?php }?> name="ProfileFieldFirstNameShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldNameShow) {?>checked<?php }?> name="ProfileFieldNameShow" type="checkbox"/></td>
                                 </tr>
                                <tr>
                                    <td>Отчество</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldFatherNameShow) {?>checked<?php }?> name="ProfileFieldFatherNameShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Дата рождения</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldBirthdayShow) {?>checked<?php }?> name="ProfileFieldBirthdayShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Страна</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldCountryShow) {?>checked<?php }?> name="ProfileFieldCountryShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Регион</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldRegionShow) {?>checked<?php }?> name="ProfileFieldRegionShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Город</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldCityShow) {?>checked<?php }?> name="ProfileFieldCityShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>WMR-кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldWMRShow) {?>checked<?php }?> name="ProfileFieldWMRShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>WMZ-кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldWMZShow) {?>checked<?php }?> name="ProfileFieldWMZShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Яндекс кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldYaMoneyShow) {?>checked<?php }?> name="ProfileFieldYaMoneyShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Qiwi кошелек</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldQiwiShow) {?>checked<?php }?> name="ProfileFieldQiwiShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Банковская карта</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldCardShow) {?>checked<?php }?> name="ProfileFieldCardShow" type="checkbox"/></td>
                                </tr>
                                <tr>
                                    <td>Подпись</td>
                                    <td><input <?php if ($_smarty_tpl->tpl_vars['config']->value->ProfileFieldSignatureShow) {?>checked<?php }?> name="ProfileFieldSignatureShow" type="checkbox"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" name="save-settings" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>
        </div>
    </div>
</form><?php }} ?>
