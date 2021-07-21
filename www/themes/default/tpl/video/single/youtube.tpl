{include file="../../common/header.tpl"}

<section id="content">
    <div class="white-section" style="padding-top: 0px;">
        <div class="container catalog-item-container">
            <div class="row catalog-item-header">
                <div class="col-sm-12">
                    <div class="alert alert-info">
                        <h3><i class="fa fa-flag"></i> {$page_title}</h3>
                        <p><i class="fa fa-list"></i> Каналы:
                            {section name=i loop=$parents}
                                <a href="/video/{$parents[i].ALIAS}">{$parents[i].TITLE}</a>{if !$smarty.section.i.last}, {/if}
                            {/section}
                        </p>
                        <p><i class="fa fa-tag"></i> Теги:
                            {section name=i loop=$tags}
                                <a href="/video/tag={$tags[i]}">{$tags[i]}</a>{if !$smarty.section.i.last}, {/if}
                            {/section}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <article class="col-md-9">
                    {$item['VIDEO_CODE']}
                    <img src="{$site_url}go.php?url={$item.SKIN}" alt="{$page_title}" style="float: left;margin:0 10px 10px 0;"/>
                    {$item['CONTENT']}

                    {if $files}
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        {section name=i loop=$files}
                        <p>
                            <a href="/upload/files/video/{$files[i]['name']}">
                                <i class="fa fa-download"></i> Скачать {$files[i]['display_name']} {*({$files[i]['size']/1024})*}
                            </a>
                        </p>
                        {/section}
                    </div>
                    {/if}
                </article>
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

    {if isset($comments_form)}
    <div class="white-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5><i class="fa fa-comment"></i> Есть что добавить или возникли вопросы? Пишите в комментариях!</h5>
                    <br/>
                    {$comments}
                </div>
                <div class="col-md-12">
                    <article class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title"><i class="fa fa-pencil"></i> Добавьте свой комментарий!</h2>
                        </div>
                        <div class="panel-body">
                            {$comments_form}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {/if}
</section>
{include file="../../common/footer.tpl"}