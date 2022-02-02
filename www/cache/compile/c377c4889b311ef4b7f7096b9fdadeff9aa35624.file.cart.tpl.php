<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 11:29:08
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\shop\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11235810661baf1b32b1556-34594882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c377c4889b311ef4b7f7096b9fdadeff9aa35624' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\shop\\cart.tpl',
      1 => 1640098442,
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
    'items' => 0,
    'theme_dir' => 0,
    'total' => 0,
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
                <select disabled id="lin">
                    <option value="0">Выбрать линейку</option>
                </select>
                <select disabled id="type">
                    <option value="0">Выбрать тип кабеля</option>
                </select>
                <select disabled id="len">
                    <option value="0">Длина</option>
                </select>
                <select disabled id="raz">
                    <option value="0">Дополнительный разъем</option>
                </select>
            </form>
            <div class="pull-left">
                Цена: <span id="total-price"><span>0</span> &#8381;</span>
            </div>
            <div class="pull-right"><button disabled id="add-to-cart">Добавить в корзину</button></div>
        </div>
        <div class="col-sm-6 cart-products">
            <div class="row">
                <div class="col-sm-offset-2 cart-title"><h2>В вашей корзине</h2></div>
            </div>
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
                <div class="row cart-product">
                    <div class="col-sm-2">
                        <img src="/upload/images/shop/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="" class="img-responsive">
                    </div>
                    <div class="col-sm-6">
                        <div class="cart-product-info">
                            <p class="item-name"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRODUCT_TITLE'];?>
</p>
                            <p class=""><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LIN_TITLE'];?>
</p>
                            <p class=""><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SER_TITLE'];?>
</p>
                        </div>
                        <div class="product-len">
                            <p>Длина: <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN'];?>
 м.</p>
                        </div>
                    </div>
                    <div class="col-sm-2"><span class="item-price"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN_PRICE'];?>
 &#8381;</span></div>
                    <div class="col-sm-2 text-right">
                        <a href="/shop/cart-delete-item=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
">
                            <img class="cart-delete-item" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/delete.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="row cart-product">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <div class="product-raz">
                            <p>Дополнительный разъем: <br>
                                <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RAZ']) {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RAZ'];
}?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <span class="item-price">
                            <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RAZ']) {?>
                                <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RAZ_PRICE'];?>
 &#8381;
                            <?php } else { ?>
                                Нет
                                
                            <?php }?>
                        </span>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="/shop/cart-delete-raz=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RAZ']) {?>
                                <img class="cart-delete-raz" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/delete.png" alt="">
                            <?php }?>
                        </a>
                    </div>
                </div>
                <?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['i']['last']) {?>
                <hr>
                <?php }?>
                <div class="cart-product-item"></div>
            <?php endfor; endif; ?>
            <div class="delimiter"></div>
            <div class="row itogo">
                <div class="col-sm-2">ИТОГО</div>
                <div class="col-sm-6"></div>
                <div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 &#8381;</div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./cart_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
    $(".cart-delete-raz, .cart-delete-item").click(function (e) {
        if (!confirm("Вы уверенны, что хотите это сделать?")){
            e.preventDefault();
        }
    });
    
    var ser_s = $("#ser");
    var lin_s = $("#lin");
    var type_s = $("#type");
    var len_s = $("#len");
    var raz_s = $("#raz");
    var total = $("#total-price span");
    var add_btn = $("#add-to-cart");
    var cart_modal = $("#cart_modal")

    function QuerySelect(act, id, res){
        $.ajax({
            url: '/shop/',
            method: 'post',
            dataType: 'html',
            data: {act: act, id : id},
            success: function(data){
                res.html(data);
                res.removeAttr('disabled')
            }
        });
    }
    function QuerySelect2(id){
        $.ajax({
            url: '/shop/',
            method: 'post',
            dataType: 'html',
            data: {act: 'GetKabel', id : id},
            success: function(data){
                var item = eval('('+data+')');
                var i;
                var str = '';
                for (i = 0; i < item.LEN.length; ++i) {
                    str += '<option data-id="' + item.LEN[i].ID + '" value="' + item.LEN[i].PRICE + '">Длина: ' + item.LEN[i].LEN + ' м. ' + item.LEN[i].PRICE + ' &#8381;</option>';
                }
                len_s.html(str).removeAttr('disabled');
                str = '<option value="0">Дополнительный разъем</option>';
                for (i = 0; i < item.RAZ.length; ++i) {
                    str += '<option data-id="' + item.RAZ[i].ID + '" value="' + item.RAZ[i].PRICE + '">' + item.RAZ[i].SNAME + ' ' + item.RAZ[i].SCAPT + item.RAZ[i].PRICE + ' &#8381;</option>';
                }
                raz_s.html(str).removeAttr('disabled');
                total.text(TotaPrice());
                add_btn.removeAttr('disabled');
            }
        });
    }
    function TotaPrice(){
        return Number(len_s.val()) + Number(raz_s.val());
    }

    ser_s.change(function () {
        lin_s.html('<option value="0">Загрузка...</option>');
        QuerySelect('GetLin', $(this).val(), lin_s);
        type_s.html('<option value="0">Выбрать тип кабеля</option>').attr('disabled', 'disabled');
        len_s.html('<option value="0">Длина</option>').attr('disabled', 'disabled');
        raz_s.html('<option value="0">Дополнительный разъем</option>').attr('disabled', 'disabled');
        add_btn.attr('disabled', 'disabled');
        total.text(0);
    });
    lin_s.change(function () {
        type_s.html('<option value="0">Загрузка...</option>');
        add_btn.attr('disabled', 'disabled');
        total.text(0);
        QuerySelect('GetType', $(this).val(), type_s);
        len_s.html('<option value="0">Длина</option>').attr('disabled', 'disabled');
        raz_s.html('<option value="0">Дополнительный разъем</option>').attr('disabled', 'disabled');
    });
    type_s.change(function () {
        if ($(this).val() == 0){
            len_s.html('<option value="0">Длина</option>').attr('disabled', 'disabled');
            raz_s.html('<option value="0">Дополнительный разъем</option>').attr('disabled', 'disabled');
            add_btn.attr('disabled', 'disabled');
            total.text(0);
            return;
        }
        len_s.html('<option value="0">Загрузка...</option>').attr('disabled', 'disabled');
        raz_s.html('<option value="0">Загрузка...</option>').attr('disabled', 'disabled');
        QuerySelect2( $(this).val());
    });
    $("#len, #raz").change(function () {
        total.text(TotaPrice());
        add_btn.removeAttr('disabled');
    });
    add_btn.click(function () {
        add_cart(type_s.val(), $("#len option:selected").attr("data-id"), $("#raz option:selected").attr("data-id"), ser_s.val(), lin_s.val(), 1, null );
    });
    
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
