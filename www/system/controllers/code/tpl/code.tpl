<form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                {if $new}Создание нового кода{else}Редактирование кода{/if}
                {if !$new}
                    <span class="pull-right text-lowercase">
                            <a href="?c=code&act=new" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="Создать новый код"><span class="glyphicon glyphicon-copy"></span></a>
                            {if $page_id!=1}
                                <a href="?c=code&act=del&id={$page_id}" class="btn btn-danger btn-xs confirm" data-toggle="tooltip" title="" data-original-title="Удалить код"><span class="glyphicon glyphicon-remove"></span></a>
                            {/if}
                    </span>
                {/if}
            </h3>
        </div>
        <div class="panel-body">
            {if !$new}
                <span class="col-sm-3 text-right">URL кода</span>
                <span class="col-sm-9"><a target="_blank" href="{$site_url}code/{$page_alias}">{$site_url}code/{$page_alias}</a></span>
                <hr/>
            {/if}
            <div class="form-horizontal" role="form">

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Название:</label>
                    <div class="col-sm-9">
                        <input required value="{$page_title}" name="title" id="title" type="text" class="form-control" placeholder="Введите название страницы">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="col-sm-3 control-label">Алиас:</label>
                    <div class="col-sm-9">
                        <input value="{$page_alias}" name="alias" id="alias" type="text" class="form-control" placeholder="Только символы a-z, A-Z, 0-9, -_ " />
                        <p class="help-block">Только символы a-z, A-Z, 0-9, -_ <br/>
                            Можно оставить пустым. Заполнится автоматически</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="template" class="col-sm-3 control-label">Шаблон:</label>
                    <div class="col-sm-9">
                        <select name="template" id="template" class="form-control">
                            {section name=i loop=$templates}
                                <option {if $templates[i]==$page_template}selected="selected" {/if} value="{$templates[i]}">{$templates[i]}</option>
                            {/section}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publ" class="col-sm-3 control-label">Публикация:</label>
                    <div class="col-sm-9">
                        <label><input {if $page_id==1}disabled{/if} type="radio" name="publ" id="publ" value="1" {if $page_publ==1 || $new}checked="checked"{/if} /> Сразу</label>
                        <label><input {if $page_id==1}disabled{/if} {if !$new && $page_publ==0}checked="checked"{/if} type="radio" name="publ" value="0" /> Позже</label>
                    </div>
                </div>
            </div>

            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="content" class="col-sm-12">Код:</label>
                    <div class="col-sm-12">

                        <textarea name="content" id="code" style="width:100%;height:400px;" class="form-control">{$page_content}</textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-description:</label>
                    <div class="col-sm-9">
                        <input value="{$page_meta_desc}" name="meta_description" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Meta-keywords:</label>
                    <div class="col-sm-9">
                        <input value="{$page_meta_keywords}" name="meta_keywords" type="text" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>

        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        editAreaLoader.init({
            id: "code"
            ,start_highlight: true
            ,allow_resize: "both"
            ,allow_toggle: true
            ,word_wrap: true
            ,language: "ru"
            ,syntax: "php"
            ,min_width: "50"
            ,width: "150"
            ,min_height: "400"
            ,display: "later"
        });
    });



    var alias_page_new = false;
    if ($("#alias").val()==''){
        alias_page_new = true;
    }
    $("#title").change(function(){
        if (alias_page_new){
            var str = $(this).val();
            var str2 = SetTranslitRuToLat(str);
            $("#alias").val(str2);
        }
    });
    $("#page-form").submit(function(){
        var alias_page = $(this).find("input[name='alias']").val();
        var pattern = /^[a-z0-9_-]+$/i;
        if (alias_page !='' && !pattern.test(alias_page)){
            alert('Алиас содержит недопустимые символы');
            return false;
        }
    });
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите удалить страницу?")){
            e.preventDefault();
        }
    });
</script>