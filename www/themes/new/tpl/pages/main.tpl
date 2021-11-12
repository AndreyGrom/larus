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
    <div class="carousel-box">
        <div class="container">
            {blog_items sourse = "blog_items" cid = 2 limit = 10}
            <div class="slider news-carousel">
                {section name=i loop=$blog_items}
                <div>
                    <h3 class="ss1">
                        <a href="#"><img src="/upload/images/blog/{$blog_items[i].SKIN}" alt="" class="img-responsive"/></a>
                    </h3>
                    <h3 class="ss2">
                        <p class="news-carousel-text"><a href="/blog/{$blog_items[i].ALIAS}">{$blog_items[i].TITLE}</a></p>
                        <p class="news-carousel-more"><a href="/blog/{$blog_items[i].ALIAS}">Читать далее</a> <img src="{$theme_dir}img/arrow.png" alt=""></p>
                    </h3>
                </div>
                {/section}
            </div>
        </div>

    </div>
    <script>
        $('.news-carousel').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<img src='img/arrow-left.png' class='slick-prev' alt='1'>",
            nextArrow: "<img src='img/arrow-right.png' class='slick-next' alt='2'>",
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 537,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
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

    <div class="carousel-box-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="{$theme_dir}img/s2-1.jpg" alt="">
                        <div class="tit">
                            <span>Компании 10 лет</span>
                            <a href="#" data-toggle="modal" data-target="#MyModal" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="{$theme_dir}img/s2-1.jpg" alt="">
                        <div class="tit">
                            <span>Слепой аудио тест кабелей, июнь 2019</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="{$theme_dir}img/s2-3.jpg" alt="">
                        <div class="tit">
                            <span>Битва форматов, апрель 2019</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vid-carousel-box">
                        <img class="img-responsive" src="{$theme_dir}img/s2-4.jpg" alt="">
                        <div class="tit">
                            <span>Кабели LIVINGATHMOS в звукозаписывающей студии</span>
                            <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="s3">
    <div class="container">
        <div class="row row-flex desctop-visible">
            <div class="col-sm-5 s3-col-1">

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
            <div class="col-sm-7 s3-col-2">
                <span class="span1">LIVING ATHMOS</span><br>
                <span class="span2">на выставках в России</span>
            </div>
        </div>
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

    <div class="carousel-box-3">
        <div class="container">
            <div class="slider carousel-3">
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="{$theme_dir}img/s3-1.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="{$theme_dir}img/s3-2.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="{$theme_dir}img/s3-3.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>
                <div class="vid-carousel-box">
                    <img class="img-responsive" src="{$theme_dir}img/s3-4.jpg" alt="">
                    <div class="tit">
                        <span>Moscow, CROCUS EXPO, 2017- MMS</span>
                        <a data-toggle="modal" data-target="#MyModal" href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $('.carousel-3').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<img src='img/arrow-left.png' class='slick-prev' alt='1'>",
            nextArrow: "<img src='img/arrow-right.png' class='slick-next' alt='2'>",
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
    </script>
</section>

<div id="MyModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Подробности</h4>
            </div>
            <div class="modal-body">
                <p>Пока не нашел в шаблонах вид всплывающего окна</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


{include file="../common/footer.tpl" main=true}