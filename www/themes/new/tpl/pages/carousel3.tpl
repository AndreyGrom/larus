<div class="carousel-box-3">
    <div class="container">
        {blog_items sourse = "blog_items_v" cid = 6 limit = 10}
        <div class="row padding-slider">
            <div class="slider carousel-3">
                {section name=i loop=$blog_items_v}
                    <div class="vid-carousel-box">
                        <div class="number">{$smarty.section.i.index}</div>
                        <img class="img-responsive" src="/upload/images/blog/{$blog_items_v[i].SKIN}" alt="">
                        <div class="tit">
                            <span>{$blog_items_v[i].TITLE}</span>
                            <a href="#" class="arrow-btn"><img src="{$theme_dir}img/arrow-button.png" alt=""></a>
                        </div>
                        <div class="vid-carousel-box-content">
                            <div class="vid-carousel-box-img">/upload/images/blog/{$blog_items_v[i].SKIN}</div>
                            <div class="vid-carousel-box-title">{$blog_items_v[i].TITLE}</div>
                            <div class="vid-carousel-box-text">{$blog_items_v[i].SHORT_CONTENT}</div>
                            <div class="vid-carousel-box-link">/blog/{$blog_items_v[i].ALIAS}</div>
                        </div>
                    </div>
                {/section}
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
<div id="vid-box-modal">
    <div class="vid-box-modal-content">
        <img src="{$theme_dir}img/arrow-left.png" alt="" class="a-left">
        <img src="{$theme_dir}img/arrow-right.png" alt="" class="a-right">
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
<script>
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
</script>