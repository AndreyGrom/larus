<ul class="{if !$sub}comment-list{else}reply{/if}">
    {section name=i loop=$comments}
    <li id="comment-{$comments[i].ID}" class="comment">
        <div>
            <div class="comment-body">
                <div class="comment-meta">
                    <span class="comment-user">
                        <i class="fa fa-user"></i>
                        {$comments[i].USER_NAME}</span>
                    <span class="comment-date">
                        <i class="fa fa-clock-o"></i>
                        {$comments[i].DATE_PUBL}
                    </span>
                    <a href="{$comments[i].ID}" class="comment-reply">
                        <i class="fa fa-reply"></i> Ответить
                    </a>
                </div>
                <div class="comment-text">{$comments[i].USER_COMMENT}</div>
            </div>
        </div>
        {if isset($comments[i].SUB)}
            {include file=$tpl_name comments=$comments[i].SUB sub=true}
        {/if}
    </li>
    {/section}
</ul>
