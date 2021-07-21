

{if $items}
    <div class="col-sm-7">
        {$pagination}
    </div>
    <div class="{if $pagination}col-sm-5{else}col-sm-12{/if} text-right">
        <p style="margin-top: 10px;">Показано видео: {$start}-{$items_count+$start-1} из {$total}</p>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Статус</th>
            <th style="width: 144px;">Действия</th>
        </tr>
    {section name=i loop=$items}
        <tr>
            <td>{$items[i].ID}</td>
            <td><a href="?c=video&id={$items[i].ID}">{$items[i].TITLE}</a></td>
            <td>
                {if $items[i].PUBLIC==1}
                    <span class="glyphicon glyphicon-ok text-success"></span>
                {else}
                    <span class="glyphicon glyphicon-minus text-danger"></span>
                {/if}
            </td>
            <td>
                <a target="_blank" class="btn btn-primary btn-mini" data-original-title="Перейти к материалу" title="" data-toggle="tooltip" href="/video/{if $items[i].ALIAS}{$items[i].ALIAS}{else}{$items[i].ID}{/if}">
                    <span class="glyphicon glyphicon-share-alt"></span>
                </a>
                <a class="btn btn-success btn-mini" data-original-title="Редактировать материал" title="" data-toggle="tooltip" href="?c=video&id={$items[i].ID}">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a class="btn btn-danger btn-mini del-item" data-original-title="Материал будет полностью удален" title="" data-toggle="tooltip" href="?c=video&act=del-item&id={$items[i].ID}&cid={$category_id}">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>
    {/section}
    </table>
    <div class="col-sm-7">
        {$pagination}
    </div>
    <div class="{if $pagination}col-sm-5{else}col-sm-12{/if} text-right">
        <p style="margin-top: 10px;">Показано видео: {$start}-{$items_count+$start-1} из {$total}</p>
    </div>
{else}
    Видео в данном канале нет
{/if}
<script>
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите это сделать??")){
            e.preventDefault();
        }
    });
</script>