<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:26
         compiled from "W:\domains\provoda\www\themes\default\tpl\blog\list\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133657140960fc24b6805604-66939774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c4891ce72173d87e2539d0454e4f7882d5a81d' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\blog\\list\\default.tpl',
      1 => 1626993775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133657140960fc24b6805604-66939774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24b6863213_92005515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24b6863213_92005515')) {function content_60fc24b6863213_92005515($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                   
                       
                        <div class="row">
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
                                <div class="col-sm-4">
                                    <div class="blog-item">
                                        <div class="blog-item-content">
                                            <h4><a href="/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></h4>
                                            <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {?>
                                                <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">
                                                    <img src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" style="width: 100%"/>
                                                </a>
                                            <?php }?>



                                            <div><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SHORT_CONTENT'];?>
</div>
                                        </div>

                                        <div class="blog-item-footer text-right">
                                            <a class="btn btn-primary" href="/blog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">Читать далее</a>
                                        </div>
                                    </div>
                                </div>
                            <?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next'] % 3)) {?>
                                <div class="clearfix"></div>
                            <?php }?>
                        <?php endfor; endif; ?>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-sm-12"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
                    </div>
                </div>

            </div>

        </div>
</section>
<?php echo '<script'; ?>
>
    $(function(){
        var equal_height = 0;
        $(".row div .blog-item-content").each(function(){
            if ($(this).height() > equal_height) { equal_height = $(this).height(); }
        });
        $(".row div .blog-item-content").height(equal_height);
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
