// owl carousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        rtl: true,
        margin: 10,
        resposiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 2
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            },
        },
        autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,

    });
});
// article swiper

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 15,
    loop: false,
    centerSlide: 'false',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
        dynamicBullets: true,
    },
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        550: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
    },
});
