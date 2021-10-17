<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:32
         compiled from "W:\domains\provoda\www\themes\default\tpl\news\list\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157889666260fc24bc51d984-54467282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd582dc5cfefe42804f9517744193bf07e44be74c' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\news\\list\\default.tpl',
      1 => 1626993780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157889666260fc24bc51d984-54467282',
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
  'unifunc' => 'content_60fc24bc57f428_21559679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24bc57f428_21559679')) {function content_60fc24bc57f428_21559679($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'W:\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {?>
                                        <a href="/news/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">
                                            <img src="/upload/images/news/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" class="img-responsive"/>
                                        </a>
                                    <?php }?>
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="margin-top:0;"><a href="/news/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></h4>
                                    <span>Дата: <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_EDIT'];?>
</span>

                                    <div style="margin-top: 10px;"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CONTENT']),500);?>
</div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                        <?php endfor; endif; ?>
                        <div class="clearfix"></div>

                        <div class="col-sm-12"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
                    </div>
                </div>

            </div>

        </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
