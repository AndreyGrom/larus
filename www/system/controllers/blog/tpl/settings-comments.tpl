<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="BlogCommentsEnabled" id="BlogCommentsEnabled" class="form-control">
            <option {if $config->BlogCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
            <option {if $config->BlogCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Премодерация комментариев:</label>
    <div class="col-sm-9">
        <select name="BlogCommentsModerationEnabled" id="BlogCommentsModerationEnabled" class="form-control">
            <option {if $config->BlogCommentsModerationEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->BlogCommentsModerationEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Капча в комментариях:</label>
    <div class="col-sm-9">
        <select name="BlogCommentsCaptchaEnabled" id="BlogCommentsCaptchaEnabled" class="form-control">
            <option {if $config->BlogCommentsCaptchaEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->BlogCommentsCaptchaEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="BlogCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
    <div class="col-sm-9">
        <select name="BlogCommentsTemplateView" id="BlogCommentsTemplateView" class="form-control">
            {section name=i loop=$templates_comment_view}
                <option {if $templates_comment_view[i]==$config->BlogCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
            {/section}
        </select>
    </div>
</div>
<div class="form-group">
    <label for="BlogCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
    <div class="col-sm-9">
        <select name="BlogCommentsTemplateForm" id="BlogCommentsTemplateForm" class="form-control">
            {section name=i loop=$templates_comment_form}
                <option {if $templates_comment_form[i]==$config->BlogCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
            {/section}
        </select>
    </div>
</div>