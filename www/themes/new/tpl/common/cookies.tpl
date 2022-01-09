<div id="coockie-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <p>Как и все,  мы тоже используем куки (файлы cookie)  , потому что они действительно помогают улучшить ваше взаимодействие с сайтом.</p>
            </div>
            <div class="col-sm-2">
                <button id="accept-coockies" class="btn btn-outline-warning" type="submit">Все понятно!</button>
                <p><a href="http://yandex.ru">Мне это не надо</a></p>
            </div>
        </div>
    </div>
</div>
<script>
    $("#accept-coockies").click(function(){
        $.cookie('conf2', '1', { expires: 365, path: '/' });
        $("#coockie-box").hide();
    });

    if ( $.cookie('conf2') == null ) {
        $("#coockie-box").show();
    }
</script>