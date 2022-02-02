<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-29 16:27:46
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\pages\carousel3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96735182761ddc56b8351b0-47523338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adafbd0b530bd51e802347d1e04e8f00b8deaaba' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\pages\\carousel3.tpl',
      1 => 1643359914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96735182761ddc56b8351b0-47523338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61ddc56b8739b5_08104279',
  'variables' => 
  array (
    'blog_items_v' => 0,
    'theme_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ddc56b8739b5_08104279')) {function content_61ddc56b8739b5_08104279($_smarty_tpl) {?><div class="carousel-box-3">
    <div class="container">
        <?php echo blog_latest_items(array('sourse'=>"blog_items_v",'cid'=>6,'limit'=>10),$_smarty_tpl);?>

        <div class="row padding-slider">
            <div class="slider carousel-3">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['blog_items_v']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <div class="vid-carousel-box">
                        <div class="number"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</div>
                        <img class="img-responsive" src="/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
" alt="">
                        <div class="tit">
                            <span><?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</span>
                            <a href="#" class="arrow-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-button.png" alt=""></a>
                        </div>
                        <div class="vid-carousel-box-content">
                            <div class="vid-carousel-box-img">/upload/images/blog/<?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SKIN'];?>
</div>
                            <div class="vid-carousel-box-title"><?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TITLE'];?>
</div>
                            <div class="vid-carousel-box-text"><?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SHORT_CONTENT'];?>
</div>
                            <div class="vid-carousel-box-link">/blog/<?php echo $_smarty_tpl->tpl_vars['blog_items_v']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ALIAS'];?>
</div>
                        </div>
                    </div>
                <?php endfor; endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('.carousel-3').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<img src='<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-left-v.png' class='slick-prev' alt='1'>",
        nextArrow: "<img src='<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-right-v.png' class='slick-next' alt='2'>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
<?php echo '</script'; ?>
>
<div id="vid-box-modal">
    <div class="vid-box-modal-content">
        <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-left.png" alt="" class="a-left">
        <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/arrow-right.png" alt="" class="a-right">
        <div class="vid-box-modal-close-btn">X</div>
        <div class="row row-flex">
            <div class="col-sm-6 vid-box-modal-col-1">
                <img class="" src="" alt="">
            </div>
            <div class="col-sm-6 vid-box-modal-col-2">
                <div class="vid-box-modal-title"></div>
                <div class="vid-box-modal-text">
                </div>
                <div class="vid-box-modal-more-link">
                    <a href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var vids = $(".carousel-box-3 .vid-carousel-box");
        var modal = $("#vid-box-modal")
        var modal_nuber = 1;
        /*modal.click(function () {
            modal.fadeOut();
        });*/
        $("#vid-box-modal .vid-box-modal-content .vid-box-modal-close-btn").click(function () {
            modal.fadeOut();
        });
        function SetModal(then){

            modal.find('.vid-box-modal-col-1 img').attr('src', then.find(".vid-carousel-box-img").text());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-title').text(then.find(".vid-carousel-box-title").text());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-text').html(then.find(".vid-carousel-box-text").html());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-more-link a').attr('href', then.find(".vid-carousel-box-link").text());
            modal.fadeIn();
        }
        $(".carousel-box-3 .vid-carousel-box").click(function (e) {
            e.preventDefault();
            modal_nuber = $(this).find(".number").text();
            SetModal($(this));
        });
        $(".a-right").click(function (e) {
            modal_nuber ++;
            if (modal_nuber == vids.length){
                modal_nuber = 0;
            }
            SetModal(vids.eq(modal_nuber));

        });
        $(".a-left").click(function (e) {
            modal_nuber --;
            if (modal_nuber == -1){
                modal_nuber = vids.length - 1;
            }
            SetModal(vids.eq(modal_nuber));

        });
    });
<?php echo '</script'; ?>
><?php }} ?>
