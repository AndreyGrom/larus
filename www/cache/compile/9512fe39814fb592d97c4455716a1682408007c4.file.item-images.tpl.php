<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 17:42:49
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item-images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85533239561d30b699fc601-38346789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9512fe39814fb592d97c4455716a1682408007c4' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\item-images.tpl',
      1 => 1641220953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85533239561d30b699fc601-38346789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'item' => 0,
    'new_images' => 0,
    'images' => 0,
    'html_controllers_dir' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61d30b69a0c018_86760300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d30b69a0c018_86760300')) {function content_61d30b69a0c018_86760300($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <div class="col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['new']->value) {?>
                <span class="form-control">Сначала сохраните материал</span>
            <?php } else { ?>
                <div class="alert alert-info">
                    <p>Код вызова: <input onclick="this.select()" class="form-control" style="display:inline-block;width: 270px" type="text" readonly value='[widjet name="blog_images" params="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"]'/></p>
                </div>
                <div id="upload" class="btn btn-success btn-large"><span>Выбрать файл<span></div>
                <span id="status"></span>
            <?php }?>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
            <div class="col-sm-12">
                <div id="item-images">
                    <ul class="image-list clearfix">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['new_images']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <?php echo $_smarty_tpl->getSubTemplate ("image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']],'new_image'=>$_smarty_tpl->tpl_vars['new_images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]), 0);?>

                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(function(){
                    var btnUpload=$('#upload');
                    var status=$('#status');
                    new AjaxUpload(btnUpload, {
                        action: '<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
blog/upload.php?id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
',
                        name: 'image',
                        onSubmit: function(file, ext){
                            if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
                                status.text('Поддерживаемые форматы JPG, PNG или GIF');
                                return false;
                            }
                            status.text('Загрузка...');
                        },
                        onComplete: function(file, response){
                            status.text('');
                            if(response !==""){
                                $(".image-list").append(response);
                            } else{
                                $('<li></li>').appendTo('#files').text(file).addClass('error');
                            }
                        }
                    });
                    jQuery('body').on('click', 'a.skin', function(e) {
                        e.preventDefault();
                        var el = $(this);
                        var skin = el.attr("href");
                        $.ajax({
                            type: "POST",
                            url: "<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
blog/upload.php",
                            data: "id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
&skin="+skin,
                            success: function(msg){
                                $("a.skin").show();
                                el.hide();
                            }
                        });
                    });
                    jQuery('body').on('click', 'a.del-image', function(e) {
                        e.preventDefault();
                        var el = $(this);
                        var image = el.attr("href");
                        $.ajax({
                            type: "POST",
                            url: "<?php echo $_smarty_tpl->tpl_vars['html_controllers_dir']->value;?>
blog/upload.php",
                            data: "id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
&image="+image,
                            success: function(msg){
                                el.parent().parent().remove();
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
