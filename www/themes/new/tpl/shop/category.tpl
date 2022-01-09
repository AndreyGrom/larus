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
                                        <p><a href="/shop/"><img src="{$theme_dir}img/quote-left.png" alt=""></a> {$categories[i].TITLE}</p>
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
                                                                    <li><a href="{$items[k].ALIAS}">{$items[k].TITLE}</a></li>
                                                                {/section}
                                                            </ul>
                                                        {/if}
                                                    </li>
                                                {/section}
                                            </ul>
                                        {/if}
                                        <div class="cart-btn">
                                            <img src="{$theme_dir}img/cart2.png" alt="">
                                            <a href="/shop/cart">Купить <br> в один клик</a>
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
                                    <img class="img-responsive" src="/upload/images/shop/{$category.IMAGE}" alt="">
                                </div>
                                <div class="col-sm-6 category-desc">
                                    <p class="category-title">{$category.TITLE}</p>
                                    <p>{$category.DESC}</p>
                                </div>
                            </div>
                            <div class="more-lines">
                                <a href="#more-lines">Больше информации о линейке</a>
                            </div>
                            <div class="shop-items">
                                <div class="row row-flex">
                                    {section name=k loop=$items}
                                        <div class="col-sm-4">
                                            <div class="shop-item">
                                                <div class="shop-item-image">
                                                    <a href="/shop/{$items[k].ALIAS}">
                                                        <img class="img-responsive" src="/upload/images/shop/{$items[k].SKIN}" alt="">
                                                    </a>
                                                </div>

                                                <div class="pull-left product-price">{round($items[k].LEN_PRICE)} &#8381;/{$items[k].LEN|replace:'.':','} м.</div>
                                                <div class="pull-right"><a href="/shop/{$items[k].ALIAS}"><img src="{$theme_dir}img/add-cart.png" alt=""></a></div>
                                                <div class="clearfix"></div>
                                                <a href="/shop/{$items[k].ALIAS}">{$items[k].TITLE}</a>
                                            </div>
                                        </div>
                                    {/section}
                                </div>
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


{include file="../common/footer.tpl"}