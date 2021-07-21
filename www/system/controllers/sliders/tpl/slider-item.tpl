<form id="page-form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-film"></span> Редактирование слайда
                <div class="pull-right">
                    <button name="slider-item-edit" type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                </div>
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="slider_item_image" class="col-sm-3 control-label">Изображение:</label>
                    <div class="col-sm-9">
                        <div class="col-sm-6"><input value="" name="slider_item_image" id="slider_item_image" type="file"></div>
                        <div class="col-sm-6"><img src="{$slide.IMAGE_NEW}" alt=""/></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_url" class="col-sm-3 control-label">URL:</label>
                    <div class="col-sm-9">
                        <input value="{$slide['URL']}" name="slider_item_url" id="slider_item_url" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_title" class="col-sm-3 control-label">Заголовок:</label>
                    <div class="col-sm-9">
                        <input value="{$slide['TITLE']}" name="slider_item_title" id="slider_item_title" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_item_desc" class="col-sm-3 control-label">Текст:</label>
                    <div class="col-sm-9">
                        <textarea name="slider_item_desc" id="slider_item_desc" class="form-control">{$slide['DESC']}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="post" id="form-items-sort" style="display: none;">
    <input type="hidden" name="items_sort" id="items_sort"/>
</form>
<script>
    $(".confirm").click(function(e){
        if (!confirm('Вы действительно хотите удалить слайд?')){
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
</script>