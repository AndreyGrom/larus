<a href="#" data-target="#modal-types" data-toggle="modal" class="btn btn-primary">Добавить</a>

<hr>
{if $items}
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th style="width: 144px;">Действия</th>
        </tr>
    {section name=i loop=$items}
        <tr>
            <td>{$items[i].ID}</td>
            <td><a href="?c=shop&id={$items[i].ID}">{$items[i].TITLE}</a></td>
            <td>
                <a data-id="{$items[i].ID}" data-title="{$items[i].TITLE}" class="btn btn-success btn-xs type-edit" data-original-title="Редактировать" title="" data-toggle="tooltip" href="#">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a class="btn btn-danger btn-xs confirm" data-original-title="Удалить" title="" data-toggle="tooltip" href="?c=shop&action=remove-type&id={$items[i].ID}">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>
    {/section}
    </table>
{else}
    Ничего нет
{/if}
<script>
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите это сделать??")){
            e.preventDefault();
        }
    });
    $(".type-edit").click(function (e) {
        var id = $(this).attr('data-id');
        var title = $(this).attr('data-title');
        var modal = $("#modal-types");
        modal.find("#id").val(id)
        modal.find("#title").val(title)
        modal.modal('show');
    });
</script>
<div id="modal-types" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Добавление/редактирование типа</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label style="text-align: left" class="col-sm-12 control-label">Название типа</label>
                            <div class="col-sm-12">
                                <input type="hidden" name="id" id="id" value="0">
                                <input required value="" name="title" id="title" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="text-right">
                            <button name="save-type" type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>