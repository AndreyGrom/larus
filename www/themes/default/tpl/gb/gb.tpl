{include file="../common/header.tpl"}

<section id="content">
    <div class="white-section">
        <div class="container gb-page">
            <div class="row">
                <div class="col-md-12">
                    <h2>{$config->GbModuleTitle}</h2>
                    <br/><br/>
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
</section>
{include file="../common/footer.tpl"}