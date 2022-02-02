{include file="../common/header.tpl"}

<div class="container cart-content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 cart-products">
            <div class="row">
                <div class="col-sm-offset-2 cart-title"><h2>Вы оплачиваете</h2></div>
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
                            {/if}
                        </span>
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
        </div>
    </div>
</div>


{include file="../common/footer.tpl"}