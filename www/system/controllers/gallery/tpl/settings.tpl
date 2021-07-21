<form method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                Настройки модуля "{$config->GalleryModuleTitle}"
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Статус:</label>
                    <div class="col-sm-9">
                        <select name="GalleryEnabled" id="GalleryEnabled" class="form-control">
                            <option {if $config->GalleryEnabled == '1'}selected{/if} value="1">Модуль включен</option>
                            <option {if $config->GalleryEnabled == '0'}selected{/if} value="0">Модуль отключен</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Название модуля:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryModuleTitle}" name="GalleryModuleTitle" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Размер изображения категории:</label>
                    <div class="col-sm-2">
                        <input required value="{$config->GalleryImageWidthCategoryList}" name="GalleryImageWidthCategoryList" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1"><p class="form-control">X</p></div>
                    <div class="col-sm-2">
                        <input required value="{$config->GalleryImageHeightCategoryList}" name="GalleryImageHeightCategoryList" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1"><p class="form-control">px</p></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Размер изображения материалов:</label>
                    <div class="col-sm-2">
                        <input required value="{$config->GalleryImageWidthItemList}" name="GalleryImageWidthItemList" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1"><p class="form-control">X</p></div>
                    <div class="col-sm-2">
                        <input required value="{$config->GalleryImageHeightItemList}" name="GalleryImageHeightItemList" type="text" class="form-control">
                    </div>
                    <div class="col-sm-1"><p class="form-control">px</p></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Кол-во категорий на страницу:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryCategoryListPerPage}" name="GalleryCategoryListPerPage" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Кол-во материалов на страницу:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryItemListPerPage}" name="GalleryItemListPerPage" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Выводить последние материалы:</label>
                    <div class="col-sm-9">
                        <select name="GalleryItemListSort" id="" class="form-control">
                            <option {if $config->GalleryItemListSort == 'DESC'}selected{/if} value="DESC">Вначале</option>
                            <option {if $config->GalleryItemListSort == 'ASC'}selected{/if} value="ASC">В конце</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Комментарии:</label>
                    <div class="col-sm-9">
                        <select name="GalleryCommentsEnabled" id="GalleryCommentsEnabled" class="form-control">
                            <option {if $config->GalleryCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
                            <option {if $config->GalleryCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="GalleryCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
                    <div class="col-sm-9">
                        <select name="GalleryCommentsTemplateView" id="GalleryCommentsTemplateView" class="form-control">
                            {section name=i loop=$templates_comment_view}
                                <option {if $templates_comment_view[i]==$config->GalleryCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
                            {/section}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="GalleryCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
                    <div class="col-sm-9">
                        <select name="GalleryCommentsTemplateForm" id="GalleryCommentsTemplateForm" class="form-control">
                            {section name=i loop=$templates_comment_form}
                                <option {if $templates_comment_form[i]==$config->GalleryCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
                            {/section}
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" name="save-settings" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>
        </div>
    </div>
</form>