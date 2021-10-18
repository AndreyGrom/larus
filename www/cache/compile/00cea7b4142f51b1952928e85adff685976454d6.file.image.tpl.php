<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:57:27
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1407157652616d5317310633-79459424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00cea7b4142f51b1952928e85adff685976454d6' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\image.tpl',
      1 => 1626993007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407157652616d5317310633-79459424',
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
  'unifunc' => 'content_616d531734ee48_53228330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d531734ee48_53228330')) {function content_616d531734ee48_53228330($_smarty_tpl) {?><li>
    <a class="fancybox" href="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><img style="width: 200px;" src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt=""/></a>
    <p><a class="del-image" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Удалить</a></p>
    <a class="skin" <?php if ($_smarty_tpl->tpl_vars['skin']->value==$_smarty_tpl->tpl_vars['image']->value) {?>style="display: none" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Главная</a>
</li><?php }} ?>
