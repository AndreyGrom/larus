{include file="../../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
           {*     <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/blog">Блог</a></li>
                    <li class="active">{$page_title}</li>
                </ol>*}
                <h2>{$page_title}</h2>
                <br/><br/>
                {if $item.IMAGES}
                    <div class="row">
                        <div class="col-sm-9">
                            <img style="width: 100%;" class="img-responsive main-img" src="/upload/images/blog/{$item.IMAGES[0]}" alt=""/>
                        </div>
                        <div class="col-sm-3">
                            <table class="sub-table">
                                {section name=i loop=$item.IMAGES start=0}
                                    <tr>
                                        <td style="vertical-align: {if $smarty.section.i.first}top{elseif $smarty.section.i.last}bottom{else}middle{/if}">
                                            <img class="img-responsive sub-img" src="/upload/images/blog/{$item.IMAGES[i]}" alt=""/>

                                        </td>
                                    </tr>
                                {/section}
                            </table>
                        </div>
                    </div>
                    <br/><br/>
                {/if}
                {$item.CONTENT}

                {if $files}
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        {section name=i loop=$files}
                            <p>
                                <a href="/upload/files/blog/{$files[i]['name']}">
                                    <i class="fa fa-download"></i> Скачать {$files[i]['display_name']} {*({$files[i]['size']/1024})*}
                                </a>
                            </p>
                        {/section}
                    </div>
                {/if}
                {if $item.FILE1 && $item.FILE1_NAME}
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/blog/{$item.FILE1}">
                                <i class="fa fa-download"></i> Скачать {$item.FILE1_NAME} {*({$files[i]['size']/1024})*}
                            </a>
                        </p>
                    </div>
                {/if}
                {if $item.FILE2 && $item.FILE2_NAME}
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/blog/{$item.FILE2}">
                                <i class="fa fa-download"></i> Скачать {$item.FILE2_NAME} {*({$files[i]['size']/1024})*}
                            </a>
                        </p>
                    </div>
                {/if}
                {if $item.FILE3 && $item.FILE3_NAME}
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/blog/{$item.FILE3}">
                                <i class="fa fa-download"></i> Скачать {$item.FILE3_NAME} {*({$files[i]['size']/1024})*}
                            </a>
                        </p>
                    </div>
                {/if}

                {if $tags}
                    <hr/>
                    <p><i class="fa fa-tag"></i> Теги:
                        {section name=i loop=$tags}
                            <a href="/blog/tag={$tags[i]}">{$tags[i]}</a>{if !$smarty.section.i.last}, {/if}
                        {/section}
                    </p>
                {/if}
                <hr/>

                    <h3>Понравился материал? Делись!</h3>
                    {include file="../../common/social_buttons.tpl"}



                {if isset($comments_form)}
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
                {/if}
            </div>
            <div class="col-md-3">
                {literal}

                {/literal}
            </div>
        </div>



    </div>
</section>
<script>
    $(".sub-img").click(function(){
        $(".main-img").attr('src', $(this).attr('src'));
    });
    $(window).load(function(){
        var h = $(".main-img").height();
        $(".sub-table").height(h);
    });
</script>
{include file="../../common/footer.tpl"}