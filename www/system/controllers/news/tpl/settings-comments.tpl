<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="NewsCommentsEnabled" id="NewsCommentsEnabled" class="form-control">
            <option {if $config->NewsCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
            <option {if $config->NewsCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Премодерация комментариев:</label>
    <div class="col-sm-9">
        <select name="NewsCommentsModerationEnabled" id="NewsCommentsModerationEnabled" class="form-control">
            <option {if $config->NewsCommentsModerationEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->NewsCommentsModerationEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Капча в комментариях:</label>
    <div class="col-sm-9">
        <select name="NewsCommentsCaptchaEnabled" id="NewsCommentsCaptchaEnabled" class="form-control">
            <option {if $config->NewsCommentsCaptchaEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->NewsCommentsCaptchaEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="NewsCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
    <div class="col-sm-9">
        <select name="NewsCommentsTemplateView" id="NewsCommentsTemplateView" class="form-control">
            {section name=i loop=$templates_comment_view}
                <option {if $templates_comment_view[i]==$config->NewsCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
            {/section}
        </select>
    </div>
</div>
<div class="form-group">
    <label for="NewsCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
    <div class="col-sm-9">
        <select name="NewsCommentsTemplateForm" id="NewsCommentsTemplateForm" class="form-control">
            {section name=i loop=$templates_comment_form}
                <option {if $templates_comment_form[i]==$config->NewsCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
            {/section}
        </select>
    </div>
</div>