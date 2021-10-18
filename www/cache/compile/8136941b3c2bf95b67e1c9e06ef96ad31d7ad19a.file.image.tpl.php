<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:56:34
         compiled from "D:\data\domains\provoda\www\system\controllers\news\tpl\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231092025616d52e25bd153-58777635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8136941b3c2bf95b67e1c9e06ef96ad31d7ad19a' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\news\\tpl\\image.tpl',
      1 => 1626993043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231092025616d52e25bd153-58777635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'skin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d52e25c4e50_72961415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d52e25c4e50_72961415')) {function content_616d52e25c4e50_72961415($_smarty_tpl) {?><li>
    <a class="fancybox" href="/upload/images/news/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><img style="width: 200px;" src="/upload/images/news/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt=""/></a>
    <p><a class="del-image" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Удалить</a></p>
    <a class="skin" <?php if ($_smarty_tpl->tpl_vars['skin']->value==$_smarty_tpl->tpl_vars['image']->value) {?>style="display: none" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Главная</a>
</li><?php }} ?>
