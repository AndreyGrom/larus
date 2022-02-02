<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 11:28:57
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\partners\single\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115847941361e606b0481c51-35907271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba398606598fb6fa66f3add8709f67d02921772d' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\partners\\single\\default.tpl',
      1 => 1642508558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115847941361e606b0481c51-35907271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61e606b04df861_75243740',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e606b04df861_75243740')) {function content_61e606b04df861_75243740($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container blog-content">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 blog-content-left">
            [widjet name="mail_form" params="11"]
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-content-right">
                
                <p>&nbsp;</p>
                <h1 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</h1>
                <div class="blog-content-img">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['SKIN']) {?>
                    <img class="img-responsive" src="/upload/images/partners/<?php echo $_smarty_tpl->tpl_vars['item']->value['SKIN'];?>
" alt="">
                    <?php }?>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['CONTENT'];?>


            </div>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
