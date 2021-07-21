{include file="../../common/header.tpl"}
<section id="content">
    <div class="white-section" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12"><h2>{$page_title}</h2></div>
                        <div class="clearfix"></div>
                        <br/><br/>
                        {section name=i loop=$items}
                            {if $smarty.section.i.index is div by 3}
                                <div class="clearfix"></div>
                            {/if}
                            <div class="col-sm-4 new-item">
                                {if $items[i].SKIN}
                                    <a href="/video/{$items[i].ID}"><img style="width: 100%" src="{$items[i].SKIN}" alt="" class="img-responsive"/></a>
                                {else}
                                    <a href="/video/{$items[i].ID}"><img src="{$theme_dir}img/no_img_new.jpg" alt="" class="img-responsive" /></a>
                                {/if}
                                <h4><a href="/video/{$items[i].ID}">{$items[i].TITLE}</a></h4>
                                <div>{$items[i].SHORT_CONTENT|strip_tags|truncate:300}</div>

                            </div>

                        {/section}
                        <div class="clearfix"></div>

                        <div class="col-sm-12">{$pagination}</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    {video_categories source="video_categories"}
                    <article class="panel panel-primary panel-category">
                        <div class="panel-heading">
                            <h2 class="panel-title panel-sidebar">Каналы</h2>
                        </div>
                        <div class="panel-body">
                            <ul style="list-style: none;padding-left:10px;" class="video-category">
                                {section name=i loop=$video_categories}
                                    <li>
                                        <h4><a href="/video/{$video_categories[i].ALIAS}"><i class="fa fa-angle-right"></i> {$video_categories[i].TITLE}</a></h4>
                                    </li>
                                {/section}
                            </ul>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>
{include file="../../common/footer.tpl"}