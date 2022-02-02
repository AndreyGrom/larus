<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-01-29 16:27:46
         compiled from "D:\data\domains\provoda\www\themes\new\tpl\pages\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90110019617ac91195a278-17535494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5176811a0c6f657afe1efe4d15f273c1ed1650d2' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\themes\\new\\tpl\\pages\\main.tpl',
      1 => 1643363401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90110019617ac91195a278-17535494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617ac911b3e8e6_95383717',
  'variables' => 
  array (
    'vistav' => 0,
    'theme_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617ac911b3e8e6_95383717')) {function content_617ac911b3e8e6_95383717($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\domains\\provoda\\www\\system\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('main'=>true), 0);?>

<section class="s1">
    <div class="container">
        <div class="rect-top text-center">
            <div class="rect-top-content">
                <span class="rect-top-1">
                    Не теряя ни одного оттенка,
                </span>
                <span class="rect-top-2">
                    НАСТОЯЩИЙ
                </span>
                <span class="rect-top-2">
                    - ЖИВОЙ -
                </span>
                <span class="rect-top-2">
                    ЗВУК
                </span>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./news-carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</section>
<section class="s2">
    <div class="container">
        <div class="row row-flex" style="padding-left:15px; padding-right:15px;">
            <div class="col-md-5 col-sm-12 col-xs-12 s2-col-1">
                <span class="span1">Низкоэнтропийные аудиокабели</span>
                <br><span class="span2">LIVING ATHMOS</span>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 s2-col-2">
                <p class="p1">
                    <a href="#">Аудиокабели LIVING ATHMOS</a>  - уникальный продукт, который произведет впечатление на истинного любителя музыки и высококачественного звука. В основе разработки кабелей лежит теория передачи сигналов с низкой энтропией,
                    что позволяет получить звук максимально полный и реалистичный.
                    <br><br>Идеально подходит для создания <a href="#">Атмосферы Живого Звука</a>  в квартире, жилом доме, отдельном специальном помещении или студии. Почувствуйте музыку «телом и душой»
                </p>
            </div>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("./carousel2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</section>
<section class="s3">
    <div class="container">
        <div class="col-sm-12">
            <div class="row row-flex desctop-visible">
                <div class="col-sm-7 s3-col-1">
                    <div class="p1">
                        <?php echo GetBlog(array('cid'=>3,'source'=>'vistav'),$_smarty_tpl);?>

                        <span class="p1-title"><?php echo $_smarty_tpl->tpl_vars['vistav']->value['TITLE'];?>
</span>
                        <div class="p1-content">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['vistav']->value['CONTENT'],400);?>

                        </div>
                        <a target="_blank" class="p1-more" href="/blog/<?php echo $_smarty_tpl->tpl_vars['vistav']->value['ALIAS'];?>
">Читать далее</a>
                        <div class="button-left" data-current="<?php echo $_smarty_tpl->tpl_vars['vistav']->value['NUMBER'];?>
"></div>
                        <div class="button-right" data-current="<?php echo $_smarty_tpl->tpl_vars['vistav']->value['NUMBER'];?>
"></div>
                    </div>
                    <div class="p2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
img/load.gif" alt="">
                    </div>
                </div>
                <div class="col-sm-5 s3-col-2">
                    <span class="span1">LIVING ATHMOS</span><br>
                    <span class="span2">на выставках в России</span>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            function GetBlog(id, nap) {
                $(".s3 .p2").show();
                var el = $(".p1");
                var data = "action=GebBlog&cid=3&id=" + id + "&nap=" + nap
                $.ajax({
                    type: "POST",
                    data: data,
                    url: "/",
                    success: function(msg){
                        var obj = JSON.parse(msg);
                        el.find(".p1-title").text(obj.TITLE);
                        el.find(".p1-more").attr('href', "/blog/" + obj.ALIAS);
                        el.find(".p1-content").html(obj.SHORT_CONTENT);
                        el.find(".button-left").attr('data-current', obj.NUMBER);
                        el.find(".button-right").attr('data-current', obj.NUMBER);
                        $(".s3 .p2").hide();
                    }
                });
            }
            $(".button-left").click(function () {
                GetBlog($(this).attr('data-current'), 0);
            });
            $(".button-right").click(function () {
                GetBlog($(this).attr('data-current'), 1);
            });
        <?php echo '</script'; ?>
>
        <div class="mobile-visible">
            <div class="s3-col-2">
                <span class="span1">LIVING ATHMOS</span><br>
                <span class="span2">на выставках в России</span>
            </div>
            <div class="s3-col-1">
                <div class="p1">
                    <span>Hi-Fi & High End Show 2019 Битва Форматов 2019</span>
                    <br>
                    <div class="alert alert-danger">
                        Слайдер сделаю, когда буду натягивать на движок, потому что инфорация будет браться из базы при перелистывании
                    </div>
                    Аудитории предлагалось прослушать одну и ту же музыкальную композицию, записанную на разных носителях: компакт-диске, магнитной ленте, компактной кассете, виниловом диске, а также в виде файла высокого разрешения.
                    <br><br>
                    Далее слушатели заполняли анкету, на которой указывали их мнение, в какой последовательности были воспроизведены эти носители...
                    <br>
                    <a href="#">Читать далее</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("./carousel3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</section>


<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('main'=>true), 0);?>
<?php }} ?>
