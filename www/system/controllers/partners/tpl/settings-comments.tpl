<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="PartnersCommentsEnabled" id="PartnersCommentsEnabled" class="form-control">
            <option {if $config->PartnersCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
            <option {if $config->PartnersCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Премодерация комментариев:</label>
    <div class="col-sm-9">
        <select name="PartnersCommentsModerationEnabled" id="PartnersCommentsModerationEnabled" class="form-control">
            <option {if $config->PartnersCommentsModerationEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->PartnersCommentsModerationEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Капча в комментариях:</label>
    <div class="col-sm-9">
        <select name="PartnersCommentsCaptchaEnabled" id="PartnersCommentsCaptchaEnabled" class="form-control">
            <option {if $config->PartnersCommentsCaptchaEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->PartnersCommentsCaptchaEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="PartnersCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
    <div class="col-sm-9">
        <select name="PartnersCommentsTemplateView" id="PartnersCommentsTemplateView" class="form-control">
            {section name=i loop=$templates_comment_view}
                <option {if $templates_comment_view[i]==$config->PartnersCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
            {/section}
        </select>
    </div>
</div>
<div class="form-group">
    <label for="PartnersCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
    <div class="col-sm-9">
        <select name="PartnersCommentsTemplateForm" id="PartnersCommentsTemplateForm" class="form-control">
            {section name=i loop=$templates_comment_form}
                <option {if $templates_comment_form[i]==$config->PartnersCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
            {/section}
        </select>
    </div>
</div>