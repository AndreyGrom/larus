<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:09
         compiled from "W:\domains\provoda\www\themes\default\tpl\catalog\list\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97983593260fc24a5b55209-33653422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29736d48863b1599413947e1798d55b2de3c661f' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\catalog\\list\\default.tpl',
      1 => 1626993776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97983593260fc24a5b55209-33653422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24a5baef97_31343041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24a5baef97_31343041')) {function content_60fc24a5baef97_31343041($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
    <div class="container catalog-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="catalog-fancy">
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
                        <br/>

                        <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</h4>


                        <div class="row">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <div class="col-sm-4">
                                    <div class="catalog-item">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="/catalog/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
">
                                                    <img class="img-responsive" src="/upload/images/catalog/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['IMAGE'];?>
" alt=""/>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a class="caption-2" href="/catalog/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['TITLE'];?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; endif; ?>
                        </div>
                    <?php endfor; endif; ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
    </div>
</section>
<?php echo '<script'; ?>
>

    $(".catalog-fancy a.fancy").fancybox({
        padding : 0,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
