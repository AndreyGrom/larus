<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-07-24 17:32:23
         compiled from "W:\domains\provoda\www\themes\default\tpl\error404\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145846719260fc24779645c1-20200540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7724b194152bb8ee85ec8153f937494ac0b146' => 
    array (
      0 => 'W:\\domains\\provoda\\www\\themes\\default\\tpl\\error404\\error404.tpl',
      1 => 1626993596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145846719260fc24779645c1-20200540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60fc24779aaad3_45647451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fc24779aaad3_45647451')) {function content_60fc24779aaad3_45647451($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
