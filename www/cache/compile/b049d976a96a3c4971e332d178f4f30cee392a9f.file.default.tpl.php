<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:21
         compiled from "W:\domains\provoda\www\themes\default\tpl\partners\list\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83772098560fc24b16c6ef7-49501051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b049d976a96a3c4971e332d178f4f30cee392a9f' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\partners\\list\\default.tpl',
      1 => 1626993780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83772098560fc24b16c6ef7-49501051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24b1724b16_40259217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24b1724b16_40259217')) {function content_60fc24b1724b16_40259217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                       
                        <div class="clearfix"></div>
                        <br/><br/>
                        <div class="row">
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
                                <div class="col-sm-12"> <h3><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</h3></div>
                                <br/>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                    <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID']==$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['PARENTS']) {?>
                                        <div class="col-sm-4">
                                            <div class="partners-item">
                                                <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['SKIN']) {?>
                                                    <a href="/partners/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
">
                                                        <img src="/upload/images/partners/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['SKIN'];?>
" alt="" style="width: 100%"/>
                                                    </a>
                                                <?php }?>
                                                <h4><a href="/partners/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['TITLE'];?>
</a></h4>


                                                <div><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['SHORT_CONTENT'];?>
</div>
                                                <div class="partners-item-footer text-right">
                                                    <a class="btn btn-primary" href="/partners/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ALIAS'];?>
">Читать далее</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>

                                  
                                    <?php endfor; endif; ?>
                                <div class="clearfix"></div>
                                <hr/>

                                <br/>
                                <?php endfor; endif; ?>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>

            </div>

        </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
