{include file="../common/header.tpl"}


<div class="container blog-content">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 blog-content-left">
            <a href="/blog/{$parents[0].ALIAS}">Показать все новости  <img src="{$theme_dir}img/blog-all.png" class="pull-right" alt=""></a>
            {if $next}
            <a href="/blog/{$next.ALIAS}">Следующая статья <img src="{$theme_dir}img/arrow-right.png" class="pull-right" alt=""></a>
            {/if}
            {if $prev}
            <a href="/blog/{$prev.ALIAS}">Предыдущая статья <img src="{$theme_dir}img/arrow-left.png" class="pull-right" alt=""></a>
            {/if}
            <div class="filter-box sv-filter-box">
                <img id="sv-filter-box" class="pull-right" src="{$theme_dir}img/eq.png" alt="">
                <div class="clearbox"></div>
                <form method="post" id="filter-form">
                    <ul class="">
                        {section name=i loop=$categories}
                            <li>
                                <input class="custom-checkbox" id="filter_{$categories[i].ID}"
                                    {if !$cats}
                                        checked
                                    {else}
                                        {section name=j loop=$cats}
                                            {if $cats[j] == $categories[i].ID}checked{/if}
                                        {/section}
                                    {/if}
                                    name="{$categories[i].ID}" value="{$categories[i].ID}" type="checkbox">
                            <label for="filter_{$categories[i].ID}">{$categories[i].TITLE}</label>
                            </li>
                        {/section}
                    </ul>
                    <button name="filter-form" type="submit" class="btn btn-default">Применить</button>
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
                </script>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-content-right">
                <div class="date">{$item.DATE_PUBL}</div>
                <h1 class="blog-title">{$item.TITLE}</h1>
                <div class="blog-content-img">
                    <img class="img-responsive" src="/upload/images/blog/{if $item.SKIN}{$item.SKIN}{else}Z3i5b3DSYHEiDYKNST7k.jpg{/if}" alt="">
                </div>
                {$item.CONTENT}
                <h3>Понравился материал? Поделитесь:</h3>

                    <div class="social-share">
                        <a href="#"><img src="{$theme_dir}img/icon_vk.png" alt=""></a>
                        <a href="#"><img src="{$theme_dir}img/icon_fb.png" alt=""></a>
                        <a href="#"><img src="{$theme_dir}img/icon_ok.png" alt=""></a>
                    </div>
                <br>
                {if isset($comments_form)}
                    <div class="col-md-12">
                        {$comments}
                    </div>

                        <article class="panel panel-primary comment-form">
                            <div class="panel-heading">
                                <h2 class="panel-title"><i class="fa fa-pencil"></i> Добавьте свой комментарий!</h2>
                            </div>
                            <div class="panel-body">
                                {$comments_form}
                                <div class="clearfix"></div>
                            </div>
                        </article>


                {/if}
            </div>
        </div>
    </div>
</div>

<script>
    $("#sv-filter-box").click(function(){
        var p = $(this).parent();
        if (p.hasClass("sv-filter-box")){
            p.removeClass("sv-filter-box");
        } else{
            p.addClass("sv-filter-box");
        }
    });
</script>

{include file="../common/footer.tpl"}