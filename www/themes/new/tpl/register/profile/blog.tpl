{include file="../../common/header.tpl"}

<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                {if $user.GROUP_ID == 6}
                <h2>
                    Мой блог
                    <a href="/register/blog-item=0/" class="btn btn-primary btn-sm pull-right">Добавить запись</a>
                </h2>
                <p>&nbsp;</p>
    `                {if $items}
                        <ul>
                            {section name=i loop=$items}
                                <li>
                                    <a class="pull-left" href="/register/blog-item={$items[i].ID}">{$items[i].TITLE}</a>
                                    <span class="pull-right">
                                        [<a class="confirm" href="/register/remove-blog-item={$items[i].ID}">delete</a>]
                                    </span>
                                </li>
                            {/section}
                        </ul>
                    {else}
                        <div class="alert alert-info">
                            Вы еще не добавляли записи в свой блог
                        </div>
                    {/if}`
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



{include file="../../common/footer.tpl"}