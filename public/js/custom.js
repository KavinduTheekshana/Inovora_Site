$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});



/* Testimonial Carousel 3*/

$('.testimonial-carousel-3').slick({
    infinite: true,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0',
    prevArrow: '<button class="post-prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="post-next"><i class="fa fa-angle-right"></i></button>',

    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

