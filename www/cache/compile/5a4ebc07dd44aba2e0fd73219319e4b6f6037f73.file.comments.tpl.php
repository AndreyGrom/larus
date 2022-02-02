<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-29 20:38:27
         compiled from "D:\data\domains\provoda\www\system\controllers\comments\tpl\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53654558161f57b93a3e736-42547702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4ebc07dd44aba2e0fd73219319e4b6f6037f73' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\comments\\tpl\\comments.tpl',
      1 => 1626993015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53654558161f57b93a3e736-42547702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'pagination' => 0,
    'start' => 0,
    'items_count' => 0,
    'total' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61f57b93a696d0_20926874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f57b93a696d0_20926874')) {function content_61f57b93a696d0_20926874($_smarty_tpl) {?><article class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title"><span class="glyphicon glyphicon-user"></span> Комментарии
        </h2>
    </div>
    <div class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>

        <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
            <div class="col-sm-7 pagin-no-margin">
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

            </div>
        <?php }?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>col-sm-5<?php } else { ?>col-sm-12<?php }?> text-right">
            <p style="margin-top: 10px;">Показано материалов: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['items_count']->value+$_smarty_tpl->tpl_vars['start']->value-1;?>
 из <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</p>
        </div>
        <div class="clearfix"></div>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <article class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USER_NAME'];?>

                        <div class="pull-right">IP: <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['IP'];?>
</div>
                    </h2>
                </div>
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USER_COMMENT'];?>

                    <ul class="list-inline">
                        <?php if ($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['STATUS']==0) {?>
                        <li><a class="text-danger" href="?c=comments&id=<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
&status=1"><span class="glyphicon glyphicon-off"></span> Включить</a></li>
                        <?php } else { ?>
                        <li><a href="?c=comments&id=<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
&status=0"><span class="glyphicon glyphicon-off"></span> Отключить</a></li>
                        <?php }?>
                        <li><a href="?c=comments&id=<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><span class="glyphicon glyphicon-pencil"></span> Изменить</a></li>
                        <li><a class="del-comment" href="?c=comments&id=<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
&act=del""><span class="glyphicon glyphicon-remove"></span> Удалить</a></li>
                    </ul>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CONTROLLER'];?>
/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['MATERIAL_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CONTROLLER'];?>
/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['MATERIAL_ID'];?>
</a>
                </div>
                <div class="panel-footer clearfix">
                    <div class="pull-left"><span class="glyphicon glyphicon-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATE_PUBL'];?>
</div>
                    <div class="pull-right">Модуль: <?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['MODULE_NAME'];?>
</div>
                </div>
            </article>
        <?php endfor; endif; ?>
        <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
            <div class="col-sm-7 pagin-no-margin">
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

            </div>
        <?php }?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>col-sm-5<?php } else { ?>col-sm-12<?php }?> text-right">
            <p style="margin-top: 10px;">Показано материалов: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['items_count']->value+$_smarty_tpl->tpl_vars['start']->value-1;?>
 из <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</p>
        </div>
        <div class="clearfix"></div>
    </div>
</article>
<?php echo '<script'; ?>
>
    $(".del-comment").click(function(e){
        if (!confirm('Вы действительно хотите удалить комментарий?')) {
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
>
<?php } else { ?>
    <p>Комментариев нет</p>
<?php }?><?php }} ?>
