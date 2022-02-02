<div id="login-modal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Форма входа</h4>
            </div>
            <div class="modal-body">
                <form id="login-form" method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="col-sm-12">E-mail:</label>
                                <input required name="user-email" id="user-email" type="text" class="form-control" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="col-sm-12">Пароль:</label>
                                <input required id="user-password" name="user-password" type="password" class="form-control" placeholder=""/>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" id="login-btn" class="btn-orange load-btn">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#login-form").submit(function(e){
        var img_loader = $('<img src="/themes/new/img/load2.gif">');
        $("#login-btn").prepend(img_loader);
        var form = $(this);
        var data = form.serialize();
        data += "&action=login"
        $.ajax({
            type: "POST",
            data: data,
            url: '/login/',
            success: function(msg){
                img_loader.remove();
                if (msg == 0) {
                    document.location.href = '/';
                } else {
                    alert(msg);
                }
            }
        });
        return false;
    });
</script>