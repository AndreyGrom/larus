{include file="../../common/header.tpl"}

<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                {if $user.GROUP_ID == 6}
                <h2>Добавление/редактирование записи в блоге</h2>
                <p>&nbsp;</p>
                <form method="post">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-common" data-toggle="tab">Общие</a></li>
                            <li><a href="#tab-content" data-toggle="tab">Содержимое</a></li>
                            <li><a href="#tab-images" data-toggle="tab">Изображения</a></li>
                            <li><a href="#tab-seo" data-toggle="tab">SEO</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-common" class="tab-pane fade in active">
                                <h3>Общие данные</h3>
                                {include file="./item-common.tpl"}
                            </div>
                            <div id="tab-content" class="tab-pane fade">
                                <h3></h3>
                                {include file="./item-content.tpl"}
                            </div>
                            <div id="tab-images" class="tab-pane fade">
                                <h3></h3>
                                {include file="./item-images.tpl"}
                            </div>
                            <div id="tab-seo" class="tab-pane fade">
                                <h3></h3>
                                {include file="./item-seo.tpl"}
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button name="save-blog" type="submit" class="btn btn-success "><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                    </div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </form>
                {else}
                    <p>&nbsp;</p>
                    <div class="alert alert-danger">
                        У вас нет доступа к этой странице
                    </div>
                {/if}
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                {include file="../../common/profile-sidebar.tpl"}
            </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="{$html_plugins_dir}init_mce.js"></script>
{if isset($blog)}
<script>
    $('#upload-images').upload({
        id: {$blog.ID},
    });
    $(function(){
        $('.image-list').on('click', '.remove-image-item', function(e) {
            e.preventDefault();
            RemoveImage($(this).attr('data-name'), $(this).attr('data-id'), $(this).closest('li'));
        });
        $('.image-list').on('click', '.skin-image-item', function(e) {
            e.preventDefault();
            SkinImage($(this).attr('data-name'), $(this).attr('data-id'), $(".skin-image-item"), $(this));
        });
    });
</script>
{/if}
{include file="../../common/footer.tpl"}