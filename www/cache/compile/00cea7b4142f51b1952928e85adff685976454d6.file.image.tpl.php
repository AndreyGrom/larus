<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 18:33:58
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64327771061d31766752d73-49734657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00cea7b4142f51b1952928e85adff685976454d6' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\image.tpl',
      1 => 1640272056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64327771061d31766752d73-49734657',
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
  'unifunc' => 'content_61d31766799288_76986357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d31766799288_76986357')) {function content_61d31766799288_76986357($_smarty_tpl) {?><li>
    <a class="fancybox" href="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><img style="width: 200px;" src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt=""/></a>
    <p><a class="del-image" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Удалить</a></p>
    <a class="skin" <?php if ($_smarty_tpl->tpl_vars['skin']->value==$_smarty_tpl->tpl_vars['image']->value) {?>style="display: none" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">Сделать главной</a>
    <div class="clearfix"></div>
</li><?php }} ?>
