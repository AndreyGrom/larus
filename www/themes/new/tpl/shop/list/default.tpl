{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                   {* <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        {if $category2}<li class="active">{$category2.TITLE}</li>{/if}
                        <li class="active">{$category.TITLE}</li>
                    </ol>

                    <div class="clearfix"></div>
                    <br/><br/>*}
                    {if $items}
                    <h2>{$category2.TITLE} {$category.TITLE}</h2>
                    <br/>
                    <div class="row">

                        {section name=i loop=$items}
                            <div class="col-sm-4">
                                <div class="blog-item">
                                    {if $items[i].SKIN}
                                        <a href="/shop/{$items[i].ALIAS}">
                                            <img src="/upload/images/shop/{$items[i].SKIN}" alt="" style="width: 100%"/>
                                        </a>
                                    {/if}
                                    <h4><a class="caption-2" href="/shop/{$items[i].ALIAS}">{$items[i].TITLE}</a></h4>


                                    <div>{$items[i].SHORT_CONTENT}</div>
                                    <div class="blog-item-footer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="text-left">
                                                    <span>{$items[i].LEN|replace:'.':','} м. {round($items[i].LEN_PRICE)} руб. </span>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right">
                                                    <a class="btn btn-primary" href="/shop/{$items[i].ALIAS}">Купить</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {if $smarty.section.i.iteration is div by 3}
                                <div class="clearfix"></div>
                            {/if}
                        {/section}
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12">{$pagination}</div>
                    {else}
                        <h2>Ничего не найдено</h2>
                    {/if}
                </div>
            </div>

        </div>

    </div>
</section>
{include file="../../common/footer.tpl"}