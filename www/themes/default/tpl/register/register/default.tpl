{include file="../../common/header.tpl"}
<section id="content">
    <div class="white-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="page-title">{$page_title}</h3>

                    <div class="row">
                        <div class="col-sm-10">
                            {if $error}
                                <div class="alert alert-danger">
                                    <p>{$error}</p>
                                </div>
                            {/if}
                            <form class="form-horizontal" method="post" id="register-form">
                                {if $config->RegisterFieldNickShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ник:</label>
                                        <div class="col-sm-9">
                                            <input style="margin:0" {if $config->RegisterFieldNickRequired} required{/if} value="{$smarty.post.nick}" name="nick" id="nick" type="text" class="form-control" placeholder="От 2 до 20 символов">
                                            <div style="margin-bottom:20px;margin-top:0" class="help-block" id="system_message_nick"></div>
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldFirstNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Фамилия:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldFirstNameRequired} required{/if} value="{$smarty.post.last_name}" name="last_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Имя:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldNameRequired} required{/if} value="{$smarty.post.first_name}" name="first_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldFatherNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Отчество:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldFatherNameRequired} required{/if} value="{$smarty.post.father_name}" name="father_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email:</label>
                                    <div class="col-sm-9">
                                        <input style="margin:0" required value="{$smarty.post.email}" name="email" id="email" type="email" class="form-control">
                                        <div style="margin-bottom:20px;margin-top:0" class="help-block" id="system_message_email"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Задайте пароль:</label>
                                    <div class="col-sm-9">
                                        <input style="margin:0" required value="{$smarty.post.password}" name="password" id="password" type="password" class="form-control" placeholder="От 4 до 20 символов">
                                        <div style="margin-bottom:20px;margin-top:0" class="help-block" id="system_message_password"></div>
                                    </div>
                                </div>
                                {if $config->RegisterFieldPhoneShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Телефон:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldPhoneRequired} required{/if} value="{$smarty.post.phone}" name="phone" type="tel" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldSkypeShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Skype:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldSkypeRequired} required{/if} value="{$smarty.post.skype}" name="skype" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldICQShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">ICQ:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldICQRequired} required{/if} value="{$smarty.post.icq}" name="icq" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldSiteShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Сайт:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldSiteRequired} required{/if} value="{$smarty.post.site}" name="site" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldBirthdayShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Дата рождения:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldBirthdayRequired} required{/if} value="{$smarty.post.birthday}" name="birthday" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldCountryShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Страна:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldCountryRequired} required{/if} value="{$smarty.post.country}" name="country" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldRegionShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Регион:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldRegionRequired} required{/if} value="{$smarty.post.region}" name="region" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldCityShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Город:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldCityRequired} required{/if} value="{$smarty.post.city}" name="city" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldWMRShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">WMR-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldWMRRequired} required{/if} value="{$smarty.post.wmr}" name="wmr" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldWMZShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">WMZ-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldWMZRequired} required{/if} value="{$smarty.post.wmz}" name="wmz" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldYaMoneyShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Яндекс-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldYaMoneyRequired} required{/if} value="{$smarty.post.yamoney}" name="yamoney" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldQiwiShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Qiwi-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldQiwiRequired} required{/if} value="{$smarty.post.qiwi}" name="qiwi" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldCardShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Банковская карта:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->RegisterFieldCardRequired} required{/if} value="{$smarty.post.card}" name="card" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->RegisterFieldSignatureShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Подпись:</label>
                                        <div class="col-sm-9">
                                            <textarea {if $config->RegisterFieldSignatureRequired} required{/if} name="signature" rows="3" class="form-control">{$smarty.post.signature}</textarea>
                                            <span class="help-block">Может быть пустым. Выводится в ваших постах на форуме</span>
                                        </div>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Код с картинки:</label>
                                    <div class="col-sm-5">
                                        <input required value="" name="captcha" id="captcha" type="tel" class="form-control">
                                        <div style="margin-bottom:20px;margin-top:0" class="help-block" id="system_message_captcha"></div>
                                        <button type="submit" name="register" style="margin-top:11px;" class="btn btn-primary lg btn-block">Зарегистрироваться</button>
                                    </div>
                                    <div class="col-sm-4"><img style="cursor: pointer" class="img-responsive" id="captcha" src="{$html_plugins_dir}captcha/index.php?hash={$rand}&sn=register" alt=""/></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    {include file="../../common/sidebar.tpl"}
                </div>

            </div>


        </div>
    </div>
</section>
<script>
    $("#captcha").click(function(){
        $(this).attr('src','{$html_plugins_dir}captcha/index.php?hash='+new Date().getTime()+'&sn=register');
    });
    {literal}
    var CheckParam = false;
    function CheckP(elm, ParamName){
        if (elm.val() == false) {
            CheckParam = true;
            return false;
        }
        time=(new Date()).getTime();
        delay=500;
        elm.attr({'keyup':time});
        elm.off('keydown');
        elm.off('keypress');
        elm.on('keydown',function(e){$(this).attr({'keyup':time});});
        elm.on('keypress',function(e){$(this).attr({'keyup':time});});
        var system_message = $("#system_message_"+ParamName);
        setTimeout(function(){
            oldtime=parseFloat(elm.attr('keyup'));
            if(oldtime<=(new Date()).getTime()-delay & oldtime>0 & elm.attr('keyup')!='' & typeof elm.attr('keyup')!=='undefined'){
                /*Ваша функция после окончания печати*/
                var param = elm.val();
                system_message.text('Проверка...');
                system_message.css("color","green");
                elm.css("border","green solid 1px");
                $.ajax({
                    type: 'POST',
                    url: '{$html_controllers_dir}register/ajax.php',
                    data: ParamName+'='+param,
                    success: function(result){
                        if (result != 0){
                            system_message.text(result);
                            system_message.css("color","red");
                            elm.css("border","red solid 1px");
                            CheckParam = false;
                        } else {
                            system_message.text('Все верно');
                            system_message.css("color","green");
                            elm.css("border","green solid 1px");
                            CheckParam = true;
                        }
                    }
                });
                elm.removeAttr('keyup');
            }
        },delay);
    }
    {/literal}

    {if $config->RegisterFieldNickShow}
    $('#nick').keyup(function(e){
        CheckP($(this), 'nick');
    });
    $('#nick').change(function(e){
        CheckP($(this), 'nick');
    });
    CheckP($('#nick'), 'nick');
    {/if}

    $('#email').keyup(function(e){
        CheckP($(this), 'email');
    });
    $('#email').change(function(e){
        CheckP($(this), 'email');
    });
    CheckP($('#email'), 'email');

    $('#password').keyup(function(e){
        CheckP($(this), 'password');
    });
    $('#password').change(function(e){
        CheckP($(this), 'password');
    });
    CheckP($('#password'), 'password');

    $('#captcha').keyup(function(e){
        CheckP($(this), 'captcha');
    });
    $('#password').change(function(e){
        CheckP($(this), 'captcha');
    });
    CheckP($('#captcha'), 'captcha');

    $("#register-form").submit(function(){
        if (!CheckParam){
            alert('Пожалуста, правильно заполните форму');
            return false;
        }
    });

</script>
{include file="../../common/footer.tpl"}

