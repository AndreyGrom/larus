<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 11:11:12
         compiled from "D:\data\domains\provoda\www\themes\default\tpl\error404\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4965235616d2c20c94936-23573391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ade59d89b6aed97e3cb0285b9fdaae60dd1999d' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\default\\tpl\\error404\\error404.tpl',
      1 => 1626993596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4965235616d2c20c94936-23573391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d2c20d38a68_00157955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d2c20d38a68_00157955')) {function content_616d2c20d38a68_00157955($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="content">
    <div class="white-section">
        <div class="container">
            <div class="row">
                <h2>Ошибка 404</h2>


                    <h3>К сожалению, запрашиваемой Вами страницы не существует на нашем сайте.</h3>
                <p>Возможно, это случилось по одной из этих причин:</p>

                <p>
                <ul>
                    <li>Вы ошиблись при наборе адреса страницы (URL)</li>
                    <li>перешли по «битой» (неработающей, неправильной) ссылке</li>
                    <li>запрашиваемой страницы никогда не было на сайте или она была удалена</li>
                </ul>
                <p>Мы просим прощение за доставленные неудобства и предлагаем следующие пути:</p>
                <ul>
                    <li>вернуться назад при помощи кнопки браузера back</li>
                    <li>проверить правильность написания адреса страницы (URL)</li>
                    <li>перейти на <a href="/"><strong>главную страницу сайта</strong></a></li>
                    <li>воспользоваться картой сайта или поиском</li>
                    <li>посетить основные разделы сайта</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
