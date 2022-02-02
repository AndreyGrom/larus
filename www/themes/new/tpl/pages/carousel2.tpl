<div class="carousel-box-2">
    <div class="container">
        {blog_items sourse = "blog_items_s" cid = 7 limit = 10}
        <div class="row padding-slider">
            <div class="slider carousel-3">
                {section name=i loop=$blog_items_s}
                    <div class="vid-carousel-box">
                        <div class="number">{$smarty.section.i.index}</div>
                        <img class="img-responsive" src="/upload/images/blog/{$blog_items_s[i].SKIN}" alt="">
                        <div class="tit">
                            <span>{$blog_items_s[i].TITLE}</span>
                            <a href="#" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                        <div class="vid-carousel-box-content">
                            <div class="vid-carousel-box-img">/upload/images/blog/{$blog_items_s[i].SKIN}</div>
                            <div class="vid-carousel-box-title">{$blog_items_s[i].TITLE}</div>
                            <div class="vid-carousel-box-text">{$blog_items_s[i].SHORT_CONTENT}</div>
                            <div class="vid-carousel-box-link">/blog/{$blog_items_s[i].ALIAS}</div>
                        </div>
                    </div>
                {/section}
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
        prevArrow: "<img src='{$theme_dir}img/arrow-left-v.png' class='slick-prev' alt='1'>",
        nextArrow: "<img src='{$theme_dir}img/arrow-right-v.png' class='slick-next' alt='2'>",
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
<div id="vid-box-modal-2">
    <div class="vid-box-modal-content">
        <div class="vid-box-modal-close-btn">X</div>
        <div class="row row-flex">
            <div class="col-sm-6 vid-box-modal-col-1">
                <img class="" src="" alt="">
            </div>
            <div class="col-sm-6 vid-box-modal-col-2">
                <div class="vid-box-modal-title"></div>
                <div class="vid-box-modal-text"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var vids = $(".carousel-box-2 .vid-carousel-box");
        var modal = $("#vid-box-modal-2")
        var modal_nuber = 1;
        $("#vid-box-modal-2 .vid-box-modal-content .vid-box-modal-close-btn").click(function () {
            modal.fadeOut();
        });
        function SetModal2(then){
            modal.find('.vid-box-modal-col-1 img').attr('src', then.find(".vid-carousel-box-img").text());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-title').text(then.find(".vid-carousel-box-title").text());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-text').html(then.find(".vid-carousel-box-text").html());
            modal.find('.vid-box-modal-col-2 .vid-box-modal-more-link a').attr('href', then.find(".vid-carousel-box-link").text());
            modal.fadeIn();
        }
        $(".carousel-box-2 .vid-carousel-box").click(function (e) {
            e.preventDefault();
            modal_nuber = $(this).find(".number").text();
            SetModal2($(this));
        });
    });
</script>