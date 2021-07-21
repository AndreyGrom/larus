{include file="../../common/header.tpl"}
<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        {*<div class="col-sm-12"><h2>{$page_title}</h2></div>
                        <div class="clearfix"></div>
                        <br/><br/>*}
                        {section name=i loop=$items}
                            <div class="row">
                                <div class="col-sm-4">
                                    {if $items[i].SKIN}
                                        <a href="/news/{$items[i].ALIAS}">
                                            <img src="/upload/images/news/{$items[i].SKIN}" alt="" class="img-responsive"/>
                                        </a>
                                    {/if}
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="margin-top:0;"><a href="/news/{$items[i].ALIAS}">{$items[i].TITLE}</a></h4>
                                    <span>Дата: {$items[i].DATE_EDIT}</span>

                                    <div style="margin-top: 10px;">{$items[i].CONTENT|strip_tags:true|truncate:500}</div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                        {/section}
                        <div class="clearfix"></div>

                        <div class="col-sm-12">{$pagination}</div>
                    </div>
                </div>

            </div>

        </div>
</section>
{include file="../../common/footer.tpl"}