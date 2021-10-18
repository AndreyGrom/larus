<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:34
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\item-files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677317656616d52e260f1e9-13614812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4eccd991d15e04cd4ba9277798482ed0af15962' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\item-files.tpl',
      1 => 1626993041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677317656616d52e260f1e9-13614812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'files' => 0,
    'item_file1_name' => 0,
    'item_file1' => 0,
    'item_file2_name' => 0,
    'item_file2' => 0,
    'item_file3_name' => 0,
    'item_file3' => 0,
    'html_controllers_dir' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d52e2622a61_57934494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52e2622a61_57934494')) {function content_616d52e2622a61_57934494($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <div class="col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['new']->value) {?>
                <span class="form-control">Сначала сохраните материал</span>
            <?php } else { ?>

            <?php }?>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
            <div class="col-sm-12">
                <h3>Файлы на сайте</h3>
                <div id="upload_file" class="btn btn-success btn-large"><span>Выбрать файл с компьютера<span></div>
                <br/>
                <br/>
                <div style="display:none;" id="upl_group">
                    <label class="control-label">Отображаемое имя:</label>
                    <input class="form-control" type="text" id="upl_name" style="/*display: none;*/"/>
                    <br/>
                    <div class="btn btn-success btn-large" id="upl">Отправить</div>
                    <br/>
                </div>
                <span id="status_file"></span>
                <div id="item-files">
                    <ul class="file-list clearfix">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <?php echo $_smarty_tpl->getSubTemplate ("file.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('file_item'=>$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]), 0);?>

                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <h3>Внешние файлы</h3>
                <div class="form-group">
                    <div class="col-sm-12"><h4>Файл 1:</h4></div>
                    <div class="col-sm-1 control-label">Имя:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file1_name']->value;?>
" name="file1_name" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1 control-label">URL:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file1']->value;?>
" name="file1" type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <hr/>
                </div>
                <div class="form-group">
                    <div class="col-sm-12"><h4>Файл 2:</h4></div>
                    <div class="col-sm-1 control-label">Имя:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file2_name']->value;?>
" name="file2_name" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1 control-label">URL:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file2']->value;?>
" name="file2" type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <hr/>
                </div>
                <div class="form-group">
                    <div class="col-sm-12"><h4>Файл 3:</h4></div>
                    <div class="col-sm-1 control-label">Имя:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file3_name']->value;?>
" name="file3_name" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1 control-label">URL:</div>
                    <div class="col-sm-11">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['item_file3']->value;?>
" name="file3" type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <hr/>
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(function(){
                    var btnUpload=$('#upload_file');
                    var status=$('#status_file');
                    var au = new AjaxUpload(btnUpload, {
                        action: '<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
news/upload.php?id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
',
                        name: 'file',
                        autoSubmit: false,
                        onSubmit: function(file, ext){
                            status.text('Загрузка...');
                        },
                        onComplete: function(file, response){
                            status.text('');
                            $("#upl_group").hide();
                            //alert(response);
                            if(response !==""){
                                $(".file-list").append(response);
                            } else{
                                $('<li></li>').appendTo('#files').text(file).addClass('error');
                            }
                        },
                        onChange: function(file, response){
                            $("#upl_name").val(file);
                            $("#upl_group").show();
                        }
                    });
                    $("#upl").click(function(){
                        var d_name = $("#upl_name").val();
                        au._settings.data = {DisplayName:d_name};
                        au.submit();
                    });
                    jQuery('body').on('click', 'a.del-file', function(e) {
                        e.preventDefault();
                        var el = $(this);
                        var file = el.attr("href");
                        $.ajax({
                            type: "POST",
                            url: "<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
news/upload.php",
                            data: "id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
&file="+file,
                            success: function(msg){
                                el.parent().remove();
                            }
                        });
                    });
                });
            <?php echo '</script'; ?>
>
        <?php }?>
    </div>
</div>
<?php }} ?>
