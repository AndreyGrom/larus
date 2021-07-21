<div class="form-group">
    <label class="col-sm-3 control-label">Статус:</label>
    <div class="col-sm-9">
        <select name="ShopCommentsEnabled" id="ShopCommentsEnabled" class="form-control">
            <option {if $config->ShopCommentsEnabled == '1'}selected{/if} value="1">Включены</option>
            <option {if $config->ShopCommentsEnabled == '0'}selected{/if} value="0">Отключены</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Премодерация комментариев:</label>
    <div class="col-sm-9">
        <select name="ShopCommentsModerationEnabled" id="ShopCommentsModerationEnabled" class="form-control">
            <option {if $config->ShopCommentsModerationEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->ShopCommentsModerationEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Капча в комментариях:</label>
    <div class="col-sm-9">
        <select name="ShopCommentsCaptchaEnabled" id="ShopCommentsCaptchaEnabled" class="form-control">
            <option {if $config->ShopCommentsCaptchaEnabled == '1'}selected{/if} value="1">Включена</option>
            <option {if $config->ShopCommentsCaptchaEnabled == '0'}selected{/if} value="0">Выключена</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="ShopCommentsTemplateView" class="col-sm-3 control-label">Шаблон комментариев:</label>
    <div class="col-sm-9">
        <select name="ShopCommentsTemplateView" id="ShopCommentsTemplateView" class="form-control">
            {section name=i loop=$templates_comment_view}
                <option {if $templates_comment_view[i]==$config->ShopCommentsTemplateView}selected="selected" {/if} value="{$templates_comment_view[i]}">{$templates_comment_view[i]}</option>
            {/section}
        </select>
    </div>
</div>
<div class="form-group">
    <label for="ShopCommentsTemplateForm" class="col-sm-3 control-label">Шаблон формы комментариев:</label>
    <div class="col-sm-9">
        <select name="ShopCommentsTemplateForm" id="ShopCommentsTemplateForm" class="form-control">
            {section name=i loop=$templates_comment_form}
                <option {if $templates_comment_form[i]==$config->ShopCommentsTemplateForm}selected="selected" {/if} value="{$templates_comment_form[i]}">{$templates_comment_form[i]}</option>
            {/section}
        </select>
    </div>
</div>