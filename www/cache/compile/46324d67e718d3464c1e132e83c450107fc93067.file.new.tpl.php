<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:21:36
         compiled from "D:\data\domains\provoda\www\system\controllers\pages\tpl\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1921396012616d4ab026aad2-37857140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46324d67e718d3464c1e132e83c450107fc93067' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\pages\\tpl\\new.tpl',
      1 => 1626993017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921396012616d4ab026aad2-37857140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'module_alias' => 0,
    'new' => 0,
    'site_url' => 0,
    'pages' => 0,
    'page_id' => 0,
    'templates' => 0,
    'html_plugins_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d4ab0295a64_76523353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d4ab0295a64_76523353')) {function content_616d4ab0295a64_76523353($_smarty_tpl) {?><form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                <?php if (!$_smarty_tpl->tpl_vars['page']->value) {?>Создание новой страницы<?php } else { ?>Редактирование страницы<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
                    <span class="pull-right text-lowercase">
                                            <button class="btn btn-success btn-xs" type="submit">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                Сохранить
                                            </button>
                            <a href="?c=<?php echo $_smarty_tpl->tpl_vars['module_alias']->value;?>
&act=new" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="Создать новую страницу"><span class="glyphicon glyphicon-copy"></span></a>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['ID']!=1) {?>
                                <a href="?c=<?php echo $_smarty_tpl->tpl_vars['module_alias']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['ID'];?>
" class="btn btn-danger btn-xs confirm" data-toggle="tooltip" title="" data-original-title="Удалить страницу"><span class="glyphicon glyphicon-remove"></span></a>
                            <?php }?>
                    </span>
                <?php }?>
            </h3>
        </div>
        <div class="panel-body">
            <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                <span class="col-sm-3 text-right">URL страницы</span>
                <span class="col-sm-9"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['page']->value['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['page']->value['ALIAS'];?>
</a></span>
                <hr/>
            <?php }?>
            <div class="form-horizontal" role="form">

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Название:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['page']->value['TITLE'];?>
" name="title" id="title" type="text" class="form-control" placeholder="Введите название страницы">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="col-sm-3 control-label">Алиас:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['ALIAS'];?>
" name="alias" id="alias" type="text" class="form-control" placeholder="Только символы a-z, A-Z, 0-9, -_ " />
                        <p class="help-block">Только символы a-z, A-Z, 0-9, -_ <br/>
                            Можно оставить пустым. Заполнится автоматически</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="parent" class="col-sm-3 control-label">Уровень:</label>
                    <div class="col-sm-9">
                        <select <?php if ($_smarty_tpl->tpl_vars['page']->value['ID']==1) {?>disabled<?php }?> name="parent" id="parent" class="form-control">
                            <option value="0">Верхний уровень</option>
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
                                <?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']!==$_smarty_tpl->tpl_vars['page_id']->value) {?>
                                <option <?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']==$_smarty_tpl->tpl_vars['page']->value['PARENT']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</option>
                                <?php }?>
                            <?php endfor; endif; ?>
                        </select>
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
                                <option <?php if ($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['page']->value['TEMPLATE']) {?>selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publ" class="col-sm-3 control-label">Публикация:</label>
                    <div class="col-sm-9">
                        <select name="publ" id="publ" class="form-control">
                            <option <?php if ($_smarty_tpl->tpl_vars['page']->value['PUBL']=='1') {?>selected<?php }?> value="1">Опубликовано</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['page']->value['PUBL']=='0') {?>selected<?php }?> value="0">Черновик</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="content" class="col-sm-12">Содержимое:</label>
                    <div class="col-sm-12">

                        <textarea class="textarea-edit" name="content" id="content" style="width:100%;height:400px;"><?php echo $_smarty_tpl->tpl_vars['page']->value['CONTENT'];?>
</textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-title:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['META_TITLE'];?>
" name="meta_title" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-description:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['META_DESC'];?>
" name="meta_description" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-keywords:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['META_KEYWORDS'];?>
" name="meta_keywords" type="text" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>

        </div>
    </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
init_mce.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
/*        $.cleditor.set_rfm('/filemanager');
        var  controls=
                "bold italic underline strikethrough subscript superscript | font size " +
                        "style | color highlight removeformat | bullets numbering | outdent " +
                        "indent | alignleft center alignright justify | " +
                        "rule image link unlink | source";
        $("#content").cleditor({'controls':controls});*/
    });
    

    var alias_page_new = false;
    if ($("#alias").val()==''){
        alias_page_new = true;
    }
    $("#title").change(function(){
        if (alias_page_new){
            var str = $(this).val();
            var str2 = SetTranslitRuToLat(str);
            $("#alias").val(str2);
        }
    });
    $("#page-form").submit(function(){
        var alias_page = $(this).find("input[name='alias']").val();
        if (alias_page != ''){
        var pattern = /^[a-z0-9_-]+$/i;
            if (!pattern.test(alias_page)){
                alert('Алиас содержит недопустимые символы');
                return false;
            }
        }
    });
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите удалить страницу?")){
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
