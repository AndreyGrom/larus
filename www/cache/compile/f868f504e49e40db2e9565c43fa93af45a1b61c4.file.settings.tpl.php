<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:23:54
         compiled from "D:\data\domains\provoda\www\system\controllers\settings\tpl\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760474315616d2f1a214878-23623645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f868f504e49e40db2e9565c43fa93af45a1b61c4' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\settings\\tpl\\settings.tpl',
      1 => 1626993045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760474315616d2f1a214878-23623645',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2f1a21e4b0_36131936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2f1a21e4b0_36131936')) {function content_616d2f1a21e4b0_36131936($_smarty_tpl) {?><form id="page-form" action="" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-cog"></span> Настройки сайта
                <div class="pull-right">
                    <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
                </div>
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal" role="form">

                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-common" data-toggle="tab">Общие</a></li>
                        <li><a href="#tab-geo" data-toggle="tab">Расположение и контакты</a></li>
                        <li><a href="#tab-profile" data-toggle="tab">Админ-профиль</a></li>
                        <li><a href="#tab-email" data-toggle="tab">Почта</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-common" class="tab-pane fade in active">
                            <h3>Общие данные</h3>
                            <p><?php echo $_smarty_tpl->getSubTemplate ("settings-common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                        </div>
                        <div id="tab-geo" class="tab-pane fade">
                            <h3></h3>
                            <p><?php echo $_smarty_tpl->getSubTemplate ("settings-geo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                        </div>
                        <div id="tab-profile" class="tab-pane fade">
                            <h3></h3>
                            <p><?php echo $_smarty_tpl->getSubTemplate ("settings-profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                        </div>
                        <div id="tab-email" class="tab-pane fade">
                            <h3></h3>
                            <p><?php echo $_smarty_tpl->getSubTemplate ("settings-email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</form>
<?php }} ?>
