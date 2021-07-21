{include file="../common/header.tpl"}


<section id="content-page">
    <div class="container">
{*        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active">{$page_title}</li>
        </ol>*}
{*        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">{$page_title}</h2>
                <br/>
            </div>
        </div>*}
        <div class="row">
            <div class="col-md-12">
                {$page_content}
                {if $alias == 'about-as'}
                    {include file="../common/collage.tpl"}
                {/if}
            </div>
        </div>

        </div>
    </section>
{include file="../common/footer.tpl"}