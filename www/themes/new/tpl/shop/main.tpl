{include file="../common/header.tpl"}


<div class="container shop-content">
    <div class="row">
        <div class="col-sm-9 no-p-r">
            {section name=i loop=$categories}
                <div class="category-row {if $smarty.section.i.index == 0}category-row-open{/if}">
                    <div class="row row-flex">
                        <div class="col-sm-2 category-name">
                            <p>{$categories[i].TITLE}</p>
                            {if $categories[i].SUB}
                                <ul>
                                    {section name=j loop=$categories[i].SUB}
                                        <li><a href="/shop/{$categories[i].SUB[j].ALIAS}">{$categories[i].SUB[j].TITLE}</a></li>
                                    {/section}
                                </ul>
                            {/if}
                            <div class="cart-btn">
                                <img src="{$theme_dir}img/cart2.png" alt="">
                                <span>Купить <br> в один клик</span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="category-image" style="background-image: url(/upload/images/shop/{$categories[i].IMAGE});"></div>
                        </div>
                        <div class="col-sm-5 category-desc">
                            <p class="category-title">{$categories[i].TITLE2}</p>
                            <p>{$categories[i].DESC}</p>
                            <a href="#" class="more-btn">ПОДРОБНЕЕ...</a>
                        </div>

                    </div>
                    <div class="row row-flex category-desc-2">
                        <div class="col-sm-2 category-desc-2-col"></div>
                        <div class="col-sm-10 category-desc-2-col">
                            {if $categories[i].SUB}
                                <div class="row">
                                    {section name=j loop=$categories[i].SUB}
                                        <div class="col-sm-4">
                                            <a href="/shop/{$categories[i].SUB[j].ALIAS}">
                                                <img class="img-responsive" src="/upload/images/shop/{$categories[i].SUB[j].IMAGE}" alt="">
                                            </a>
                                            <p><a href="/shop/{$categories[i].SUB[j].ALIAS}"><img src="{$theme_dir}img/vector-right.png" alt=""> {$categories[i].SUB[j].TITLE}</a></p>
                                        </div>
                                    {/section}
                                </div>
                            {/if}
                            <hr>
                            <p>{$categories[i].DESC2}</p>
                        </div>
                    </div>
                </div>
            {/section}
        </div>
        {include file="./right-col.tpl"}
    </div>
</div>

<script>
    $(".category-row").hover(function(){
        $(".category-row").removeClass('category-row-open category-row-open-2');
        $(this).addClass('category-row-open');

    });
    $(".more-btn").click(function(e){
        e.preventDefault();
        $(this).closest(".category-row").addClass("category-row-open-2");


    });
</script>

{include file="../common/footer.tpl"}