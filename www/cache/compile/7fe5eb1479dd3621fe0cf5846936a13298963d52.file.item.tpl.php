<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-18 04:32:26
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\blog\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:805390006618e4f089fd072-96330183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe5eb1479dd3621fe0cf5846936a13298963d52' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\blog\\item.tpl',
      1 => 1642465309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '805390006618e4f089fd072-96330183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618e4f08a20300_80430275',
  'variables' => 
  array (
    'parents' => 0,
    'theme_dir' => 0,
    'next' => 0,
    'prev' => 0,
    'categories' => 0,
    'cats' => 0,
    'item' => 0,
    'comments_form' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
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
            <div class="filter-box sv-filter-box">
                <img id="sv-filter-box" class="pull-right" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/eq.png" alt="">
                <div class="clearbox"></div>
                <form method="post" id="filter-form">
                    <ul class="">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <li>
                                <input class="custom-checkbox" id="filter_<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"
                                    <?php if (!$_smarty_tpl->tpl_vars['cats']->value) {?>
                                        checked
                                    <?php } else { ?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cats']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                            <?php if ($_smarty_tpl->tpl_vars['cats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]==$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']) {?>checked<?php }?>
                                        <?php endfor; endif; ?>
                                    <?php }?>
                                    name="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" type="checkbox">
                            <label for="filter_<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</label>
                            </li>
                        <?php endfor; endif; ?>
                    </ul>
                    <button name="filter-form" type="submit" class="btn btn-default">Применить</button>
                </form>
                <?php echo '<script'; ?>
>
                    $("#filter-form").submit(function(e){
                        e.preventDefault();
                        var url = '/blog/cats='
                        $('#filter-form input:checkbox:checked').each(function(){
                            url += $(this).val() + ",";
                        });
                        document.location.href = url;
                        return false;
                    });
                <?php echo '</script'; ?>
>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-content-right">
                <div class="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['DATE_PUBL'];?>
</div>
                <h1 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</h1>
                <div class="blog-content-img">
                    <img class="img-responsive" src="/upload/images/blog/<?php if ($_smarty_tpl->tpl_vars['item']->value['SKIN']) {
echo $_smarty_tpl->tpl_vars['item']->value['SKIN'];
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
                        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

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

<?php echo '<script'; ?>
>
    $("#sv-filter-box").click(function(){
        var p = $(this).parent();
        if (p.hasClass("sv-filter-box")){
            p.removeClass("sv-filter-box");
        } else{
            p.addClass("sv-filter-box");
        }
    });
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
