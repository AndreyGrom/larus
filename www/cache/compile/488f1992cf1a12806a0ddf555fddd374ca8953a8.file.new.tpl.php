<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-03 17:37:00
         compiled from "D:\data\domains\provoda\www\system\controllers\mailforms\tpl\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49704617061d30a0c6994a4-68912635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488f1992cf1a12806a0ddf555fddd374ca8953a8' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\mailforms\\tpl\\new.tpl',
      1 => 1626992972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49704617061d30a0c6994a4-68912635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'form_name' => 0,
    'page_id' => 0,
    'form_id' => 0,
    'form_email_1' => 0,
    'form_email_2' => 0,
    'form_captcha' => 0,
    'form_success_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61d30a0c722040_88189208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d30a0c722040_88189208')) {function content_61d30a0c722040_88189208($_smarty_tpl) {?><form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-envelope"></span>
                <?php if ($_smarty_tpl->tpl_vars['new']->value) {?>Создание новой формы<?php } else { ?>Редактирование формы "<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
"<?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                    <span class="pull-right text-lowercase">
                            <a href="?c=mailforms&act=new" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="Создать новую форму"><span class="glyphicon glyphicon-copy"></span></a>
                        <?php if ($_smarty_tpl->tpl_vars['page_id']->value!=1) {?>
                            <a href="?c=mailforms&act=del-form&fid=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" class="btn btn-danger btn-xs confirm" data-toggle="tooltip" title="" data-original-title="Удалить форму"><span class="glyphicon glyphicon-remove"></span></a>
                        <?php }?>
                    </span>
                <?php }?>
            </h3>
        </div>
        <div class="panel-body">
            <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                <a class="btn btn-info btn-xs" href="?c=mailforms&fid=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&act=fields">Поля формы</a>
                <a class="btn btn-info btn-xs" href="?c=mailforms&fid=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&act=template">Шаблон формы</a>
                <hr/>
                <div class="alert alert-info">
                    <p>Код вызова формы: <input onclick="this.select()" class="form-control" style="display:inline-block;width: 270px" type="text" readonly value='[widjet name="mail_form" params="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"]'/></p>
                </div>
            <?php }?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="form_name" class="col-sm-3 control-label">Название:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" name="form_name" id="form_name" type="text" class="form-control" placeholder="Введите название формы">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_1" class="col-sm-3 control-label">Email 1:</label>
                    <div class="col-sm-9">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['form_email_1']->value;?>
" name="email_1" id="email_1" type="email" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_2" class="col-sm-3 control-label">Email 2:</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $_smarty_tpl->tpl_vars['form_email_2']->value;?>
" name="email_2" id="email_2" type="email" class="form-control" />
                    </div>
                </div>
                <div class="form-group text-left">
                    <label for="captcha" class="col-sm-3 control-label">Капча:</label>
                    <div class="col-sm-9">
                        <input <?php if ($_smarty_tpl->tpl_vars['form_captcha']->value==1) {?>checked="checked" <?php }?> style="margin-top: 10px;" name="captcha" id="captcha" type="checkbox" class=""/>
                    </div>
                </div>
            </div>

            <div class="form-horizontal">
                <div class="form-group">
                    <label for="form_success_message" class="col-sm-12">Сообщение после успешной отправки:</label>
                    <div class="col-sm-12">

                        <textarea name="form_success_message" id="form_success_message" style="width:100%;height:100px;"><?php echo $_smarty_tpl->tpl_vars['form_success_message']->value;?>
</textarea>

                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>

        </div>
    </div>
</form>
<?php echo '<script'; ?>
>
    $('.confirm').click(function(e){
        if (!confirm('Вы уверены, что хотите выполнить данное действие?')){
            e.preventDefault();
        }
    });

<?php echo '</script'; ?>
><?php }} ?>
