{include file="../../common/header.tpl"}
<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        {*<ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Блог</li>
                        </ol>*}
                        <div class="col-sm-12"><h2>{$page_title}</h2></div>
                        <div class="clearfix"></div>
                        <br/><br/>
                        <div class="row row-flex .row-flex-wrap">
                        {section name=i loop=$items}
                                <div class="col-sm-4">
                                    <div class="blog-item">
                                        {if $items[i].SKIN}
                                            <dib class="blog-img">
                                                <a href="/blog/{$items[i].ALIAS}">
                                                    <img src="/upload/images/blog/{$items[i].SKIN}" alt="" style="width: 100%"/>
                                                </a>
                                            </dib>
                                        {/if}
                                        <h4><a href="/blog/{$items[i].ALIAS}">{$items[i].TITLE}</a></h4>


                                        <div>{$items[i].SHORT_CONTENT}</div>
                                        <div class="blog-item-footer text-right">
                                            <a class="btn btn-primary" href="/blog/{$items[i].ALIAS}">Читать далее</a>
                                        </div>
                                    </div>
                                </div>
                            {if $smarty.section.i.index_next is div by 3}
                                </div>
                                <div class="row row-flex .row-flex-wrap">
                            {/if}
                        {/section}
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-sm-12">{$pagination}</div>
                    </div>
                </div>

            </div>

        </div>
</section>
{include file="../../common/footer.tpl"}