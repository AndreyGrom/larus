{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>{$page_title}</h2>
                Дата: {$item.DATE_EDIT}
                <br/><br/>

              {*  <div id="carousel" class="carousel slide" data-ride="carousel" style="margin: 0 auto;">
                    <ol class="carousel-indicators">
                        {section name=i loop=$item.IMAGES}
                        <li data-target="#carousel" data-slide-to="{$smarty.section.i.index}" class="{if $smarty.section.i.index == 0}active{/if}"></li>
                        {/section}
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        {section name=i loop=$item.IMAGES}
                        <div class="item {if $smarty.section.i.index == 0}active{/if}">
                            <div class="item-responsive item-16by9">
                                <div class="content" style="background: url('/upload/images/news/{$item.IMAGES[i]}');"></div>
                            </div>
                        </div>
                        {/section}
                    </div>

                    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br/><br/>*}
                {if $item.IMAGES}
                    <div class="row">
                        <div class="col-sm-9">
                            <img style="width: 100%" class="img-responsive main-img" src="/upload/images/news/{$item.IMAGES[0]}" alt=""/>
                        </div>
                        <div class="col-sm-3">
                            <table class="sub-table">
                            {section name=i loop=$item.IMAGES start=0}
                                <tr>
                                    <td style="vertical-align: {if $smarty.section.i.first}top{elseif $smarty.section.i.last}bottom{else}middle{/if}">
                                        <img class="img-responsive sub-img" src="/upload/images/news/{$item.IMAGES[i]}" alt=""/>

                                    </td>
                                </tr>
                            {/section}
                            </table>
                        </div>
                    </div>
                    <br/><br/>
                {/if}
                {$item.CONTENT}

                {if $tags}
                <hr/>
                <p><i class="fa fa-tag"></i> Теги:
                    {section name=i loop=$tags}
                        <a href="/news/tag={$tags[i]}">{$tags[i]}</a>{if !$smarty.section.i.last}, {/if}
                    {/section}
                </p>
                {/if}
            </div>
            <div class="col-sm-3">
                {literal}

                {/literal}
            </div>
        </div>
    </div>
</section>
<script>
    $(".sub-img").click(function(){
        $(".main-img").attr('src', $(this).attr('src'));
    });

    $(window).load(function(){
        var h = $(".main-img").height();
        $(".sub-table").height(h);
    });
</script>
{include file="../../common/footer.tpl"}