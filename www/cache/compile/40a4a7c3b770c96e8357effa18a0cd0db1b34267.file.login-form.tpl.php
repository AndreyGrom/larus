<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 11:52:51
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3992464661ee2d4fa69850-55211279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a4a7c3b770c96e8357effa18a0cd0db1b34267' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\login-form.tpl',
      1 => 1643003046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3992464661ee2d4fa69850-55211279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee2d4fa6d6e8_69764659',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee2d4fa6d6e8_69764659')) {function content_61ee2d4fa6d6e8_69764659($_smarty_tpl) {?><div id="login-modal" class="modal fade">
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
                                <input required id="user-password" name="user-password" type="text" class="form-control" placeholder=""/>
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
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }} ?>
