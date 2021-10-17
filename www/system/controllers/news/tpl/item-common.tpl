<div class="form-horizontal" role="form">
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Дата публикации:</label>
        <div class="col-sm-9">
            <input required value="{$item.DATE_PUBL}" name="date_publ" type="text" class="datepicker form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Дата изменения:</label>
        <div class="col-sm-9">
            <input required value="{$item.DATE_EDIT}" name="date_edit" type="text" class="datepicker form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Название:</label>
        <div class="col-sm-9">
            <input required value="{$item_title}" name="title" id="title" type="text" class="form-control" placeholder="Введите название материала">
        </div>
    </div>
    <div class="form-group">
        <label for="alias" class="col-sm-3 control-label">Алиас:</label>
        <div class="col-sm-9">
            <input value="{$item_alias}" name="alias" id="alias" type="text" class="form-control" placeholder="Только символы a-z, A-Z, 0-9, -_ " />
            <p class="help-block">Только символы a-z, A-Z, 0-9, -_ <br/>
                Можно оставить пустым. Заполнится автоматически</p>
        </div>
    </div>
    <div class="form-group">
        <label for="parent" class="col-sm-3 control-label">Категории:</label>
        <div class="col-sm-9">
            <div style="height: 100px;overflow:auto;border:1px solid #ccc;padding: 3px;">
                {include file="menu_.tpl"}
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="template" class="col-sm-3 control-label">Шаблон:</label>
        <div class="col-sm-9">
            <select name="template" id="template" class="form-control">
                {section name=i loop=$templates}
                    <option {if $templates[i]==$item_template}selected="selected" {/if} value="{$templates[i]}">{$templates[i]}</option>
                {/section}
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="publ" class="col-sm-3 control-label">Публикация:</label>
        <div class="col-sm-9">
            <label><input type="radio" name="publ" id="publ" value="1" {if $item_publ==1 || $new}checked="checked"{/if} /> Сразу</label>
            <label><input {if !$new && $item_publ==0}checked="checked"{/if} type="radio" name="publ" value="0" /> Позже</label>
        </div>
    </div>
    <div class="form-group">
        <label for="template" class="col-sm-3 control-label">Блог:</label>
        <div class="col-sm-9">
            <select name="blog" class="form-control">
                <option value="0">Не отображать</option>
                <option {if $item.BLOG == 1}selected{/if} value="1">Отображать</option>
            </select>
        </div>
    </div>
</div>

<script>
    $(function(){
        $(".datepicker").datepicker();
    });
</script>