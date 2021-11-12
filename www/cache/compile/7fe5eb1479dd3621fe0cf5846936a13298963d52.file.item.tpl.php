<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-12 14:24:56
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\blog\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:805390006618e4f089fd072-96330183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe5eb1479dd3621fe0cf5846936a13298963d52' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\blog\\item.tpl',
      1 => 1635425744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '805390006618e4f089fd072-96330183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parents' => 0,
    'theme_dir' => 0,
    'next' => 0,
    'prev' => 0,
    'item' => 0,
    'items' => 0,
    'comments_form' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618e4f08a20300_80430275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618e4f08a20300_80430275')) {function content_618e4f08a20300_80430275($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container blog-content">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 blog-content-left">
            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['parents']->value[0]['ALIAS'];?>
">Показать все новости  <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/blog-all.png" class="pull-right" alt=""></a>
            <?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['next']->value['ALIAS'];?>
">Следующая статья <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-right.png" class="pull-right" alt=""></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['prev']->value['ALIAS'];?>
">Предыдущая статья <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-left.png" class="pull-right" alt=""></a>
            <?php }?>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-content-right">
                <div class="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['DATE_PUBL'];?>
</div>
                <h1 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</h1>
                <div class="blog-content-img">
                    <img class="img-responsive" src="/upload/images/blog/<?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];
} else { ?>Z3i5b3DSYHEiDYKNST7k.jpg<?php }?>" alt="">
                </div>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['CONTENT'];?>

                <h3>Понравился материал? Поделитесь:</h3>

                    <div class="social-share">
                        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/icon_vk.png" alt=""></a>
                        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/icon_fb.png" alt=""></a>
                        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/icon_ok.png" alt=""></a>
                    </div>
                <br>
                <?php if (isset($_smarty_tpl->tpl_vars['comments_form']->value)) {?>
                    <div class="col-md-12">
                        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

                    </div>

                        <article class="panel panel-primary comment-form">
                            <div class="panel-heading">
                                <h2 class="panel-title"><i class="fa fa-pencil"></i> Добавьте свой комментарий!</h2>
                            </div>
                            <div class="panel-body">
                                <?php echo $_smarty_tpl->tpl_vars['comments_form']->value;?>

                                <div class="clearfix"></div>
                            </div>
                        </article>


                <?php }?>
            </div>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
