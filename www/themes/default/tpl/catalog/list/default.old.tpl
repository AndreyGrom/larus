{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                {*    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li class="active">{$category.TITLE}</li>
                    </ol>*}
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog-item catalog-fancy">
                    {section name=i loop=$categories}
                        {$categories[i].DESC}
                        <br/>
                        {section name=j loop=$items}
                            {if $categories[i].ID ==  $items[j].PARENTS}

                                                {if $items[j].IMAGES}
                                                    {section name=o loop=$items[j].IMAGES}

                                                        {if $items[j].IMAGES[o] == $items[j].SKIN}

                                                            <img src="/upload/images/catalog/{$items[j].IMAGES[o]}" alt="" style="width: 100%"/>
                                                        {/if}
                                                    {/section}
                                                {/if}

                                              {*  <h2 class="text-center">{$items[j].TITLE}</h2>
                                                <br/>*}
                                                <div>{$items[j].CONTENT}</div>

                                                {if $items[j].IMAGES}
                                                    <div class="row">
                                                        {section name=o loop=$items[j].IMAGES}
                                                            {if $items[j].IMAGES[o] != $items[j].SKIN}
                                                                <div class="col-sm-4">
                                                                    <a class="fancy" href="/upload/images/catalog/{$items[j].IMAGES[o]}">
                                                                        <img src="/upload/images/catalog/{$items[j].IMAGES[o]}" alt="" style="width: 100%"/>
                                                                    </a>
                                                                </div>
                                                            {/if}
                                                        {/section}
                                                    </div>
                                                {/if}

                                                {if $items[j].LINK}
                                                    <br/>
                                                    <br/>
                                                    <a target="_blank" class="btn btn-primary" href="{$items[j].LINK}">Пперейти в магазин</a>
                                                    <br/>
                                                    <br/>
                                                {/if}



                            {/if}
                        {/section}
                        {$categories[i].DESC2}
                    {/section}

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12">{$pagination}</div>
                </div>
            </div>

        </div>
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