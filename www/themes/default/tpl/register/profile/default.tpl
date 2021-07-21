{include file="../../common/header.tpl"}
<section id="content">
    <div class="white-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <h3 class="page-title">{$page_title}</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            {if $error}
                                <div class="alert alert-danger">
                                    <p>{$error}</p>
                                </div>
                            {/if}
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                {if $config->ProfileFieldAvatarShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Аватар:</label>
                                        <div class="col-sm-5">
                                            <input {if $config->ProfileFieldAvatarRequired} required{/if} name="avatar" value="{$user.NICK}" type="file" class="">
                                        </div>
                                        <div class="col-sm-4">
                                            {if $user.AVATAR_SRC}
                                                <img class="img-responsive" src="/{$user.AVATAR_SRC}" alt=""/>
                                            {/if}
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldNickShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ник:</label>
                                        <div class="col-sm-9">
                                            <input disabled {if $config->ProfileFieldNickRequired} required{/if} value="{$user.NICK}" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldFirstNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Фамилия:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldFirstNameRequired} required{/if} value="{$user.LAST_NAME}" name="last_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Имя:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldNameRequired} required{/if} value="{$user.FIRST_NAME}" name="first_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldFatherNameShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Отчество:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldFatherNameRequired} required{/if} value="{$user.FATHER_NAME}" name="father_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email:</label>
                                    <div class="col-sm-9">
                                        <input required value="{$user.EMAIL}" name="email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Новый пароль:</label>
                                    <div class="col-sm-9">
                                        <input required value="" name="password" type="text" class="form-control">
                                    </div>
                                </div>
                                {if $config->ProfileFieldPhoneShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Телефон:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldPhoneRequired} required{/if} value="{$user.PHONE}" name="phone" type="tel" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldSkypeShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Skype:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldSkypeRequired} required{/if} value="{$user.SKYPE}" name="skype" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldICQShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">ICQ:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldICQRequired} required{/if} value="{$user.ICQ}" name="icq" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldSiteShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Сайт:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldSiteRequired} required{/if} value="{$user.SITE}" name="site" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldBirthdayShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Дата рождения:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldBirthdayRequired} required{/if} value="{$user.BIRTHDAY}" name="birthday" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldCountryShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Страна:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldCountryRequired} required{/if} value="{$user.COUNTRY}" name="country" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldRegionShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Регион:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldRegionRequired} required{/if} value="{$user.REGION}" name="region" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldCityShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Город:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldCityRequired} required{/if} value="{$user.CITY}" name="city" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldWMRShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">WMR-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldWMRRequired} required{/if} value="{$user.WMR}" name="wmr" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldWMZShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">WMZ-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldWMZRequired} required{/if} value="{$user.WMZ}" name="wmz" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldYaMoneyShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Яндекс-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldYaMoneyRequired} required{/if} value="{$user.YAMONEY}" name="yamoney" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldQiwiShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Qiwi-кошелек:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldQiwiRequired} required{/if} value="{$user.QIWI}" name="qiwi" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldCardShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Банковская карта:</label>
                                        <div class="col-sm-9">
                                            <input {if $config->ProfileFieldCardRequired} required{/if} value="{$user.CARD}" name="card" type="text" class="form-control">
                                        </div>
                                    </div>
                                {/if}
                                {if $config->ProfileFieldSignatureShow}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Подпись:</label>
                                        <div class="col-sm-9">
                                            <textarea {if $config->ProfileFieldSignatureRequired} required{/if} name="signature" rows="3" class="form-control">{$user.SIGNATURE}</textarea>
                                        </div>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" style="margin-top:11px;" class="btn btn-primary lg btn-block">Сохранить</button>
                                    </div>
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
{include file="../../common/footer.tpl"}