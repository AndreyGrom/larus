{include file="../../common/header.tpl"}


<div class="container blog-content">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 blog-content-left">
            [widjet name="mail_form" params="11"]
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="blog-content-right">
                {*<div class="date">{$item.DATE_PUBL}</div>*}
                <p>&nbsp;</p>
                <h1 class="blog-title">{$item.TITLE}</h1>
                <div class="blog-content-img">
                    {if $item.SKIN}
                    <img class="img-responsive" src="/upload/images/partners/{$item.SKIN}" alt="">
                    {/if}
                </div>
                {$item.CONTENT}
{*                <h3>Понравился материал? Поделитесь:</h3>

                <div class="social-share">
                    <a href="#"><img src="{$theme_dir}img/icon_vk.png" alt=""></a>
                    <a href="#"><img src="{$theme_dir}img/icon_fb.png" alt=""></a>
                    <a href="#"><img src="{$theme_dir}img/icon_ok.png" alt=""></a>
                </div>
                <br>
                {if isset($comments_form)}
                    {$comments}
                    <article class="panel panel-primary comment-form">
                        <div class="panel-heading">
                            <h2 class="panel-title"><i class="fa fa-pencil"></i> Добавьте свой комментарий!</h2>
                        </div>
                        <div class="panel-body">
                            {$comments_form}
                            <div class="clearfix"></div>
                        </div>
                    </article>
                {/if}*}
            </div>
        </div>
    </div>
</div>



{include file="../../common/footer.tpl"}