<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-04 14:09:36
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\shop\list\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7680947861ab4c70a80007-44188029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6b17b361731a9407a60fd1e121f507eb41ce80' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\shop\\list\\default.tpl',
      1 => 1626993773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7680947861ab4c70a80007-44188029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'category2' => 0,
    'category' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ab4c70b08ba7_45907236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ab4c70b08ba7_45907236')) {function content_61ab4c70b08ba7_45907236($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\data\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                   
                    <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['category2']->value['TITLE'];?>
 <?php echo $_smarty_tpl->tpl_vars['category']->value['TITLE'];?>
</h2>
                    <br/>
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
                                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN']) {?>
                                        <a href="/shop/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">
                                            <img src="/upload/images/shop/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" style="width: 100%"/>
                                        </a>
                                    <?php }?>
                                    <h4><a class="caption-2" href="/shop/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</a></h4>


                                    <div><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SHORT_CONTENT'];?>
</div>
                                    <div class="blog-item-footer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="text-left">
                                                    <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN'],'.',',');?>
 м. <?php echo round($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN_PRICE']);?>
 руб. </span>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right">
                                                    <a class="btn btn-primary" href="/shop/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
">Купить</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'] % 3)) {?>
                                <div class="clearfix"></div>
                            <?php }?>
                        <?php endfor; endif; ?>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
                    <?php } else { ?>
                        <h2>Ничего не найдено</h2>
                    <?php }?>
                </div>
            </div>

        </div>

    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
