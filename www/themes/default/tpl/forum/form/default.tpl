<form method="post" class="form-horizontal" id="comments-form">
<article class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">Добавить сообщение</h2>
    </div>
    <div class="panel-body">
        {if $system_message}
            <div class="alert alert-error">
                {$system_message}
            </div>
        {/if}
        <div class="col-sm-12">
            <div class="form-group">
                <div class="">
                    <textarea class="form-control" name="topic-message" id="topic-message" style="height: 186px;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="col-sm-12">
            <div class="form-group">
                <button type="submit" name="add-message" class="btn btn-primary pull-right">Добавить ответ</button>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</article>

</form>

<script type="text/javascript" src="{$html_plugins_dir}bbcode/xbb.js.php"></script>
<script>
    XBB.path = '{$html_plugins_dir}bbcode';
    XBB.textarea_id = 'topic-message';
    XBB.area_width = '100%';
    XBB.area_height = '200px';
    XBB.state = 'plain'; // 'plain' or 'highlight'
    XBB.lang = 'ru_utf8';
    XBB.init();

    $(".postQuote").click(function(e){
        e.preventDefault();
        var target = $(this).attr('data-target');
        var message = getSelectedText();
        if (message == ''){
            message = $(target).find(".post-message").text();
        }
        var nick = $(target).find(".user-nick").text();
        message = '[quote='+nick+']'+message+'[/quote]';
        var iframe = document.getElementById(XBB.iframe_id).contentWindow;
        iframe.document.forms.xbb.xbb_textarea.value = message;
        console.log(iframe);
    });
</script>