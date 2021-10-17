<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:23
         compiled from "W:\domains\provoda\www\themes\default\tpl\comments\view\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123530080960fc24b344ede6-73079383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c3eb678fd725c47f076e081b9062f42a97799d' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\comments\\view\\default.tpl',
      1 => 1626993777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123530080960fc24b344ede6-73079383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
    'comments' => 0,
    'theme_dir' => 0,
    'tpl_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24b3479d69_44304100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24b3479d69_44304100')) {function content_60fc24b3479d69_44304100($_smarty_tpl) {?><ul class="<?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?>comment-list<?php } else { ?>reply<?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <li id="comment-<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" class="comment">
        <div>
            <div class="comment-avatar hidden-xs"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/page-images/testimonial-picture3.jpg" alt="avatar"></div>
            <div class="comment-body">
                <div class="comment-meta">
                    <span class="comment-user"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USER_NAME'];?>
</span> <span class="comment-date"> <i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_PUBL'];?>
 </span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" class="comment-reply"> <i class="fa fa-reply"></i> Ответить</a>
                </div><!-- comment-meta end -->
                <div class="comment-text"><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USER_COMMENT'];?>
</div>
            </div><!-- comment-body end -->
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['SUB'])) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tpl_name']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comments'=>$_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SUB'],'sub'=>true), 0);?>

        <?php }?>
    </li>
    <?php endfor; endif; ?>
</ul>
<?php }} ?>
