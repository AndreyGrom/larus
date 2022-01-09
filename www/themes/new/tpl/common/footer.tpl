<footer>
    {if $main}
    <div class="footer-top" id="footer-parthers">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row row-flex mobile-margin-bottom">
                        <div class="col-sm-4 col-xs-12 mobile-margin-bottom">Наши партнеры:</div>
                        <div class="col-sm-2 col-xs-4 text-center"><img class="img-responsive" src="{$theme_dir}img/p1.jpg" alt=""></div>
                        <div class="col-sm-3 col-xs-4 text-center"><img class="img-responsive" src="{$theme_dir}img/p2.jpg" alt=""></div>
                        <div class="col-sm-3 col-xs-4 text-center"><img class="img-responsive" src="{$theme_dir}img/p3.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row row-flex">
                        <div class="col-sm-1 col-xs-12"></div>
                        <div class="col-sm-3 col-xs-12 mobile-margin-bottom">представители:</div>
                        <div class="col-sm-3 text-center"><img class="img-responsive" src="{$theme_dir}img/p4.jpg" alt=""></div>
                        <div class="col-sm-3 text-center"><img class="img-responsive" src="{$theme_dir}img/p5.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/if}
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 footer-menu desctop-visible">
                    <ul class="tire-ul">
                        <li><a href="/history">История</a></li>
                        <li><a href="/texnology">Технология</a></li>
                        <li><a href="/practice">Практика</a></li>
                        <li><a href="/shop">Продукция</a></li>
                        <li><a href="/blog">Блог</a></li>
                    </ul>
                    <ul class="tire-ul">
                        <li><a href="/blog/cats=2">Новости</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Представители</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 text-center col-xs-12  mobile-margin-bottom">
                    <a href="/"><img src="{$theme_dir}img/logo-footer.png" alt=""></a>
                </div>
                <div class="col-sm-5 desctop-visible">
                    <div class="footer-icons">
                        <p><a href="#" data-toggle="modal" data-target="#feedback-modal"><img src="{$theme_dir}img/message.png" alt=""> Связаться с нами</a></p>
                        <p><a id="find-open" href="#"><img src="{$theme_dir}img/find.png" alt=""> Поиск по сайту</a></p>
                       {* <p><a href="#"><img src="{$theme_dir}img/signin.png" alt=""> Выход</a></p>*}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>поделиться</p>
                </div>
            </div>
            <div class="row mobile-margin-bottom">
                <div class="col-sm-12 text-center footer-social">
                    <a href="#"><img src="{$theme_dir}img/vk.png" alt=""></a>
                    <a href="#"><img src="{$theme_dir}img/fb.png" alt=""></a>
                    <a href="#"><img src="{$theme_dir}img/ok.png" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    Технический текст, заполнить о политике конфидециальности, правилах копирования, публичной оферте
                </div>
            </div>
        </div>
    </div>
</footer>

{include file="./cookies.tpl"}
{include file="./find.tpl"}
{include file="./feedback-form.tpl"}
<script>
$(document).ready(function () {
    $("a.fancy").fancybox({
        padding : 0,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
});
</script>
</body>
</html>