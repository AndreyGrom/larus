<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-16 19:31:38
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\shop\cart_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147755742561bb69ea394cd6-44012704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afbd5808d5d460b7e64fde04f6ef4fe50baa3e50' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\shop\\cart_modal.tpl',
      1 => 1639672115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147755742561bb69ea394cd6-44012704',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61bb69ea398b50_81752622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61bb69ea398b50_81752622')) {function content_61bb69ea398b50_81752622($_smarty_tpl) {?><div id="cart_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Сообщение</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                Добавлено в корзину
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <a href="/shop/cart"  class="btn btn-primary">Перейти к оплате</a>
            </div>
        </div>
    </div>
</div><?php }} ?>
