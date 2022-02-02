

<div class="carousel-box">
    <div class="container">
        {blog_items sourse = "blog_items" cid = 2 limit = 10}
        <div class="row padding-slider">
            <div class="slider news-carousel">
                {section name=i loop=$blog_items}
                    <div>
                        <h3 class="ss1">
                            <a href="/blog/{$blog_items[i].ALIAS}"><img src="/upload/images/blog/{$blog_items[i].SKIN}" alt="" class="img-responsive"/></a>
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

</div>
<script>
    $('.news-carousel').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<img src='{$theme_dir}img/arrow-left.png' class='slick-prev' alt='1'>",
        nextArrow: "<img src='{$theme_dir}img/arrow-right.png' class='slick-next' alt='2'>",
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