<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-16 11:48:03
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\shop\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11235810661baf1b32b1556-34594882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c377c4889b311ef4b7f7096b9fdadeff9aa35624' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\shop\\cart.tpl',
      1 => 1639644480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11235810661baf1b32b1556-34594882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61baf1b332a6e2_54103448',
  'variables' => 
  array (
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61baf1b332a6e2_54103448')) {function content_61baf1b332a6e2_54103448($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container cart-content">
    <div class="row">
        <div class="col-sm-6 cart-form">
            <h2 class="cart-title">Купить кабель</h2>
            <form id="form-cart" method="post">
                <select id="ser">
                    <option value="0">Выбрать серию</option>
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
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <select id="lin">
                    <option value="0">Выбрать линейку</option>
                </select>
                <select id="type">
                    <option value="0">Выбрать тип кабеля</option>
                </select>
                <select id="len">
                    <option value="0">Длина</option>
                </select>
                <select id="raz">
                    <option value="0">Дополнительный разъем</option>
                </select>
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    
    function QuerySelect(act, id, res){
        $.ajax({
            url: '/shop/',
            method: 'post',
            dataType: 'html',
            data: {act: act, id : id},
            success: function(data){
                res.html(data);
            }
        });
    }
    $("#form-cart #ser").change(function () {
        $("#lin").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetLin', $(this).val(), $("#lin"));
    });
    $("#form-cart #lin").change(function () {
        $("#type").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetType', $(this).val(), $("#type"));
    });
    $("#form-cart #len").change(function () {
        $("#len").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetType', $(this).val(), $("#len"));
    });
    
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
