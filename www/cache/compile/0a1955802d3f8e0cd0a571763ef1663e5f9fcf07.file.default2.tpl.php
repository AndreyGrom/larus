<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:12
         compiled from "W:\domains\provoda\www\themes\default\tpl\catalog\list\default2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209574465360fc24a821ea18-36510915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1955802d3f8e0cd0a571763ef1663e5f9fcf07' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\catalog\\list\\default2.tpl',
      1 => 1626993777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209574465360fc24a821ea18-36510915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'items' => 0,
    'item' => 0,
    'desc' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24a827c621_35608450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24a827c621_35608450')) {function content_60fc24a827c621_35608450($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar">
                    <h4 class="caption-1"><a href="/catalog"><i class="fa fa fa-angle-double-left"></i> <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</a></h4>
                    <ul class="list-unstyled left-menu">
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
                            <li><a class="caption-2"  href="/catalog/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="catalog-item-box category-list catalog-fancy">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['IMAGES']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['IMAGES']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['IMAGES'][$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']]==$_smarty_tpl->tpl_vars['item']->value['SKIN']) {?>
                                    <img src="/upload/images/catalog/<?php echo $_smarty_tpl->tpl_vars['item']->value['IMAGES'][$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
" alt="" style="width: 100%"/>
                                <?php }?>
                            <?php endfor; endif; ?>
                        <?php }?>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

                    <?php }?>
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
