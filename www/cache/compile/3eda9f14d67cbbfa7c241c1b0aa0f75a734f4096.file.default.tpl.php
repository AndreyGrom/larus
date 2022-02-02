<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-24 11:43:29
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\register\profile\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201278650461ee616551a7a2-30046541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eda9f14d67cbbfa7c241c1b0aa0f75a734f4096' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\register\\profile\\default.tpl',
      1 => 1643013805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201278650461ee616551a7a2-30046541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ee6165593931_04085867',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee6165593931_04085867')) {function content_61ee6165593931_04085867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h2>Мой профиль</h2>
                <p>&nbsp;</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>ФИО</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['FIO'];?>
</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['EMAIL'];?>
</td>
                    </tr>
                    <tr>
                        <td>Телефон:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['PHONE'];?>
</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <?php echo $_smarty_tpl->getSubTemplate ("../../common/profile-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
