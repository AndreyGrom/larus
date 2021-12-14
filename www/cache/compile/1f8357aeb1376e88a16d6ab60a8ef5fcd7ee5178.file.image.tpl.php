<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-14 16:24:08
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180886048461b89af819cb54-97301484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8357aeb1376e88a16d6ab60a8ef5fcd7ee5178' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\image.tpl',
      1 => 1626992978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180886048461b89af819cb54-97301484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upload_images_dir' => 0,
    'image' => 0,
    'new_image' => 0,
    'skin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61b89af81a4854_33231902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b89af81a4854_33231902')) {function content_61b89af81a4854_33231902($_smarty_tpl) {?><li>
    <a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['upload_images_dir']->value;?>
shop/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['new_image']->value;?>
" alt=""/></a>
    <p><a class="del-image" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Удалить</a></p>
    <a class="skin" <?php if ($_smarty_tpl->tpl_vars['skin']->value==$_smarty_tpl->tpl_vars['image']->value) {?>style="display: none" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Главная</a>
</li><?php }} ?>
