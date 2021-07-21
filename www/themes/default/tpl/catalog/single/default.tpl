{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar">
                    <h4 class="caption-1"><a href="/catalog"><i class="fa fa fa-angle-double-left"></i> {$category.TITLE}</a></h4>
                    <ul class="list-unstyled left-menu">
                        {section name=i loop=$items}
                            <li {if $alias == $items[i].ALIAS} class="active" {/if}><a class="caption-2" href="/catalog/{$items[i].ALIAS}">{$items[i].TITLE}</a></li>
                        {/section}
                    </ul>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="catalog-item-box" >
                    {if $item}
                        <h3 class="text-center">{$item.MODEL}</h3>
                        {if $item.VIDEO_ID}
                            [widjet name="vid" params="{$item.VIDEO_ID}"]
                        {else}
                            {if $item.IMAGES}
                                {section name=o loop=$item.IMAGES}
                                    {if $item.IMAGES[o] == $item.SKIN}

                                        <img src="/upload/images/catalog/{$item.IMAGES[o]}" alt="" style="width: 100%"/>
                                    {/if}
                                {/section}
                            {/if}
                        {/if}

                        <div>{$item.CONTENT}</div>

                        {if $item.IMAGES}
                            <div class="row catalog-fancy">
                                {section name=o loop=$item.IMAGES}
                                    {if $item.IMAGES[o] != $item.SKIN}
                                        <div class="col-sm-4">
                                            <a class="fancy" href="/upload/images/catalog/{$item.IMAGES[o]}">
                                                <img src="/upload/images/catalog/{$item.IMAGES[o]}" alt="" style="width: 100%"/>
                                            </a>
                                        </div>
                                    {/if}
                                {/section}
                            </div>
                        {/if}

                        {if $item.LINK}

                            <br/>
                            <br/>
                            <a target="_blank" class="btn btn-primary" href="{$item.LINK}">Пперейти в магазин</a>
                            <br/>
                            <br/>
                        {/if}
                    {else}
                        {$desc}
                    {/if}
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">{$pagination}</div>
   
</section>
<script>

    $(".catalog-fancy a.fancy").fancybox({
        padding : 0,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });

</script>
{include file="../../common/footer.tpl"}