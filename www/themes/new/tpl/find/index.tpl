{include file="../common/header.tpl"}

<div class="container blog-content find-items">
    {if $items_blog}
        <h1 class="caption">Результы поиска в Блоге</h1>
        <div class="row">
            <div class="blog-items">
                {section name=i loop=$items_blog}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item" onclick="document.location.href = '/blog/{$items_blog[i].ALIAS}'">
                            <div class="blog-item-title">
                                {$items_blog[i].TITLE}
                            </div>
                            <div class="blog-item-img">
                                <a href="/blog/{$items_blog[i].ALIAS}">
                                    <img class="img-responsive" src="/upload/images/blog/{if $items_blog[i].SKIN}{$items_blog[i].SKIN}{else}Z3i5b3DSYHEiDYKNST7k.jpg{/if}" alt="">
                                </a>
{*                                <div class="blog-item-date">{$items_blog[i].DATE_PUBL}</div>*}
                                <div class="blog-item-arrow-rect"><img src="{$theme_dir}img/rect-arrow-left.png" alt=""></div>
                            </div>
                            <div class="blog-item-desc">
                                {$items_blog[i].SHORT_CONTENT}
                            </div>
                        </div>
                    </div>
                {/section}
                <div class="clearfix"></div>
    {*            <div class="col-sm-12 text-right">{$pagination}</div>*}
            </div>
        </div>
    {/if}
    {if $items_shop}
        <h1 class="caption">Результы поиска в Продукции</h1>
        <div class="row">
            <div class="blog-items">
                {section name=i loop=$items_shop}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item" onclick="document.location.href = '/shop/{$items_shop[i].ALIAS}'">
                            <div class="blog-item-title">
                                {$items_shop[i].TITLE}
                            </div>
                            <div class="blog-item-img">
                                <a href="/blog/{$items_shop[i].ALIAS}">
                                    <img class="img-responsive" src="/upload/images/shop/{if $items_shop[i].SKIN}{$items_shop[i].SKIN}{else}Z3i5b3DSYHEiDYKNST7k.jpg{/if}" alt="">
                                </a>
{*                                <div class="blog-item-date">{$items_shop[i].DATE_PUBL}</div>*}
                                <div class="blog-item-arrow-rect"><img src="{$theme_dir}img/rect-arrow-left.png" alt=""></div>
                            </div>
                            <div class="blog-item-desc">
                                {$items_shop[i].CONTENT|truncate:200}
                            </div>
                        </div>
                    </div>
                {/section}
                <div class="clearfix"></div>
                {*            <div class="col-sm-12 text-right">{$pagination}</div>*}
            </div>
        </div>
    {/if}
    {if !$items_blog && !$items_shop}
        <p style="color:#fff; margin-top: 40px;">Ваш поиск не дал результатов. Попробуйте изменить запрос</p>
    {/if}
</div>



{include file="../common/footer.tpl"}