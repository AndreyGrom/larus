<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:33:23
         compiled from "W:\domains\provoda\www\themes\default\tpl\partners\single\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71627503060fc24b3514278-76000986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '276ff6b00fcb5ea6d0ddadd73de06901c5ae614e' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\partners\\single\\default.tpl',
      1 => 1626993780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71627503060fc24b3514278-76000986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'item' => 0,
    'files' => 0,
    'comments_form' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24b35355c1_05965384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24b35355c1_05965384')) {function content_60fc24b35355c1_05965384($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             
                <h2><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h2>
                <br/><br/>
                <img src="/upload/images/partners/<?php echo $_smarty_tpl->tpl_vars['item']->value['SKIN'];?>
" alt="" class="img-responsive" />
                <br/><br/>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['CONTENT'];?>


                <?php if ($_smarty_tpl->tpl_vars['files']->value) {?>
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <p>
                                <a href="/upload/files/partners/<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
">
                                    <i class="fa fa-download"></i> Скачать <?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['display_name'];?>
 
                                </a>
                            </p>
                        <?php endfor; endif; ?>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FILE1']&&$_smarty_tpl->tpl_vars['item']->value['FILE1_NAME']) {?>
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/partners/<?php echo $_smarty_tpl->tpl_vars['item']->value['FILE1'];?>
">
                                <i class="fa fa-download"></i> Скачать <?php echo $_smarty_tpl->tpl_vars['item']->value['FILE1_NAME'];?>
 
                            </a>
                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FILE2']&&$_smarty_tpl->tpl_vars['item']->value['FILE2_NAME']) {?>
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/partners/<?php echo $_smarty_tpl->tpl_vars['item']->value['FILE2'];?>
">
                                <i class="fa fa-download"></i> Скачать <?php echo $_smarty_tpl->tpl_vars['item']->value['FILE2_NAME'];?>
 
                            </a>
                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FILE3']&&$_smarty_tpl->tpl_vars['item']->value['FILE3_NAME']) {?>
                    <div class="alert alert-info">
                        <h5>Ссылки для скачивания:</h5>
                        <p>
                            <a href="/upload/files/partners/<?php echo $_smarty_tpl->tpl_vars['item']->value['FILE3'];?>
">
                                <i class="fa fa-download"></i> Скачать <?php echo $_smarty_tpl->tpl_vars['item']->value['FILE3_NAME'];?>
 
                            </a>
                        </p>
                    </div>
                <?php }?>

                <hr/>

                    <h3>Понравился материал? Делись!</h3>
                    <?php echo $_smarty_tpl->getSubTemplate ("../../common/social_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




                <?php if (isset($_smarty_tpl->tpl_vars['comments_form']->value)) {?>
                    <div class="col-md-12">
                        <h5><i class="fa fa-comment"></i> Есть что добавить или возникли вопросы? Пишите в комментариях!</h5>
                        <br/>
                        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

                    </div>
                    <div class="col-md-12">
                        <article class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title"><i class="fa fa-pencil"></i> Добавьте свой комментарий!</h2>
                            </div>
                            <div class="panel-body">
                                <?php echo $_smarty_tpl->tpl_vars['comments_form']->value;?>

                            </div>
                        </article>
                    </div>
                <?php }?>
            </div>

        </div>



    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
