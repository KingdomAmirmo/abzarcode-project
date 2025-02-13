// owl carousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        rtl: true,
        margin: 10,
        resposiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
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
        }
    });
});