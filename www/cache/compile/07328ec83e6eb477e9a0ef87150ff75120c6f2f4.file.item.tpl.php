<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-15 15:41:36
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\shop\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186420940961b9cf266c8cc1-74940261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07328ec83e6eb477e9a0ef87150ff75120c6f2f4' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\shop\\item.tpl',
      1 => 1639572094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186420940961b9cf266c8cc1-74940261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61b9cf2675d3e2_82274476',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'sub' => 0,
    'items' => 0,
    'theme_dir' => 0,
    'item' => 0,
    'len' => 0,
    'raz' => 0,
    'ITEM' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b9cf2675d3e2_82274476')) {function content_61b9cf2675d3e2_82274476($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container shop-content">
    <div class="category-row category-row-open category-row-open-2">
        <div class="row">
            <div class="col-sm-2" style="background: #f4eee9;">
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
                        <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ID']==$_smarty_tpl->tpl_vars['category']->value['ID']) {?>
                            <div class="category-name">
                                <p><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB']) {?>
                                    <ul>
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
                                            <?php if (isset($_smarty_tpl->tpl_vars['sub'])) {$_smarty_tpl->tpl_vars['sub'] = clone $_smarty_tpl->tpl_vars['sub'];
$_smarty_tpl->tpl_vars['sub']->value = false; $_smarty_tpl->tpl_vars['sub']->nocache = null; $_smarty_tpl->tpl_vars['sub']->scope = 0;
} else $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable(false, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['ID']==$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ID']) {?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['sub'])) {$_smarty_tpl->tpl_vars['sub'] = clone $_smarty_tpl->tpl_vars['sub'];
$_smarty_tpl->tpl_vars['sub']->value = true; $_smarty_tpl->tpl_vars['sub']->nocache = null; $_smarty_tpl->tpl_vars['sub']->scope = 0;
} else $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable(true, null, 0);?>
                                            <?php }?>
                                            <li <?php if ($_smarty_tpl->tpl_vars['sub']->value) {?>class="sub-category"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['TITLE'];?>
</a>
                                                <?php if ($_smarty_tpl->tpl_vars['sub']->value) {?>
                                                    <ul>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['TITLE'];?>
</a></li>
                                                        <?php endfor; endif; ?>
                                                    </ul>
                                                <?php }?>
                                            </li>
                                        <?php endfor; endif; ?>
                                    </ul>
                                <?php }?>
                                <div class="cart-btn">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/cart2.png" alt="">
                                    <span>Купить <br> в один клик</span>
                                </div>
                            </div>
                        <?php }?>
                    <?php endfor; endif; ?>
                <?php endfor; endif; ?>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6 category-image-item">
                        <img class="img-responsive" src="/upload/images/shop/<?php echo $_smarty_tpl->tpl_vars['item']->value['SKIN'];?>
" alt="">
                    </div>
                    <div class="col-sm-6 category-desc">
                        <p class="category-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</p>
                        <div class="row">
                            <div class="col-sm-12">
                                <select id="length" class="form-control">
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['len']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['len']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
">Длина: <?php echo $_smarty_tpl->tpl_vars['len']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN'];?>
 м. <?php echo $_smarty_tpl->tpl_vars['len']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
 руб.</option>
                                    <?php endfor; endif; ?>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <select id="raz" class="form-control">
                                    <option value="0">Дополнительный разъем</option>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['raz']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['raz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
"><?php echo $_smarty_tpl->tpl_vars['raz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SNAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['raz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SCAPT'];?>
 <?php echo $_smarty_tpl->tpl_vars['raz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
 руб.</option>
                                    <?php endfor; endif; ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                          <button class="btn btn-default btn-minus" type="button"><i class="fa fa-minus"></i></button>
                                        </span>
                                    <input type="text" class="form-control text-center" id="count" value="1"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default btn-plus" type="button"><i class="fa fa-plus"></i></button>
                                        </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button id="add-to-cart" class="btn btn-primary">В корзину</button>
                            </div>
                        </div>
                        <h3><span id="product-price"></span> руб.</h3>
                    </div>
                </div>
                <p id="more-lines"><?php echo $_smarty_tpl->tpl_vars['item']->value['CONTENT'];?>
</p>
                <div class="row">
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
                            <div class="col-sm-3">
                                <img class="img-responsive sub-img" src="/upload/images/shop/<?php echo $_smarty_tpl->tpl_vars['item']->value['IMAGES'][$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
" alt=""/>
                            </div>
                        <?php endfor; endif; ?>
                    <?php }?>
                </div>
                <hr>
                <p id="more-lines"><?php echo $_smarty_tpl->tpl_vars['category']->value['DESC2'];?>
</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
<div id="cart_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Сообщение</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                Добавлено в корзину
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <a href="/shop/cart"  class="btn btn-primary">Перейти к оплате</a>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    var data_cart = {};
    data_cart.id = '<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['ID'];?>
';
    data_cart.name = '<?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
';



    $(".sub-img").click(function(){
        $(".main-img").attr('src', $(this).attr('src'));
    });
    $(".btn-minus").click(function(){
        var c =  $("#count").val();
        if (c >1){
            c--;
        }
        $("#count").val(c);
        SetPrice();
    });
    $(".btn-plus").click(function(){
        $("#count").val(Number($("#count").val()) + 1);
        SetPrice();
    });


    $("#length").change(function(){
        SetPrice();
    });
    $("#raz").change(function(){
        SetPrice();
    });

    function AddCart(){
        var array = [];
        if ($.cookie('cart') !==null){
            array = JSON.parse($.cookie('cart'));
        }



        array.push(data_cart);
        $.cookie('cart', JSON.stringify(array), { expires: 180, path: '/' });

        $(document).ready(function() {
            $("#cart_modal").modal('show');
        });
        $("#cart-btn").show();
    }

    function SetPrice(){
        var len = Number($("#length").val());
        var len_text = $('#length option:selected').text();
        var raz = Number($("#raz").val());
        var raz_text = $('#raz option:selected').text();
        var count = Number($("#count").val());
        var price = (len + raz) * count;
        $("#product-price").text(price);
        var page_title = '<?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
. ';

        var page_title = page_title + len +' м. ';
        if (raz_text != '--'){
            var page_title = page_title  + ' +  ' + raz_text + '. ';
        }
        page_title = page_title + count + ' шт. ' + price + ' руб. '

        data_cart.len = len;
        data_cart.len_text = len_text;
        data_cart.raz = raz;
        data_cart.raz_text = raz_text;
        data_cart.count = count;
    }

    $("#add-to-cart").click(function(){
        AddCart();
    });

    SetPrice();
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
