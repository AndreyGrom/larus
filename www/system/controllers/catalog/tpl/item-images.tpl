<div class="form-horizontal" role="form">
    <div class="form-group">
        <div class="col-sm-12">
            {if $new}
                <span class="form-control">Сначала сохраните материал</span>
            {else}
                <div id="upload" class="btn btn-success btn-large"><span>Выбрать файл<span></div>
                <span id="status"></span>
            {/if}
        </div>
        {if !$new}
            <div class="col-sm-12">
                <div id="item-images">
                    <ul class="image-list clearfix">
                        {section name=i loop=$new_images}
                            {include file="image.tpl" image=$images[i] new_image=$new_images[i]}
                        {/section}
                    </ul>
                </div>
            </div>
            <script>
                $(function(){
                    var btnUpload=$('#upload');
                    var status=$('#status');
                    new AjaxUpload(btnUpload, {
                        action: '{$html_controllers_dir}catalog/upload.php?id={$item_id}',
                        name: 'image',
                        onSubmit: function(file, ext){
                            if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
                                status.text('Поддерживаемые форматы JPG, PNG или GIF');
                                return false;
                            }
                            status.text('Загрузка...');
                        },
                        onComplete: function(file, response){
                            status.text('');
                            if(response !==""){
                                $(".image-list").append(response);
                            } else{
                                $('<li></li>').appendTo('#files').text(file).addClass('error');
                            }
                        }
                    });
                    jQuery('body').on('click', 'a.skin', function(e) {
                        e.preventDefault();
                        var el = $(this);
                        var skin = el.attr("href");
                        $.ajax({
                            type: "POST",
                            url: "{$html_controllers_dir}catalog/upload.php",
                            data: "id={$item_id}&skin="+skin,
                            success: function(msg){
                                $("a.skin").show();
                                el.hide();
                            }
                        });
                    });
                    jQuery('body').on('click', 'a.del-image', function(e) {
                        e.preventDefault();
                        var el = $(this);
                        var image = el.attr("href");
                        $.ajax({
                            type: "POST",
                            url: "{$html_controllers_dir}catalog/upload.php",
                            data: "id={$item_id}&image="+image,
                            success: function(msg){
                                el.parent().parent().remove();
                            }
                        });
                    });
                });
            </script>
        {/if}

        <div class="form-group">
            <label for="template" class="col-sm-3 control-label">Или видео:</label>
            <div class="col-sm-9">
                <select name="video" class="form-control">
                    <option value="0"></option>
                    {section name=i loop=$videos}
                        <option {if $videos[i].ID==$item.VIDEO_ID}selected="selected" {/if} value="{$videos[i].ID}">{$videos[i].TITLE}</option>
                    {/section}
                </select>
            </div>
        </div>

    </div>
</div>
