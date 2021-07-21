<form method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                Настройки модуля "{$config->ForumModuleTitle}"
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Статус:</label>
                    <div class="col-sm-9">
                        <select name="ForumEnabled" id="ForumEnabled" class="form-control">
                            <option {if $config->ForumEnabled == '1'}selected{/if} value="1">Модуль включен</option>
                            <option {if $config->ForumEnabled == '0'}selected{/if} value="0">Модуль отключен</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Название модуля:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->ForumModuleTitle}" name="ForumModuleTitle" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" name="save-settings" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>
        </div>
    </div>
</form>