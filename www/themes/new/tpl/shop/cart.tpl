{include file="../common/header.tpl"}


<div class="container cart-content">
    <div class="row">
        <div class="col-sm-6 cart-form">
            <h2 class="cart-title">Купить кабель</h2>
            <form id="form-cart" method="post">
                <select id="ser">
                    <option value="0">Выбрать серию</option>
                    {section name=i loop=$categories}
                        <option value="{$categories[i].ID}">{$categories[i].TITLE}</option>
                    {/section}
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
            {section name=i loop=$items}
                <div class="row cart-product">
                    <div class="col-sm-2">
                        <img src="/upload/images/shop/{$items[i].SKIN}" alt="" class="img-responsive">
                    </div>
                    <div class="col-sm-6">
                        <div class="cart-product-info">
                            <p class="item-name">{$items[i].PRODUCT_TITLE}</p>
                            <p class="">{$items[i].LIN_TITLE}</p>
                            <p class="">{$items[i].SER_TITLE}</p>
                        </div>
                        <div class="product-len">
                            <p>Длина: {$items[i].LEN} м.</p>
                        </div>
                    </div>
                    <div class="col-sm-2"><span class="item-price">{$items[i].LEN_PRICE} &#8381;</span></div>
                    <div class="col-sm-2 text-right">
                        <a href="/shop/cart-delete-item={$items[i].ID}">
                            <img class="cart-delete-item" src="{$theme_dir}img/delete.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="row cart-product">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <div class="product-raz">
                            <p>Дополнительный разъем: <br>
                                {if $items[i].RAZ}{$items[i].RAZ}{/if}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <span class="item-price">
                            {if $items[i].RAZ}
                                {$items[i].RAZ_PRICE} &#8381;
                            {else}
                                Нет
                                {*<img style="margin-top: -30px;" class="img-responsive" src="{$theme_dir}img/figa.png" alt="">*}
                            {/if}
                        </span>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="/shop/cart-delete-raz={$items[i].ID}">
                            {if $items[i].RAZ}
                                <img class="cart-delete-raz" src="{$theme_dir}img/delete.png" alt="">
                            {/if}
                        </a>
                    </div>
                </div>
                {if !$smarty.section.i.last}
                <hr>
                {/if}
                <div class="cart-product-item"></div>
            {/section}
            <div class="delimiter"></div>
            <div class="row itogo">
                <div class="col-sm-2">ИТОГО</div>
                <div class="col-sm-6"></div>
                <div class="col-sm-4">
                    {$total} &#8381;
                    <a href="/shop/create-order/" class="btn btn-orange-3">Оплатить</a>
                </div>
            </div>
            <div class="text-right">

            </div>
        </div>
    </div>
</div>
{include file="./cart_modal.tpl"}
<script>
    $(".cart-delete-raz, .cart-delete-item").click(function (e) {
        if (!confirm("Вы уверенны, что хотите это сделать?")){
            e.preventDefault();
        }
    });
    {literal}
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
    {/literal}
</script>
{include file="../common/footer.tpl"}