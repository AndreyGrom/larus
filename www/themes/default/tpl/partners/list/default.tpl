{include file="../../common/header.tpl"}
<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                       {* <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Представители</li>
                        </ol>*}
                        <div class="clearfix"></div>
                        <br/><br/>
                        <div class="row">
                            {section name=i loop=$categories}
                                <div class="col-sm-12"> <h3>{$categories[i].TITLE}</h3></div>
                                <br/>
                                {section name=j loop=$items}
                                    {if $categories[i].ID ==  $items[j].PARENTS}
                                        <div class="col-sm-4">
                                            <div class="partners-item">
                                                {if $items[j].SKIN}
                                                    <a href="/partners/{$items[j].ALIAS}">
                                                        <img src="/upload/images/partners/{$items[j].SKIN}" alt="" style="width: 100%"/>
                                                    </a>
                                                {/if}
                                                <h4><a href="/partners/{$items[j].ALIAS}">{$items[j].TITLE}</a></h4>


                                                <div>{$items[j].SHORT_CONTENT}</div>
                                                <div class="partners-item-footer text-right">
                                                    <a class="btn btn-primary" href="/partners/{$items[j].ALIAS}">Читать далее</a>
                                                </div>
                                            </div>
                                        </div>
                                    {/if}

                                  {*      {if $smarty.section.i.index is odd}
                                            <div class="clearfix"></div>
                                        {/if}*}
                                    {/section}
                                <div class="clearfix"></div>
                                <hr/>

                                <br/>
                                {/section}

                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>

            </div>

        </div>
</section>
{include file="../../common/footer.tpl"}