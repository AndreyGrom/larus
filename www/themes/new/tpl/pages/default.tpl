{include file="../common/header.tpl"}


<div class="container page-content">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            {if $page.ID == 6}
                [widjet name="mail_form" params="11"]
            {else}
                <div class="page-img">
                    <img src="/upload/images/pages/{$page.IMAGE}" class="img-responsive" alt="">
                    <div class="page-img-mask"></div>
                    <div class="page-title">
                        {$page_title}
                    </div>
                    {if $page.TITLE2}
                    <div class="page-title2">
                        {$page.TITLE2}
                    </div>
                    {/if}
                </div>
                {if $sub_pages}
                    {section name=i loop=$sub_pages}
                        <div class="sub-page-item" style="background-image: url('/upload/images/pages/{$sub_pages[i].IMAGE}')">
                            <a href="/{$sub_pages[i].ALIAS}" class="sub-page-link">
                                {$sub_pages[i].TITLE}
                                <img src="{$theme_dir}img/arrow-right.png" class="pull-right" alt="">
                            </a>
                            <div class="sub-page-item-mask"></div>
                        </div>

                    {/section}
                {/if}
            {/if}
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="page-content-right {if $sub_pages_status}sub_pages_status{/if}">
                {$page_content}
            </div>
        </div>
    </div>
</div>



{include file="../common/footer.tpl"}