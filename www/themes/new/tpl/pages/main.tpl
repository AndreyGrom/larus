{include file="../common/header.tpl" main=true}
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
    {include file="./news-carousel.tpl"}
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

    {include file="./carousel2.tpl"}
</section>
<section class="s3">
    <div class="container">
        <div class="col-sm-12">
            <div class="row row-flex desctop-visible">
                <div class="col-sm-7 s3-col-1">
                    <div class="p1">
                        {get_blog cid=3 source='vistav'}
                        <span class="p1-title">{$vistav.TITLE}</span>
                        <div class="p1-content">
                            {$vistav.CONTENT|truncate:400}
                        </div>
                        <a target="_blank" class="p1-more" href="/blog/{$vistav.ALIAS}">Читать далее</a>
                        <div class="button-left" data-current="{$vistav.NUMBER}"></div>
                        <div class="button-right" data-current="{$vistav.NUMBER}"></div>
                    </div>
                    <div class="p2">
                        <img src="{$theme_dir}img/load.gif" alt="">
                    </div>
                </div>
                <div class="col-sm-5 s3-col-2">
                    <span class="span1">LIVING ATHMOS</span><br>
                    <span class="span2">на выставках в России</span>
                </div>
            </div>
        </div>
        <script>
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
        </script>
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

    {include file="./carousel3.tpl"}
</section>


{include file="../common/footer.tpl" main=true}