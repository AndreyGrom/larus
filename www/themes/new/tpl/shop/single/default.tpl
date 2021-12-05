{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {*<ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/shop">Магазин</a></li>
                    <li class="active">{$page_title}</li>
                </ol>*}
                <h2 class="page-title">{$page_title}</h2>
                <br/><br/>

                    <div class="row">
                        {if $item.IMAGES}
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="main-img">
                                            {section name=o loop=$item.IMAGES}
                                                {if $item.IMAGES[o] == $item.SKIN}
                                                    <img class="img-responsive main-img" src="/upload/images/shop/{$item.IMAGES[o]}" alt=""/>
                                                {/if}
                                            {/section}
                                        </div>
                                    </div>
                                </div>
                              <br/><br/>
                                <div class="row">
                                    {section name=o loop=$item.IMAGES}
                                            <div class="col-sm-3">
                                                <img class="img-responsive sub-img" src="/upload/images/shop/{$item.IMAGES[o]}" alt=""/>
                                            </div>
                                    {/section}
                                </div>
                            </div>
                        {/if}
                        <div class="col-sm-6">
                            <h3>{$item.MODEL}</h3>

                            <h3><span id="product-price">{*{$len[0].PRICE}*}</span> руб.</h3>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Длина:</p>
                                    <select id="length" class="form-control">
                                        {section name=i loop=$len}
                                            <option value="{$len[i].PRICE}">{$len[i].LEN} м. {$len[i].PRICE} руб.</option>
                                        {/section}
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <p>Дополнительный разъем:</p>
                                    <select id="raz" class="form-control">
                                        <option value="0">--</option>
                                        {section name=i loop=$raz}
                                            <option value="{$raz[i].PRICE}">{$raz[i].SNAME} {$raz[i].SCAPT} {$raz[i].PRICE} руб.</option>
                                        {/section}
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <br/>
                                    <p>Количество</p>
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
                                    <br/>
                                    <p>&nbsp;</p>
                                    <button

                                            id="add-to-cart" class="btn btn-primary">Добавить в корзину</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr/>
                                    {$item.CONTENT}
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/>


            </div>
        </div>



    </div>
</section>

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

<script>
    $(".sub-img").click(function(){
        $(".main-img").attr('src', $(this).attr('src'));
    });
</script>
{include file="../../common/footer.tpl"}