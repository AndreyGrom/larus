<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="VideoCommentsEnabled" id="VideoCommentsEnabled" class="form-control">
            <option {if $config->VideoCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
            <option {if $config->VideoCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Премодерация комментариев:</label>
    <div class="col-sm-9">
        <select name="VideoCommentsModerationEnabled" id="VideoCommentsModerationEnabled" class="form-control">
            <option {if $config->VideoCommentsModerationEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->VideoCommentsModerationEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Капча в комментариях:</label>
    <div class="col-sm-9">
        <select name="VideoCommentsCaptchaEnabled" id="VideoCommentsCaptchaEnabled" class="form-control">
            <option {if $config->VideoCommentsCaptchaEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->VideoCommentsCaptchaEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="VideoCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
    <div class="col-sm-9">
        <select name="VideoCommentsTemplateView" id="VideoCommentsTemplateView" class="form-control">
            {section name=i loop=$templates_comment_view}
                <option {if $templates_comment_view[i]==$config->VideoCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
            {/section}
        </select>
    </div>
</div>
<div class="form-group">
    <label for="VideoCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
    <div class="col-sm-9">
        <select name="VideoCommentsTemplateForm" id="VideoCommentsTemplateForm" class="form-control">
            {section name=i loop=$templates_comment_form}
                <option {if $templates_comment_form[i]==$config->VideoCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
            {/section}
        </select>
    </div>
</div>