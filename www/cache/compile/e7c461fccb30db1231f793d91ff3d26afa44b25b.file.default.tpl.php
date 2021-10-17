<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:23
         compiled from "W:\domains\provoda\www\themes\default\tpl\comments\form\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127899718160fc24b33d9ac8-09093685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c461fccb30db1231f793d91ff3d26afa44b25b' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\comments\\form\\default.tpl',
      1 => 1626993777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127899718160fc24b33d9ac8-09093685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_comment' => 0,
    'comments_system_message' => 0,
    'captcha' => 0,
    'html_plugins_dir' => 0,
    'rand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24b342f9d5_25154166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24b342f9d5_25154166')) {function content_60fc24b342f9d5_25154166($_smarty_tpl) {?><form method="post" class="form-horizontal" id="comments-form">
    <input type="hidden" name="username"/>
    <input type="text" name="useremail" style="width: 1px;height: 1px;padding:0;borde:none;"/>
    <input type="hidden" name="comment-parent" value="0"/>
    <div id="reply-panel" class="alert alert-info" style="display: none">
        <p>
            Вы отвечаете пользователю <span id="reply-user-comment">Андрей Гром</span>
            <a id="no-reply" href="#">Отменить</a>
        </p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['error_comment']->value) {?>
        <div class="alert alert-error">
            <?php echo $_smarty_tpl->tpl_vars['error_comment']->value;?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['comments_system_message']->value) {?>
        <div class="alert alert-warning">
            <?php echo $_smarty_tpl->tpl_vars['comments_system_message']->value;?>

        </div>
    <?php }?>
    <div class="col-md-8">
        <div class="form-group">
            <label class="control-label" for="comment"><i class="fa fa-comment"></i> Комментарий:</label>
            <div class="">
                <textarea required class="form-control" name="comment" id="comment"><?php if (isset($_POST['comment'])) {
echo $_POST['comment'];
}?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <div class="form-group">
            <label class="control-label" for="name"><i class="fa fa-user"></i> Имя:</label>
            <div class="">
                <input required type="text" value="<?php if (isset($_POST['name'])) {
echo $_POST['name'];
}?>" class="form-control" name="name" id="name" placeholder="Введите имя">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="email"><i class="fa fa-envelope"></i> Email:</label>
            <div class="">
                <input type="email" value="<?php if (isset($_POST['email'])) {
echo $_POST['email'];
}?>" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-12 control-label">Код с картинки:</label>
                <div class="col-sm-5">
                    <input required value="" name="captcha" type="tel" class="form-control">
                </div>
                <div class="col-sm-7"><img style="cursor: pointer" class="img-responsive" id="captcha" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
captcha/index.php?hash=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
&sn=comment" alt=""/></div>
            </div>
        </div>
        <?php }?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="width:100%;display:block"><i class="fa fa-comment"></i> Добавить комментарий</button>

        </div>
    </div>
</form>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        
        $(document).ready(function(){
            $.cleditor.set_rfm('/filemanager');
            var  controls=
                    "bold italic underline strikethrough subscript superscript | font size " +
                            "style | color highlight removeformat | bullets numbering | outdent " +
                            "indent | alignleft center alignright justify | " +
                            "link unlink";
            $("#comment").cleditor({'controls':controls,'height':220});
        });
        
    });

    $(".comment-reply").click(function(e){
        e.preventDefault();
        var user_name = $(this).parent(".comment-meta").find(".comment-user").text();
        var area = $("#comment");
        var reply_panel = $("#reply-panel");
        var reply_user_comment = $("#reply-user-comment");
        reply_user_comment.text(user_name);
        reply_panel.show();
        area.val('<p><strong>'+user_name+',</strong>&nbsp;</p');
        var user_parent = $(this).attr("href");
        $("#comments-form").find("input[name='comment-parent']").val(user_parent);
        document.location.href='#comments-form';
    });
    $("#no-reply").click(function(e){
        e.preventDefault();
        $("#comments-form").find("input[name='comment-parent']").val('0');
        $("#reply-panel").hide();
    });
    $("#comments-form").submit(function(e){

    });

    $("#captcha").click(function(){
        $(this).attr('src','<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
captcha/index.php?hash='+new Date().getTime()+'&sn=comment');
    });

    var error = '<?php echo $_smarty_tpl->tpl_vars['error_comment']->value;?>
';
    if (error){
        document.location.href = '#comments-form';
    }

<?php echo '</script'; ?>
><?php }} ?>
