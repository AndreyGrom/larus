{include file="../common/header.tpl"}


<div class="container shop-content">
    <div class="row">
        <div class="col-sm-9 no-p-r">
            <div class="category-row category-row-open category-row-open-2">
                <div class="row">
                    <div class="col-sm-2" style="background: #f4eee9;">
                        {section name=i loop=$categories}
                            {section name=j loop=$categories[i].SUB}
                                {if $categories[i].SUB[j].ID == $category.ID}
                                    <div class="category-name">
                                        <p><a href="/shop/{$category.ALIAS}"><img src="{$theme_dir}img/quote-left.png" alt=""></a> {$categories[i].TITLE}</p>
                                        {if $categories[i].SUB}
                                            <ul style="padding-left: 15px">
                                                {section name=j loop=$categories[i].SUB}
                                                    {assign var='sub' value=false}
                                                    {if $category.ID == $categories[i].SUB[j].ID}
                                                        {assign var='sub' value=true}
                                                    {/if}
                                                    <li {if $sub}class="sub-category"{/if}><a href="{$categories[i].SUB[j].ALIAS}">{$categories[i].SUB[j].TITLE}</a>
                                                        {if $sub}
                                                            <ul>
                                                                {section name=k loop=$items}
                                                                    <li {if $items[k].ID == $item.ID}class="active"{/if}><a href="{$items[k].ALIAS}">{$items[k].TITLE}</a></li>
                                                                {/section}
                                                            </ul>
                                                        {/if}
                                                    </li>
                                                {/section}
                                            </ul>
                                        {/if}
                                        <div class="cart-btn">
                                            <img src="{$theme_dir}img/cart2.png" alt="">
                                            <span>Купить <br> в один клик</span>
                                        </div>
                                    </div>
                                {/if}
                            {/section}
                        {/section}
                    </div>
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 category-image-item">
                                    <img class="img-responsive" src="/upload/images/shop/{$item.SKIN}" alt="">
                                </div>
                                <div class="col-sm-6 category-desc">
                                    <p class="category-title">{$item.TITLE}</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select id="length" class="form-control">
                                                {section name=i loop=$len}
                                                    <option value="{$len[i].PRICE}">Длина: {$len[i].LEN} м. {$len[i].PRICE} руб.</option>
                                                {/section}
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <select id="raz" class="form-control">
                                                <option value="0">Дополнительный разъем</option>
                                                {section name=i loop=$raz}
                                                    <option value="{$raz[i].PRICE}">{$raz[i].SNAME} {$raz[i].SCAPT} {$raz[i].PRICE} руб.</option>
                                                {/section}
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
                                    <h3><span id="product-price">{*{$len[0].PRICE}*}</span> руб.</h3>
                                </div>
                            </div>
                            <p id="more-lines">{$item.CONTENT}</p>

                            <div class="row">
                                {if $item.IMAGES}
                                    {section name=o loop=$item.IMAGES}
                                        <div class="col-sm-3">
                                            <img class="img-responsive sub-img" src="/upload/images/shop/{$item.IMAGES[o]}" alt=""/>
                                        </div>
                                    {/section}
                                {/if}
                            </div>
                            <hr>
                            <p id="more-lines">{$category.DESC2}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {include file="./right-col.tpl"}
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
<script>
    var data_cart = {};
    data_cart.id = '{$ITEM.ID}';
    data_cart.name = '{$page_title}';



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
        var page_title = '{$page_title}. ';

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
</script>

{include file="../common/footer.tpl"}