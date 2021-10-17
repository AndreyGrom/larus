
{include file="../common/header.tpl" slider=true}

<div class="main-page" id="content">

</div>
<div class="container">
    {news_last source='news_last' limit=10}
    <div class="slider news-carousel">
        {section name=i loop=$news_last}
            <div>
                <h3 class="s1">
                    <a href="/news/{$news_last[i].ALIAS}"><img src="/upload/images/news/{$news_last[i].SKIN}" alt="" class="img-responsive"/></a>
                </h3>
                <h3 class="s2">
                    <span>{$news_last[i].DATE_PUBL|date_format:"%d.%m.%Y"}</span>
                    <p><a href="/news/{$news_last[i].ALIAS}">{$news_last[i].TITLE|truncate:40}</a></p>
                </h3>
            </div>
        {/section}
    </div>
</div>

<script>
    $('.news-carousel').slick({
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

{include file="../common/footer.tpl"}