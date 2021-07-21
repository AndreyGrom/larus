{include file="../../common/header.tpl"}
<section id="content">
    <div class="white-section" style="padding: 0">
        <div class="container">


            <div class="row">
                <div class="col-sm-12" id="forum-container">
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li>[</li>
                            {if $login && $cid}
                            <li><a href="/forum/new-topic/cid={$cid}">Новая тема</a></li>
                            {/if}
                            {if !$login}
                            <li><a href="/register">Регистрация</a></li>
                            <li><a data-toggle="modal" data-target="#autorize-modal" href="#">Вход</a><li>
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
                    {if $content_type = 'forum-list'}
                    {section name=i loop=$forums}
                        {if $forums[i].PARENT == 0}
                            <article class="panel panel-primary">
                                <div class="panel-heading">
                                    <h2 class="panel-title">{$forums[i].TITLE}</h2>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <th></th>
                                            <th style="text-align: left">Форум</th>
                                            <th>Темы</th>
                                            <th>Ответы</th>
                                            <th style="text-align: left">Обновления</th>
                                        </tr>
                                        {section name=j loop=$categories}
                                            {if $categories[j].PARENT == $forums[i].ID}
                                                <tr>
                                                    <td>
                                                        <img src="{$theme_dir}img/forum/forum_image_default.gif" style="margin:0;padding:0;vertical-align:middle;border:0;max-width:60px;max-height:60px;" alt="">
                                                    </td>
                                                    <td style="text-align:left;">
                                                        <a href="/forum{*/fid={$forums[i].ID}*}/cid={$categories[j].ID}">{$categories[j].TITLE}</a>
                                                        <div class="help-block">{$categories[j].DESC}</div>
                                                    </td>
                                                    <td>{$categories[j].TOPICS_COUNT}</td>
                                                    <td>{$categories[j].OTV_COUNT}</td>
                                                    <td style="text-align: left;" class="update-info">
                                                        {if $categories[j].TOPICS_COUNT>0}
                                                        {$categories[j].CATEGORY_DATE_UPDATE}<br/>
                                                        Тема: <a href="/forum/cid={$categories[j].ID}/tid={$categories[j].LAST_TOPIC_ID}">{$categories[j].LAST_TOPIC_NAME}</a>
                                                            <br/>
                                                            Сообщение от: <a href="/register/profile/{$categories[j].LAST_USER_ID}">{$categories[j].LAST_USER_NICK}</a>
                                                        {/if}
                                                    </td>
                                                </tr>
                                            {/if}
                                        {/section}
                                    </table>
                                </div>
                            </article>
                        {/if}
                    {/section}
                    {/if}
                    {if $content_type = 'topic-list'}
                        <article class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title">{$forum_info.TITLE}</h2>
                            </div>
                            <div class="panel-body">
                                {if $topics}
                                <table class="table">
                                    <tr>
                                        <th></th>
                                        <th style="text-align: left">Темы форума</th>
                                        <th>Ответы</th>
                                        <th>Просмотры</th>
                                        <th>Автор темы</th>
                                        <th>Обновления</th>
                                    </tr>
                                    {section name=i loop=$topics}
                                            <tr>
                                                <td>
                                                    {if $topics[i].NO_READ}
                                                        {if $topics[i].CLOSE}
                                                            <img class="img-f-status" title="Закрытая тема. Есть новые сообщения" src="{$theme_dir}img/forum/f_closed_new.gif" alt="">
                                                        {else}
                                                            <img class="img-f-status" title="Есть новые сообщения" src="{$theme_dir}img/forum/br_new.gif" alt="">
                                                        {/if}
                                                    {else}
                                                        {if $topics[i].CLOSE}
                                                            <img class="img-f-status" title="Закрытая тема. Нет новых сообщений" src="{$theme_dir}img/forum/f_closed_nonew.gif" alt="">
                                                        {else}
                                                            <img class="img-f-status" title="Нет новых сообщений" src="{$theme_dir}img/forum/forum_image_default.gif" alt="">
                                                        {/if}
                                                    {/if}

                                                </td>
                                                <td style="text-align: left">
                                                    <a href="/forum/cid={$topics[i].PARENT}/tid={$topics[i].ID}">{$topics[i].NAME}</a>
                                                    {if $topics[i].PAGINATION}<span class="topic-pagination">[ {$topics[i].PAGINATION} ]</span>{/if}
                                                </td>
                                                <td>{$topics[i].OTV_CNT-1}</td>
                                                <td>{$topics[i].VIEWS}</td>
                                                <td><a href="/register/profile/{$topics[i].USER_ID}">{$topics[i].NICK}</a></td>
                                                <td class="update-info">
                                                    {$topics[i].UPDATE_DATE}<br/>
                                                    Сообщение от: <a href="/register/profile/{$topics[i].LAST_USER_ID}">{$topics[i].LAST_USER_NICK}</a>
                                                </td>
                                            </tr>
                                    {/section}
                                </table>
                                {else}
                                    <p>В данном разделе нет ни одной темы :(</p>
                                {/if}
                            </div>
                        </article>

                    {elseif $new_topic || $edit_message}

                        <article class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    {if $new_topic}{$page_title}{/if}
                                    {if $edit_message}
                                        {if $message.TO_TOPIC==1}
                                            Редактирование темы
                                        {else}
                                            Редактирование сообщения
                                        {/if}
                                    {/if}

                                </h2>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="post">
                                    {if $new_topic || $message.TO_TOPIC==1}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Название темы:</label>
                                        <div class="col-sm-9">
                                            <input required value="{$topic_info.NAME}" name="topic-name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Описание темы:</label>
                                        <div class="col-sm-9">
                                            <input value="{$topic_info.DESC}" name="topic-desc" type="text" class="form-control">
                                        </div>
                                    </div>
                                    {/if}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Текст сообщения:</label>
                                        <div class="col-sm-9">
                                            <textarea required name="topic-message" id="topic-message" rows="6" class="form-control">{$message.MESSAGE}</textarea>
                                        </div>
                                        <script>
                                            $(document).ready(function(){
                                                {literal}
                                                $(document).ready(function(){
                                                    $.cleditor.set_rfm('/filemanager');
                                                    var  controls=
                                                            "bold italic underline strikethrough subscript superscript | font size " +
                                                                    "style | color highlight removeformat | bullets numbering | outdent " +
                                                                    "indent | alignleft center alignright justify | " +
                                                                    "link unlink";
                                                    $("#topic-message").cleditor({'controls':controls,'height':220});
                                                });
                                                {/literal}
                                            });
                                        </script>
                                    </div>
                                    {if $new_topic || $message.TO_TOPIC==1}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Опции темы:</label>
                                        <div class="col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="topic-one-message-header" type="checkbox" value=""> Первое сообщение темы сделать шапкой (показывать на всех страницах)
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="topic-top" type="checkbox" value=""> Тема всегда сверху
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="topic-close" type="checkbox" value=""> Закрытая тема
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {/if}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="pull-right">
                                                {if $new_topic || $message.TO_TOPIC==1}
                                                    {if $topic_info}
                                                        <button name="new-topic" class="btn btn-success ">Сохранить</button>
                                                    {else}
                                                    <button name="new-topic" class="btn btn-success ">Создать тему</button>
                                                    {/if}
                                                {else}
                                                    <button name="save-message" class="btn btn-success ">Сохранить</button>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    {/if}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {$pagination}
                        </div>
                    </div>

                    {include file="../stat.tpl"}
                </div>

            </div>
        </div>
    </div>
</section>
{include file="../../common/footer.tpl"}