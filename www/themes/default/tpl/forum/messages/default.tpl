{include file="../../common/header.tpl"}
<section id="content">
    <div class="white-section">
        <div class="container">
            <div class="row">


                <div class="col-sm-8" id="forum-container">
                    <div class="pull-left pagination-container">{$pagination}</div>
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li>[</li>
                            {if $login && $cid}
                                <li><a href="/forum/new-topic/cid={$cid}">Новая тема</a></li>
                            {/if}
                            {if !$login}
                            <li><a href="/register">Регистрация</a></li>
                            <li><a data-toggle="modal" data-target="#autorize-modal" href="#">Вход</a><li>;
                                {/if}
                            <li><a href="">Правила форума</a></li>
                            <li><a href="">Новые сообщения</a></li>
                            {if $login}
                            <li><a href="/login/out">Выход</a><li>
                                {/if}
                            <li>]</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    {if $messages && count($messages) > 0}
                        <article class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title">{$topic_info.NAME}</h2>
                            </div>
                        </article>
                        {section name=i loop=$messages}
                        <article  id="message-id-{$messages[i].ID}" class="panel panel-primary forum-post text-center">
                            <div class="panel-body" style="padding-top: 0px; padding-left: 0px;padding-right:0px">
                                <div class="col-sm-3" style="padding-left: 0px;">
                                    <div class="post-header user-nick">{$messages[i].NICK}</div>
                                    <p>{if $messages[i].AVATAR_SRC}
                                        <img class="img-responsive" src="/{$messages[i].AVATAR_SRC}" alt=""/>
                                    {else}
                                        <img class="img-responsive" src="/{$theme_dir}/img/forum/anonim.jpg" alt=""/>
                                    {/if}</p>
                                    <p>Сообщений: {$messages[i].USER_MESSAGE_COUNT}</p>
                                    <p>
                                        Статус:
                                        {if $messages[i].USER_STATUS}
                                            <span class="text-success">Онлайн</span>
                                        {else}
                                            <span class="text-danger">Оффлайн</span>
                                        {/if}
                                    </p>
                                </div>
                                <div class="col-sm-9" style="padding-left: 0px;padding-right:0px">
                                    <div class="post-header">{$messages[i].DATE_CREATE}</div>
                                    <div class="post-message text-left">{$messages[i].MESSAGE_BB}</div>
                                    {if $messages[i].DATE_UPDATE}
                                        <p style="font-size:10px;color:#ae6969;margin-top:10px;text-align:left;">Отредактировано {$messages[i].DATE_UPDATE}</p>
                                    {/if}
                                    <hr style="margin: 0"/>
                                    <div class="signature text-left" style="font-size:12px;color:#a7a7a7;">{$messages[i].SIGNATURE}</div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="pull-left">
                                    <a target="_blank" href="/register/profile/{$messages[i].ID}">
                                        <img title="Профиль пользователя" src="{$theme_dir}img/forum/p_profile.gif" style="margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    <a target="_blank" href="#" onclick="alert('Данная функция недоступна для этого сйта');return false;">
                                        <img title="Личное сообщение" src="{$theme_dir}img/forum/p_pm.gif" style="margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    {if $messages[i].USER_SITE}
                                    <a target="_blank" href="{$messages[i].USER_SITE}">
                                        <img title="Домашняя страница" src="{$theme_dir}img/forum/p_www.gif" style="cursor:pointer;margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    {/if}
                                </div>
                                {if $login}
                                <div class="pull-right">
                                    <a href="#" data-target="#message-id-{$messages[i].ID}" class="postQuote">
                                        <img title="Цитировать" src="{$theme_dir}img/forum/p_quote.gif" style="margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    <a data-toggle="modal" data-target="#SendMessageAdmin" href="#">
                                        <img title="Сообщить администрации об этом сообщении" src="{$theme_dir}img/forum/p_report.gif" style="margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    <a href="/forum/edit-message/cid={$cid}/tid={$topic_info.ID}/mid={$messages[i].ID}">
                                        <img title="Изменить сообщение" src="{$theme_dir}img/forum/p_edit.gif" style="margin:0;padding:0;border:0;" alt="">
                                    </a>
                                    <a class="{if $messages[i].TO_TOPIC}remove-topic{else}delete-message{/if}" href="/forum/delete-message/cid={$cid}/tid={$topic_info.ID}/mid={$messages[i].ID}"">
                                        <img title="{if $messages[i].TO_TOPIC}Удалить тему{else}Удалить сообщение{/if}" src="{$theme_dir}img/forum/p_delete.gif" style="margin:0;padding:0;border:0;" id="dbo131" alt="">
                                    </a>
                                </div>
                                {/if}
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        {/section}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                {$pagination}
                            </div>
                        </div>
                        {if $show_stats}
                        {include file="../stat.tpl"}
                        {/if}
                        <div id="SendMessageAdmin" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Настучать администрации на сообщение</h4>
                                    </div>
                                    <div class="modal-body">
                                       <p>Сообщение:</p>
                                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                                        <p class="help-block">Администрато будет уведомлён о названии темы и ссылке на это сообщение.</p>

                                        <p class="help-block">Эта форма должна быть использована ТОЛЬКО для доклада о содержимом сообщения
                                            и ни в коем случае не как средство общения и связи.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Стукануть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(".delete-message").click(function(e){
                                if (!confirm("Вы действительно хотите удалить сообщение?")){
                                    e.preventDefault();
                                }
                            });
                            $(".remove-topic").click(function(e){
                                if (!confirm("Удаление первого сообщения приведет к удалению всей темы. Продолжить?")){
                                    e.preventDefault();
                                }
                            });
                        </script>
                        {if $login && !$topic_info.CLOSE}
                        {include file="../form/default.tpl"}
                        {/if}
                    {/if}

                </div>

                <div class="col-sm-4">
                    {include file="../../common/sidebar.tpl"}
                </div>

            </div>


        </div>
    </div>
</section>
{include file="../../common/footer.tpl"}