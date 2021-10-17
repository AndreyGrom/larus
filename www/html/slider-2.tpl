<div class="carousel-box-2">
    <div class="container">
        <div class="slider carousel-2">
            <div class="vid-carousel-box">
                <img class="img-responsive" src="img/s2-1.jpg" alt="">
                <div class="tit">
                    <span>Компании 10 лет</span>
                    <a href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                </div>
            </div>
            <div class="vid-carousel-box">
                <img class="img-responsive" src="img/s2-1.jpg" alt="">
                <div class="tit">
                    <span>Слепой аудио тест кабелей, июнь 2019</span>
                    <a href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                </div>
            </div>
            <div class="vid-carousel-box">
                <img class="img-responsive" src="img/s2-3.jpg" alt="">
                <div class="tit">
                    <span>Битва форматов, апрель 2019</span>
                    <a href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                </div>
            </div>
            <div class="vid-carousel-box">
                <img class="img-responsive" src="img/s2-4.jpg" alt="">
                <div class="tit">
                    <span>Кабели LIVINGATHMOS в звукозаписывающей студии</span>
                    <a href="#" class="arrow-btn"><img src="img/arrow-button.png" alt=""></a>
                </div>
            </div>

        </div>

    </div>
</div>
<script>
    $('.carousel-2').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
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