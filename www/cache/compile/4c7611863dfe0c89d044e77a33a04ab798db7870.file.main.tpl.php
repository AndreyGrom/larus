<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:32:22
         compiled from "W:\domains\provoda\www\themes\default\tpl\pages\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29938455560fc24766b64a3-83853297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c7611863dfe0c89d044e77a33a04ab798db7870' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\pages\\main.tpl',
      1 => 1626993777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29938455560fc24766b64a3-83853297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_last' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24769c5962_95620131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24769c5962_95620131')) {function content_60fc24769c5962_95620131($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'W:\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'W:\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.truncate.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('slider'=>true), 0);?>


<div class="main-page" id="content">

</div>
<div class="container">
    <?php echo NewsGetLast(array('source'=>'news_last','limit'=>10),$_smarty_tpl);?>

    <div class="slider news-carousel">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news_last']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <div>
                <h3 class="s1">
                    <a href="/news/<?php echo $_smarty_tpl->tpl_vars['news_last']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><img src="/upload/images/news/<?php echo $_smarty_tpl->tpl_vars['news_last']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" class="img-responsive"/></a>

                </h3>
                <h3 class="s2">
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news_last']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_PUBL'],"%d.%m.%Y");?>
</span>
                    <p><a href="/news/<?php echo $_smarty_tpl->tpl_vars['news_last']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news_last']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'],40);?>
</a></p>
                </h3>
            </div>
        <?php endfor; endif; ?>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('.news-carousel').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
