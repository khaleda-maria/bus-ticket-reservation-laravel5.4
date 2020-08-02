jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})


$(document).ready(function () {
    $('.owl-slider').owlCarousel({
        //center: true,
        loop : true,
        //nav: true,
        //navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoHeight: false,
        items: 4,
        smartSpeed: 500,
        autoplay : true,
        autoplayTimeout: 500,
        autoplaySpeed:true,
        autoplayHoverPause: true,
        responsive: {
            320: {
                items: 1,
                stagePadding: 10,
                margin: 10,
            },
            640: {
                items: 2,
                stagePadding: 12,
                margin: 20
            },
            1024: {
                stagePadding: 15,
                margin: 30
            }
        }
    });

    $('.carousel').carousel({
        interval: true,
        pause: false,
    });
});
