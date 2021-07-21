
<form id="page-form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-film"></span> {if $smarty.get.sid}Редактирование слайдера{else}Создание слайдера{/if}
                <div class="pull-right">
                    <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                    {if $smarty.get.sid}
                    <a href="?c=sliders&act=remove&sid={$slider.slider.ID}" class="btn btn-danger btn-xs confirm-remove-slider"><span class="glyphicon glyphicon-trash"></span> Удалить слайдер</a>
                    {/if}
                </div>
            </h3>
        </div>
        <div class="panel-body">
            {if $smarty.get.sid}
                <div class="alert alert-info">
                    <p>Код для вывода слайдера: <input style="width: 255px;" type="text" readonly value='[widjet name="ag_slider" params="{$slider.slider.ID}"]'/></p>
                    <p class="help-block">Вставьте его в любое место на вашем сайте (шаблоны, контент)</p>
                </div>
            {/if}
            <h4><a data-toggle="collapse" data-parent="" href="#slider-params-box">Параметры слайдера <span class="caret"></span></a></h4>
            <div class="form-horizontal panel-collapse collapse{if !$smarty.get.sid} in{/if}" id="slider-params-box">
                <div class="form-group">
                    <label for="slider_name" class="col-sm-3 control-label">Название слайдера:</label>
                    <div class="col-sm-9">
                        <input required="" value="{$slider.slider.NAME}" name="slider_name" id="slider_name" type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_desc" class="col-sm-3 control-label">Описание слайдера:</label>
                    <div class="col-sm-9">
                        <textarea name="slider_desc" id="slider_desc" class="form-control">{$slider.slider.DESC}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Вид слайдера:</label>
                    <div class="col-sm-6">
                        <select name="slider_view" id="slider_view" class="form-control">
                            {section name=i loop=$templates}
                                <option {if $slider.slider.VIEW==$templates[i].alias}selected="selected" {/if} value="{$templates[i].alias}">{$templates[i].name}</option>
                            {/section}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_init" class="col-sm-12 control-label" style="text-align: left">Инициализация слайдера:</label>
                    <div class="col-sm-12">
                        <textarea name="slider_init" id="slider_init" class="form-control textarea_auto" style="height: 50px">{$slider.slider.DESC}</textarea>
                    </div>
                </div>
            </div>
            {if $smarty.get.sid}
            <hr/>
            <h4><a data-toggle="collapse" data-parent="" href="#slider-add">Добавить слайд <span class="caret"></span></a></h4>
            <div class="form-horizontal panel-collapse collapse" id="slider-add">
                <div class="form-group">
                    <label for="slider_item_image" class="col-sm-3 control-label">Изображение:</label>
                    <div class="col-sm-9">
                        <input value="" name="slider_item_image" id="slider_item_image" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_url" class="col-sm-3 control-label">URL:</label>
                    <div class="col-sm-9">
                        <input value="" name="slider_item_url" id="slider_item_url" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_title" class="col-sm-3 control-label">Заголовок:</label>
                    <div class="col-sm-9">
                        <input name="slider_item_title" id="slider_item_title" type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_desc" class="col-sm-3 control-label">Текст:</label>
                    <div class="col-sm-9">
                        <textarea name="slider_item_desc" id="slider_item_desc" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            {/if}
            {if $slider.items}
                <hr/>
            <h4>Слайды</h4>
                <table class="table" id="table-items">
                    <tr>
                        <th>Изображение</th>
                        <th>URL</th>
                        <th>Заголовок</th>
                        <th colspan="3"></th>
                    </tr>
                    {section name=i loop=$slider.items}
                    <tr id="{$slider.items[i].ID}">
                        <td><img src="/{$slider.items[i].NEW_IMAGE}" alt=""/></td>
                        <td>{$slider.items[i].URL}</td>
                        <td>{$slider.items[i].TITLE}</td>
                        <td style="width: 30px">
                            {if $smarty.section.i.index > 0}
                                <a href="#" class="upper"><span title="Переместить наверх" class="glyphicon glyphicon-arrow-up" style="cursor: pointer"></span></a>
                            {/if}
                        </td>
                        <td style="width: 30px">
                            {if $smarty.section.i.index < $smarty.section.i.total-1}
                                <a href="#" class="downer"><span title="Переместить вниз" class="glyphicon glyphicon-arrow-down" style="cursor: pointer"></span></a>
                            {/if}
                        </td>
                        <td>
                            <a href="?c=sliders&act=edit&sid={$slider.slider.ID}&id={$slider.items[i].ID}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="?c=sliders&act=del&sid={$slider.slider.ID}&id={$slider.items[i].ID}" class="btn btn-danger btn-xs confirm"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    {/section}
                </table>
            {/if}
        </div>
    </div>
</form>
<form method="post" id="form-items-sort" style="display: none;">
    <input type="hidden" name="items_sort" id="items_sort"/>
</form>
{section name=i loop=$templates}
    <textarea id="teplate_{$templates[i].alias}" style="display: none;">{if $slider.slider.VIEW==$templates[i].alias && $slider.slider.INIT!==''}{$slider.slider.INIT}{else}{$templates[i].init}{/if}</textarea>
{/section}
<script>
    $("#slider_view").change(function(){
        var alias = $(this).val();
        var i =$("#teplate_"+alias).text();
        $("#slider_init").text(i);
    });
    $("#slider_view").change();
    $(".confirm").click(function(e){
        if (!confirm('Вы действительно хотите удалить слайд?')){
            e.preventDefault();
        }
    });
    $(".confirm-remove-slider").click(function(e){
        if (!confirm('Вы действительно хотите удалить слайдер? Будут также удалены все изображения, относящиеся к этому слайдеру')){
            e.preventDefault();
        }
    });
    $(function(){
        $('.upper').click(move_up);
        $('.downer').click(move_down);
        function move_up(eventObject){
            var curr_li = $(this).parent().parent();
            var prev_li = $(curr_li).prev();
            prev_li.insertAfter(curr_li);
            getTbl();
        }

        function move_down(eventObject){
            var curr_li = $(this).parent().parent();
            var next_li = $(curr_li).next();
            next_li.insertBefore(curr_li);
            getTbl();
        }

        function getTbl(){
            var table = document.getElementById("table-items");
            var rows = table.tBodies[0].rows;
            var debugStr = "";
            for (var i=0; i<rows.length; i++) {
                debugStr += rows[i].id+";";
            }
            $("#items_sort").val(debugStr);
            $("#form-items-sort").submit();
        }
    });
    jQuery(function(){
        jQuery('.textarea_auto').autoResize();
    });
    setInterval('$(".textarea_auto").change()', 1000);
    $(document).ready(function(){

    });
</script>