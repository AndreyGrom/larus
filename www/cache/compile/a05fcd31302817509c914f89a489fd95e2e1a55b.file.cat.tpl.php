<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 12:51:43
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145521518616d43afaab636-40689421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05fcd31302817509c914f89a489fd95e2e1a55b' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\cat.tpl',
      1 => 1626993006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145521518616d43afaab636-40689421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'category_id' => 0,
    'category_title' => 0,
    'category_desc' => 0,
    'category_desc2' => 0,
    'category_alias' => 0,
    'categories' => 0,
    'category_parent' => 0,
    'category_image' => 0,
    'category_new_image' => 0,
    'templates' => 0,
    'category_template' => 0,
    'category_publ' => 0,
    'category_meta_desc' => 0,
    'category_meta_keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d43afba17f2_42532501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d43afba17f2_42532501')) {function content_616d43afba17f2_42532501($_smarty_tpl) {?><form id="cat-form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                <?php if ($_smarty_tpl->tpl_vars['new']->value) {?>Создание новой категории<?php } else { ?>Редактирование категории<?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                    <span class="pull-right text-lowercase">
                        <a href="?c=blog&act=new_c" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="Создать новую категорию"><span class="glyphicon glyphicon-copy"></span></a>
                        <a href="?c=blog&act=del&cid=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" class="btn btn-danger btn-xs confirm" data-toggle="tooltip" title="" data-original-title="Удалить категорию"><span class="glyphicon glyphicon-remove"></span></a>
                    </span>
                <?php }?>
            </h3>
        </div>
        <div class="panel-body">

            <!-- Форма для редактора -->
            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="c_title" class="col-sm-3 control-label">Название:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['category_title']->value;?>
" name="c_title" id="c_title" type="text" class="form-control" placeholder="Введите название категории">
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_desc" class="col-sm-3 control-label">Описание верхнее:</label>
                    <div class="col-sm-9">
                        <textarea name="c_desc" id="c_desc" cols="30" rows="5" class="form-control textarea-edit"><?php echo $_smarty_tpl->tpl_vars['category_desc']->value;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="c_desc" class="col-sm-3 control-label">Описание нижнее:</label>
                    <div class="col-sm-9">
                        <textarea name="c_desc2" id="c_desc2" cols="30" rows="5" class="form-control textarea-edit"><?php echo $_smarty_tpl->tpl_vars['category_desc2']->value;?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="col-sm-3 control-label">Алиас:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['category_alias']->value;?>
" name="alias" id="alias" type="text" class="form-control" placeholder="Только символы a-z, A-Z, 0-9, -_ " />
                        <p class="help-block">Только символы a-z, A-Z, 0-9, -_ <br/>
                            Можно оставить пустым. Заполнится автоматически</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="parent" class="col-sm-3 control-label">Уровень:</label>
                    <div class="col-sm-9">
                        <select name="parent" id="parent" class="form-control">
                            <option value="0">Верхний уровень</option>
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
                                <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']!==$_smarty_tpl->tpl_vars['category_id']->value) {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']==$_smarty_tpl->tpl_vars['category_parent']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</option>
                                <?php }?>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="template" class="col-sm-3 control-label">Изображение:</label>
                    <div class="col-sm-4">
                        <input name="image" id="image" type="file" class="" />
                        <input type="hidden" name="old_image" value="<?php echo $_smarty_tpl->tpl_vars['category_image']->value;?>
"/>
                        <p class="help-block">.jpg, .jpeg, .png, .gif</p>
                    </div>
                    <div class="col-sm-3">
                        <?php if ($_smarty_tpl->tpl_vars['category_new_image']->value) {?>
                            <a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['category_image']->value;?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['category_new_image']->value;?>
" alt=""/>
                            </a>
                            <br/>
                            <label><input name="delete_image" type="checkbox"/> Удалить</label>
                        <?php }?>
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
                                <option <?php if ($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['category_template']->value) {?>selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publ" class="col-sm-3 control-label">Публикация:<?php echo $_smarty_tpl->tpl_vars['category_publ']->value;?>
</label>
                    <div class="col-sm-9">
                        <label><input type="radio" name="publ" id="publ" value="1" <?php if ($_smarty_tpl->tpl_vars['category_publ']->value==1||$_smarty_tpl->tpl_vars['new']->value) {?>checked="checked"<?php }?> /> Сразу</label>
                        <label><input <?php if (!$_smarty_tpl->tpl_vars['new']->value&&$_smarty_tpl->tpl_vars['category_publ']->value==0) {?>checked="checked"<?php }?> type="radio" name="publ" value="0" /> Позже</label>
                    </div>
                </div>
            </div>

            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-description:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['category_meta_desc']->value;?>
" name="meta_description" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-keywords:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['category_meta_keywords']->value;?>
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
 type="text/javascript" src="/inc/plagins/init_mce.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
/*    
    $(document).ready(function(){
        $.cleditor.set_rfm('/filemanager');
        var  controls=
                "bold italic underline strikethrough subscript superscript | font size " +
                        "style | color highlight removeformat | bullets numbering | outdent " +
                        "indent | alignleft center alignright justify | " +
                        "rule image link unlink | source";
        $("#c_desc").cleditor({'controls':controls});
        $("#c_desc2").cleditor({'controls':controls});
    });
    */

    var alias_page_new = false;
    if ($("#alias").val()==''){
        alias_page_new = true;
    }
    $("#c_title").change(function(){
        if (alias_page_new){
            var str = $(this).val();
            var str2 = SetTranslitRuToLat(str);
            $("#alias").val(str2);
        }
    });
    $("#cat-form").submit(function(){
        var alias_page = $(this).find("input[name='alias']").val();
        var pattern = /^[a-z0-9_-]+$/i;
        if (alias_page !='' && !pattern.test(alias_page)){
            alert('Алиас содержит недопустимые символы');
            return false;
        }
    });
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите это сделать??")){
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
