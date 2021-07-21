<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="PartnersEnabled" id="PartnersEnabled" class="form-control">
            <option {if $config->PartnersEnabled == '1'}selected{/if} value="1">Модуль включен</option>
            <option {if $config->PartnersEnabled == '0'}selected{/if} value="0">Модуль отключен</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Кол-во категорий на страницу:</label>
    <div class="col-sm-9">
        <input required value="{$config->PartnersCategoryListPerPage}" name="PartnersCategoryListPerPage" type="text" class="form-control">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Кол-во материалов на страницу:</label>
    <div class="col-sm-9">
        <input required value="{$config->PartnersItemListPerPage}" name="PartnersItemListPerPage" type="text" class="form-control">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Выводить последние материалы:</label>
    <div class="col-sm-9">
        <select name="PartnersItemListSort" id="" class="form-control">
            <option {if $config->PartnersItemListSort == 'DESC'}selected{/if} value="DESC">Вначале</option>
            <option {if $config->PartnersItemListSort == 'ASC'}selected{/if} value="ASC">В конце</option>
        </select>
    </div>
</div>
