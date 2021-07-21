{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar">
                    <h4 class="caption-1"><a href="/catalog"><i class="fa fa fa-angle-double-left"></i> {$page_title}</a></h4>
                    <ul class="list-unstyled left-menu">
                        {section name=i loop=$items}
                            <li><a class="caption-2"  href="/catalog/{$items[i].ALIAS}">{$items[i].TITLE}</a></li>
                        {/section}
                    </ul>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="catalog-item-box category-list catalog-fancy">
                    {if $item}
                        {if $item.IMAGES}
                            {section name=o loop=$item.IMAGES}
                                {if $item.IMAGES[o] == $item.SKIN}
                                    <img src="/upload/images/catalog/{$item.IMAGES[o]}" alt="" style="width: 100%"/>
                                {/if}
                            {/section}
                        {/if}
                    {else}
                        {$desc}
                    {/if}
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">{$pagination}</div>
    </div>
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