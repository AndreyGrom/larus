<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-02-01 16:26:22
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\blog-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87188773661f794888ef418-55276998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '517ce9f0144c804aec474e3fdc009124c31e7e33' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\blog-item.tpl',
      1 => 1643721977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87188773661f794888ef418-55276998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f794889608a6_60035293',
  'variables' => 
  array (
    'html_plugins_dir' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f794889608a6_60035293')) {function content_61f794889608a6_60035293($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h2>Добавление/редактирование записи в блоге</h2>
                <p>&nbsp;</p>

                <form method="post">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-common" data-toggle="tab">Общие</a></li>
                            <li><a href="#tab-content" data-toggle="tab">Содержимое</a></li>
                            <li><a href="#tab-images" data-toggle="tab">Изображения</a></li>
                            <li><a href="#tab-seo" data-toggle="tab">SEO</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-common" class="tab-pane fade in active">
                                <h3>Общие данные</h3>
                                <?php echo $_smarty_tpl->getSubTemplate ("./item-common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                            <div id="tab-content" class="tab-pane fade">
                                <h3></h3>
                                <?php echo $_smarty_tpl->getSubTemplate ("./item-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                            <div id="tab-images" class="tab-pane fade">
                                <h3></h3>
                                <?php echo $_smarty_tpl->getSubTemplate ("./item-images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                            <div id="tab-seo" class="tab-pane fade">
                                <h3></h3>
                                <?php echo $_smarty_tpl->getSubTemplate ("./item-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button name="save-blog" type="submit" class="btn btn-success "><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>

                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <?php echo $_smarty_tpl->getSubTemplate ("../../common/profile-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
init_mce.js"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['blog']->value)) {?>
<?php echo '<script'; ?>
>
    $('#upload-images').upload({
        id: <?php echo $_smarty_tpl->tpl_vars['blog']->value['ID'];?>
,
    });
    $(function(){
        $('.image-list').on('click', '.remove-image-item', function(e) {
            e.preventDefault();
            RemoveImage($(this).attr('data-name'), $(this).attr('data-id'), $(this).closest('li'));
        });
        $('.image-list').on('click', '.skin-image-item', function(e) {
            e.preventDefault();
            SkinImage($(this).attr('data-name'), $(this).attr('data-id'), $(".skin-image-item"), $(this));
        });
    });
<?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
