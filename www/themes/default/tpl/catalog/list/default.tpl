{include file="../../common/header.tpl"}
<section id="content">
    <div class="container catalog-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="catalog-fancy">
                    {section name=i loop=$categories}
                        <br/>

                        <h4 class="text-center">{$categories[i].TITLE}</h4>


                        <div class="row">
                            {section name=j loop=$categories[i].SUB}
                                <div class="col-sm-4">
                                    <div class="catalog-item">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="/catalog/{$categories[i].SUB[j].ALIAS}">
                                                    <img class="img-responsive" src="/upload/images/catalog/{$categories[i].SUB[j].IMAGE}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a class="caption-2" href="/catalog/{$categories[i].SUB[j].ALIAS}">
                                                    {$categories[i].SUB[j].TITLE}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/section}
                        </div>
                    {/section}
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