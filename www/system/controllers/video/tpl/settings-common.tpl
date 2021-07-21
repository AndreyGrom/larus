<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="VideoEnabled" id="VideoEnabled" class="form-control">
            <option {if $config->VideoEnabled == '1'}selected{/if} value="1">Модуль включен</option>
            <option {if $config->VideoEnabled == '0'}selected{/if} value="0">Модуль отключен</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Кол-во каналов на страницу:</label>
    <div class="col-sm-9">
        <input required value="{$config->VideoCategoryListPerPage}" name="VideoCategoryListPerPage" type="text" class="form-control">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Кол-во материалов на страницу:</label>
    <div class="col-sm-9">
        <input required value="{$config->VideoItemListPerPage}" name="VideoItemListPerPage" type="text" class="form-control">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Выводить последние материалы:</label>
    <div class="col-sm-9">
        <select name="VideoItemListSort" id="" class="form-control">
            <option {if $config->VideoItemListSort == 'DESC'}selected{/if} value="DESC">Вначале</option>
            <option {if $config->VideoItemListSort == 'ASC'}selected{/if} value="ASC">В конце</option>
        </select>
    </div>
</div>
