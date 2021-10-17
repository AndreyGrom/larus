<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:32:59
         compiled from "W:\domains\provoda\www\themes\default\tpl\pages\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86133859260fc249bf18e70-33065147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9213219d897b8e3ce70a811597ac97294ce4a2b6' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\pages\\default.tpl',
      1 => 1626993777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86133859260fc249bf18e70-33065147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_content' => 0,
    'alias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc249c020e08_15524865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc249c020e08_15524865')) {function content_60fc249c020e08_15524865($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<section id="content-page">
    <div class="container">


        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['alias']->value=='about-as') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("../common/collage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            </div>
        </div>

        </div>
    </section>
<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
