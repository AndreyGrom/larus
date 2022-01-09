<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-23 16:08:04
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\find\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101852008561c3298a76b872-97175062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c5d727185bd027fed915bd2db74a110b3d3454' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\find\\index.tpl',
      1 => 1640264876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101852008561c3298a76b872-97175062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61c3298a7b9a89_44001143',
  'variables' => 
  array (
    'items_blog' => 0,
    'theme_dir' => 0,
    'items_shop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c3298a7b9a89_44001143')) {function content_61c3298a7b9a89_44001143($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container blog-content find-items">
    <?php if ($_smarty_tpl->tpl_vars['items_blog']->value) {?>
        <h1 class="caption">Результы поиска в Блоге</h1>
        <div class="row">
            <div class="blog-items">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items_blog']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item" onclick="document.location.href = '/blog/<?php echo $_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
'">
                            <div class="blog-item-title">
                                <?php echo $_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>

                            </div>
                            <div class="blog-item-img">
                                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">
                                    <img class="img-responsive" src="/upload/images/blog/<?php if ($_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {
echo $_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];
} else { ?>Z3i5b3DSYHEiDYKNST7k.jpg<?php }?>" alt="">
                                </a>

                                <div class="blog-item-arrow-rect"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/rect-arrow-left.png" alt=""></div>
                            </div>
                            <div class="blog-item-desc">
                                <?php echo $_smarty_tpl->tpl_vars['items_blog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SHORT_CONTENT'];?>

                            </div>
                        </div>
                    </div>
                <?php endfor; endif; ?>
                <div class="clearfix"></div>
    
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['items_shop']->value) {?>
        <h1 class="caption">Результы поиска в Продукции</h1>
        <div class="row">
            <div class="blog-items">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items_shop']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item" onclick="document.location.href = '/shop/<?php echo $_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
'">
                            <div class="blog-item-title">
                                <?php echo $_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>

                            </div>
                            <div class="blog-item-img">
                                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">
                                    <img class="img-responsive" src="/upload/images/shop/<?php if ($_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {
echo $_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];
} else { ?>Z3i5b3DSYHEiDYKNST7k.jpg<?php }?>" alt="">
                                </a>

                                <div class="blog-item-arrow-rect"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/rect-arrow-left.png" alt=""></div>
                            </div>
                            <div class="blog-item-desc">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['items_shop']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CONTENT'],200);?>

                            </div>
                        </div>
                    </div>
                <?php endfor; endif; ?>
                <div class="clearfix"></div>
                
            </div>
        </div>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['items_blog']->value&&!$_smarty_tpl->tpl_vars['items_shop']->value) {?>
        <p style="color:#fff; margin-top: 40px;">Ваш поиск не дал результатов. Попробуйте изменить запрос</p>
    <?php }?>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
