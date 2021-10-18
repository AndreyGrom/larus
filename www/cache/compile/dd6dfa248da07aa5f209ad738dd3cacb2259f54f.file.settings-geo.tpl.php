<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:54
         compiled from "D:\data\domains\provoda\www\system\controllers\settings\tpl\settings-geo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12929222616d2f1a278264-62415656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6dfa248da07aa5f209ad738dd3cacb2259f54f' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\settings\\tpl\\settings-geo.tpl',
      1 => 1626993046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12929222616d2f1a278264-62415656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countrys' => 0,
    'config' => 0,
    'regions' => 0,
    'city' => 0,
    'html_controllers_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f1a2a8fc3_20371433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f1a2a8fc3_20371433')) {function content_616d2f1a2a8fc3_20371433($_smarty_tpl) {?><div class="form-group">
    <label class="col-sm-3 control-label">Страна:</label>
    <div class="col-sm-9">
        <select class="form-control" id="SiteCountryID" name="SiteCountryID">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countrys']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option data-name="<?php echo $_smarty_tpl->tpl_vars['countrys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['COUNTRY_NAME'];?>
" <?php if ($_smarty_tpl->tpl_vars['countrys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['COUNTRY_ID']==$_smarty_tpl->tpl_vars['config']->value->SiteCountryID) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['countrys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['COUNTRY_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['countrys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['COUNTRY_NAME'];?>
</option>
            <?php endfor; endif; ?>
        </select>
        <input type="hidden" name="SiteCountry" id="SiteCountry" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteCountry;?>
"/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Регион:</label>
    <div class="col-sm-9">
        <select class="form-control" id="SiteRegionID" name="SiteRegionID">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['regions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option data-name="<?php echo $_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REGION_NAME'];?>
" <?php if ($_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REGION_ID']==$_smarty_tpl->tpl_vars['config']->value->SiteRegionID) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REGION_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REGION_NAME'];?>
</option>
            <?php endfor; endif; ?>
        </select>
        <input type="hidden" name="SiteRegion" id="SiteRegion" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteRegion;?>
"/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Город:</label>
    <div class="col-sm-9">
        <select class="form-control" id="SiteCityID" name="SiteCityID">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['city']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option data-name="<?php echo $_smarty_tpl->tpl_vars['city']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CITY_NAME'];?>
" <?php if ($_smarty_tpl->tpl_vars['city']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CITY_ID']==$_smarty_tpl->tpl_vars['config']->value->SiteCityID) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['city']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CITY_NAME'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CITY_NAME'];?>
</option>
            <?php endfor; endif; ?>
        </select>
        <input type="hidden" name="SiteCity" id="SiteCity" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteCity;?>
"/>
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Адрес:</label>
    <div class="col-sm-9">
        <textarea name="SiteAddress" id="SiteAddress" cols="30" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['config']->value->SiteAddress;?>
</textarea>
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Geocode:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteGeocode;?>
" name="SiteGeocode" id="SiteGeocode" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteEmail;?>
" name="SiteEmail" id="SiteEmail" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Телефон:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SitePhone;?>
" name="SitePhone" id="SitePhone" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Факс:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteFax;?>
" name="SiteFax" id="SiteFax" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Skype:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteSkype;?>
" name="SiteSkype" id="SiteSkype" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group">
    <label for="title" class="col-sm-3 control-label">ICQ:</label>
    <div class="col-sm-9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['config']->value->SiteIcq;?>
" name="SiteIcq" id="SiteIcq" type="text" class="form-control" placeholder="">
    </div>
</div>
<?php echo '<script'; ?>
>
    function getData(sel){
        var r_id = sel.val();
        var Name;
        sel.find('option').each(function(i){
            var option = $(this);
            if (option.val() == r_id){
                Name = option.attr("data-name");
                return false;
            }
        });
        return Name;
    }
    var SiteCountryID = $("#SiteCountryID");
    var SiteCountry = $("#SiteCountry");
    var SiteRegionID = $("#SiteRegionID");
    var SiteRegion = $("#SiteRegion");
    var SiteCityID = $("#SiteCityID");
    var SiteCity = $("#SiteCity");
    SiteCountryID.change(function(){
        SiteCountry.val(getData($(this)));
        SiteRegionID.html('<option>Загрузка</option>');
        $.ajax({
            type: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
settings/ajax.php',
            data: 'get_region='+$(this).val(),
            success: function(result){
                SiteRegionID.html(result);
                SiteRegionID.change();
            }
        });
    });
    SiteRegionID.change(function(){
        SiteRegion.val(getData($(this)));
        SiteCityID.html('<option>Загрузка</option>');
        $.ajax({
            type: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
settings/ajax.php',
            data: 'get_city='+$(this).val(),
            success: function(result){
                SiteCityID.html(result);
                SiteCityID.change();
            }
        });
    });
    SiteCityID.change(function(){
        SiteCity.val(getData($(this)));
    });
<?php echo '</script'; ?>
><?php }} ?>
