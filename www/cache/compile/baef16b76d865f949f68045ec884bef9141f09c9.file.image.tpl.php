<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-02-01 16:27:41
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123336803061f921e70154b6-23818950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baef16b76d865f949f68045ec884bef9141f09c9' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\image.tpl',
      1 => 1643722058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123336803061f921e70154b6-23818950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f921e701d1b3_08737495',
  'variables' => 
  array (
    'image' => 0,
    'id' => 0,
    'skin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f921e701d1b3_08737495')) {function content_61f921e701d1b3_08737495($_smarty_tpl) {?><li>
    <a class="fancybox" href="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><img style="width: 200px;" src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt=""/></a>
    <p>
        <a data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="remove-image-item" href="#">Удалить</a>
    </p>
    <p >
        <a <?php if ($_smarty_tpl->tpl_vars['skin']->value==$_smarty_tpl->tpl_vars['image']->value) {?>style="display: none" <?php }?> data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="skin-image-item"  href="#">Сделать главной</a>
    </p>

</li><?php }} ?>
