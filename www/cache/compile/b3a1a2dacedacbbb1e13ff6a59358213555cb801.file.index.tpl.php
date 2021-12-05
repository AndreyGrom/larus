<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-05 12:24:07
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\blog\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1261414704617ac293e78122-63633471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a1a2dacedacbbb1e13ff6a59358213555cb801' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\blog\\index.tpl',
      1 => 1638696243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1261414704617ac293e78122-63633471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac293eca1b8_94632513',
  'variables' => 
  array (
    'theme_dir' => 0,
    'categories' => 0,
    'cats' => 0,
    'items' => 0,
    'url_plus' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac293eca1b8_94632513')) {function content_617ac293eca1b8_94632513($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="blog-top">
    <img id="show-filter"  src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/eq.png" alt="" class="pull-left" style="margin-left: 20px;s">
    <div class="container">
        <form method="get" id="filter-form" class="form-inline tags-form-top">

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
            <div class="checkbox">
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
"">    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>

                </label>
            </div>
            <?php endfor; endif; ?>
            <button name="filter-form" type="submit" class="btn btn-default">Применить</button>
            <img id="close-filter" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/close-filter.png" alt="" class="pull-right">
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
            $("#close-filter, #show-filter").click(function () {
                if ($(".blog-top").hasClass("hide-filter")){
                    $(".blog-top").removeClass("hide-filter");
                } else {
                    $(".blog-top").addClass("hide-filter");
                }
            });
        <?php echo '</script'; ?>
>
    </div>
</div>

<div class="container blog-content">
    <div class="row">
        <div class="blog-items">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <div class="blog-item" onclick="document.location.href = '/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];
echo $_smarty_tpl->tpl_vars['url_plus']->value;?>
'">
                        <div class="blog-item-title">
                            <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>

                        </div>
                        <div class="blog-item-img">
                            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];
echo $_smarty_tpl->tpl_vars['url_plus']->value;?>
">
                                <img class="img-responsive" src="/upload/images/blog/<?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];
} else { ?>Z3i5b3DSYHEiDYKNST7k.jpg<?php }?>" alt="">
                            </a>
                            <div class="blog-item-date"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_PUBL'];?>
</div>
                            <div class="blog-item-arrow-rect"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/rect-arrow-left.png" alt=""></div>
                        </div>
                        <div class="blog-item-desc">
                            <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SHORT_CONTENT'];?>

                        </div>
                    </div>
                </div>
            <?php endfor; endif; ?>
            <div class="clearfix"></div>
            <div class="col-sm-12 text-right"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
