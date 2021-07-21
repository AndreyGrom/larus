<form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-cog"></span> Изменение данных пользователя
                <div class="pull-right">
                    <a class="btn btn-primary btn-xs" href="?c=register"><span class="glyphicon glyphicon-arrow-left"></span></a>
                    <button name="save-user" type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                </div>
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Группа:</label>
                    <div class="col-sm-9">
                        <select name="group_id" id="" class="form-control">
                            {section name=i loop=$groups}
                                <option {if $groups[i].GROUP_ID == $user.GROUP_ID} selected="selected" {/if}value="{$groups[i].GROUP_ID}">{$groups[i].GROUP_NAME}</option>
                            {/section}
                        </select>
                    </div>
                </div>
                <hr/>
{*                <div class="form-group">
                    <label class="col-sm-3 control-label">Фамилия:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.LAST_NAME}" name="last_name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Имя:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.FIRST_NAME}" name="first_name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Отчество:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.FATHER_NAME}" name="father_name" type="text" class="form-control">
                    </div>
                </div>*}
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ник:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.NICK}" name="nick" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.EMAIL}" name="email" type="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Пароль:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.PASSWORD}" name="password" type="text" class="form-control">
                    </div>
                </div>
                {*<div class="form-group">
                    <label class="col-sm-3 control-label">Телефон:</label>
                    <div class="col-sm-9">
                        <input required value="{$user.PHONE}" name="phone" type="tel" class="form-control">
                    </div>
                </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Skype:</label>
                        <div class="col-sm-9">
                            <input value="{$user.SKYPE}" name="skype" type="text" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">ICQ:</label>
                        <div class="col-sm-9">
                            <input value="{$user.ICQ}" name="icq" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Сайт:</label>
                        <div class="col-sm-9">
                            <input value="{$user.SITE}" name="site" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Дата рождения:</label>
                        <div class="col-sm-9">
                            <input value="{$user.BIRTHDAY}" name="birthday" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Страна:</label>
                        <div class="col-sm-9">
                            <input value="{$user.COUNTRY}" name="country" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Регион:</label>
                        <div class="col-sm-9">
                            <input value="{$user.REGION}" name="region" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Город:</label>
                        <div class="col-sm-9">
                            <input value="{$user.CITY}" name="city" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">WMR-кошелек:</label>
                        <div class="col-sm-9">
                            <input value="{$user.WMR}" name="wmr" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">WMZ-кошелек:</label>
                        <div class="col-sm-9">
                            <input value="{$user.WMZ}" name="wmz" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Яндекс-кошелек:</label>
                        <div class="col-sm-9">
                            <input value="{$user.YAMONEY}" name="yamoney" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Qiwi-кошелек:</label>
                        <div class="col-sm-9">
                            <input value="{$user.QIWI}" name="qiwi" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Банковская карта:</label>
                        <div class="col-sm-9">
                            <input value="{$user.CARD}" name="card" type="text" class="form-control">
                        </div>
                    </div>*}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Подпись:</label>
                        <div class="col-sm-9">
                            <textarea name="signature" rows="3" class="form-control">{$user.SIGNATURE}</textarea>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</form>