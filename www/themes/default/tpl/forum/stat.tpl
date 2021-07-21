<article class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">Дополнительная информация</h2>
    </div>
    <div class="panel-body" style="padding:0">
        <div class="post-header" style="padding-left:10px;">Пользователи онлайн</div>
        <div class="col-sm-1" style="padding-left:10px;">
            <img style="display: inline-block" class="img-responsive" src="{$theme_dir}img/forum/online.gif" alt=""/>
        </div>
        <div class="col-sm-11">
            {section name=i loop=$users_online}
                <a href="/register/profile/{$users_online[i]}.ID">{$users_online[i].NICK}</a>{if !$smarty.section.i.last}, {/if}
            {/section}
        </div>
        <div class="clearfix"></div>

        <div class="post-header" style="padding-left:10px;">Статистика форума</div>
        <div class="col-sm-1" style="padding-left:10px;">
            <img style="display: inline-block" class="img-responsive" src="{$theme_dir}img/forum/stats.gif" alt=""/>
        </div>
        <div class="col-sm-11">
            Всего создано <strong>{$topics_count}</strong> тем, в которые добавлено <strong>{$otv_count}</strong> ответов.
            <br/>
            Зарегистрировано {$users_count} участников.
        </div>
        <div class="clearfix"></div>
    </div>
</article>