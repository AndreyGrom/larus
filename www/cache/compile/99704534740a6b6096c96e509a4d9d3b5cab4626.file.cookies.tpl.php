<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-27 14:19:39
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\common\cookies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181933208461c9a14bb00750-08185727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99704534740a6b6096c96e509a4d9d3b5cab4626' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\common\\cookies.tpl',
      1 => 1640277328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181933208461c9a14bb00750-08185727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61c9a14bb045d4_43569563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c9a14bb045d4_43569563')) {function content_61c9a14bb045d4_43569563($_smarty_tpl) {?><div id="coockie-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <p>Как и все,  мы тоже используем куки (файлы cookie)  , потому что они действительно помогают улучшить ваше взаимодействие с сайтом.</p>
            </div>
            <div class="col-sm-2">
                <button id="accept-coockies" class="btn btn-outline-warning" type="submit">Все понятно!</button>
                <p><a href="http://yandex.ru">Мне это не надо</a></p>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $("#accept-coockies").click(function(){
        $.cookie('conf2', '1', { expires: 365, path: '/' });
        $("#coockie-box").hide();
    });

    if ( $.cookie('conf2') == null ) {
        $("#coockie-box").show();
    }
<?php echo '</script'; ?>
><?php }} ?>
