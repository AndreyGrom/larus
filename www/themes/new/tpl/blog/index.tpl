{include file="../common/header.tpl"}
<div class="blog-top">
    <div class="container">
        <form method="get" id="filter-form" class="form-inline tags-form-top">
            {section name=i loop=$categories}
            <div class="checkbox">
                <label><input
                            {if !$cats}
                                checked
                            {else}
                                {section name=j loop=$cats}
                                    {if $cats[j] == $categories[i].ID}checked{/if}
                                {/section}
                            {/if}
                            name="{$categories[i].ID}" value="{$categories[i].ID}" type="checkbox"> {$categories[i].TITLE}</label>
            </div>
            {/section}
            <button name="filter-form" type="submit" class="btn btn-default">Применить</button>
        </form>
    </div>
</div>

<div class="container blog-content">
    <div class="row">
        <div class="blog-items">
            {section name=i loop=$items}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item" onclick="document.location.href = '/blog/{$items[i].ALIAS}'">
                        <div class="blog-item-title">
                            {$items[i].TITLE}
                        </div>
                        <div class="blog-item-img">
                            <a href="/blog/{$items[i].ALIAS}">
                                <img class="img-responsive" src="/upload/images/blog/{if $items[i].SKIN}{$items[i].SKIN}{else}Z3i5b3DSYHEiDYKNST7k.jpg{/if}" alt="">
                            </a>
                            <div class="blog-item-date">{$items[i].DATE_PUBL}</div>
                            <div class="blog-item-arrow-rect"><img src="{$theme_dir}img/rect-arrow-left.png" alt=""></div>
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
</script>

{include file="../common/footer.tpl"}