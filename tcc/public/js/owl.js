$(document).ready(function() {
    $("#teamCaro").owlCarousel({
        lazyLoad: true,
        autoplay: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
                margin: 0,
                dots: false
            },
            480: {
                items: 2,
                margin: 8,
                dots: false
            },
            768: {
                items: 3,
                margin: 12,
                dots: false
            },
            1200: {
                items: 4,
                margin: 16,
                dots: false
            },
            1440: {
                items: 5,
                margin: 20,
                dots: false
            }
        }
    });
});