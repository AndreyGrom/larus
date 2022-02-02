<div class="form-horizontal" role="form">
    <div class="form-group">
        <div class="col-sm-12">
            {if !$blog}
                <span class="form-control">Сначала сохраните материал</span>
            {else}
                <label>Видео</label>
                <select name="video" class="form-control">
                    <option value="0">--Выбрать</option>
                    {section name=i loop=$videos}
                        <option {if $videos[i].ID == $blog.VIDEO}selected{/if} value="{$videos[i].ID}">{$videos[i].TITLE}</option>
                    {/section}
                </select>
                <br>
                <p>Если выбрано видео, то главное фото в плитке отображаться не будет, будет отображено указанное видео</p>
                <hr>
                <a id="upload-images" href="#" class="btn btn-dark">Выбрать файлы</a>
                <span id="upload-images-status"></span>
                <div class="alert alert-info">
                    <p>Код вызова: <input id="wijet-images" onclick="this.select()" class="form-control" style="display:inline-block;width: 340px" type="text" readonly value='[w&&&idjet name="blog_images" params="{$blog.ID}"]'/></p>
                    <p>Разместите его в любом тексте, и там будут выведены все изображения, кроме главного</p>
                </div>
                <script>
                    var el = $('#wijet-images');
                    el.val(el.val().replace(/&&&/ig, ""));
                </script>
            {/if}
        </div>
        {if $blog}
            <div class="col-sm-12">
                <div id="item-images">
                    <ul class="image-list">
                        {section name=i loop=$blog.IMAGES}
                            {include file="image.tpl" image=$blog.IMAGES[i] id=$blog.ID skin=$blog.SKIN}
                        {/section}
                    </ul>

                </div>
            </div>
        {/if}
    </div>
</div>
