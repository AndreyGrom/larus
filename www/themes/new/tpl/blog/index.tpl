{include file="../common/header.tpl"}
<div class="blog-top">
    <img id="show-filter"  src="{$theme_dir}img/eq.png" alt="" class="pull-left" style="margin-left: 20px;s">
    <div class="container">
        <form method="get" id="filter-form" class="form-inline tags-form-top">

            {section name=i loop=$categories}
            <div class="checkbox">
                <input class="custom-checkbox" id="filter_{$categories[i].ID}"
                            {if !$cats}
                                checked
                            {else}
                                {section name=j loop=$cats}
                                    {if $cats[j] == $categories[i].ID}checked{/if}
                                {/section}
                            {/if}
                            name="{$categories[i].ID}" value="{$categories[i].ID}" type="checkbox">
                <label for="filter_{$categories[i].ID}"">    {$categories[i].TITLE}
                </label>
            </div>
            {/section}
            <button name="filter-form" type="submit" class="btn btn-default">Применить</button>
            <img id="close-filter" src="{$theme_dir}img/close-filter.png" alt="" class="pull-right">
        </form>
        <script>
            $("#filter-form").submit(function(e){
                e.preventDefault();
                var url = '/blog/cats='
                $('#filter-form input:checkbox:checked').each(function(){
                    url += $(this).val() + ",";
                });
                document.location.href = url;
                return false;
            });
            $("#close-filter, #show-filter").click(function () {
                if ($(".blog-top").hasClass("hide-filter")){
                    $(".blog-top").removeClass("hide-filter");
                } else {
                    $(".blog-top").addClass("hide-filter");
                }
            });
        </script>
    </div>
</div>

<div class="container blog-content">
    <div class="row">
        <div class="blog-items">
            {section name=i loop=$items}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item" onclick="document.location.href = '/blog/{$items[i].ALIAS}{$url_plus}'">
                        <div class="blog-item-title">
                            {$items[i].TITLE}
                        </div>
                        <div class="blog-item-img">
                        {if $items[i].VIDEO_CODE}
                            {$items[i].VIDEO_CODE}1
                        {elseif $items[i].SKIN}

                            <a href="/blog/{$items[i].ALIAS}{$url_plus}">
                                <img class="img-responsive" src="/upload/images/blog/{$items[i].SKIN}" alt="">
                            </a>
                            <div class="blog-item-date">{$items[i].DATE_PUBL}</div>
                            <div class="blog-item-arrow-rect"><img src="{$theme_dir}img/rect-arrow-left.png" alt=""></div>

                        {/if}
                        </div>
                        <div class="blog-item-desc">
                            {$items[i].SHORT_CONTENT}
                        </div>
                    </div>
                </div>
            {/section}
            <div class="clearfix"></div>
            <div class="col-sm-12 text-right">{$pagination}</div>
        </div>
    </div>
</div>



{include file="../common/footer.tpl"}