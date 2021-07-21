{include file="../../common/header.tpl"}

<section id="content">
    <div class="white-section">
        <div class="container catalog-item-container">
            <div class="row catalog-item-header">
                {if $item['SKIN']}
                <div class="col-md-3 hidden-xs hidden-sm">
                    <a class="fancybox" href="/{$upload_images_dir}video/{$item['SKIN']}"><img class="item-skin" src="/{$image_new}" alt="{$page_title}" title="{$page_title}"/></a>
                </div>
                {/if}
                <div class="{if $item['SKIN']}col-md-9 col-sm-12{else}col-sm-12{/if}">
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
                <div class="col-md-12">
                    <a class="fancybox" href="/{$upload_images_dir}video/{$item['SKIN']}"><img class="item-skin-2 visible-sm clearfix" src="/{$image}" alt="{$page_title}" title="{$page_title}"/></a>
{*                    <style>
                        iframe{ width:100%;height:400px;}
                    </style>*}
                    {$item['VIDEO_CODE']}
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
                    {if $item['PRICE']}
                        {include file="../../common/pay.tpl" price=$item['PRICE']}
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="blue-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Понравился материал? Делись!</h3>
                    {include file="../../common/social_buttons.tpl"}
                </div>
                <div class="col-md-6">
                    {if $other_items}
                    <h3>Смотрите далее</h3>
                    <ul class="book">
                        {section name=i loop=$other_items}
                            <li><a href="/video/{$other_items[i].ALIAS}">{$other_items[i].TITLE}</a></li>
                        {/section}
                    </ul>
                    {/if}
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