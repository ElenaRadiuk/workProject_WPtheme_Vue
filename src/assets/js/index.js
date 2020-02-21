$(document).ready(function() {
    $('#tabs li a:not(:first)').addClass('inactive');
    $('.container').hide();
    $('.container:first').show();

    $('#tabs li a').click(function() {
        let t = $(this).attr('id');
        if($(this).hasClass('inactive')) { //this is the start of our condition
            $('#tabs li a').addClass('inactive');
            $(this).removeClass('inactive');

            $('.container').hide();
            $(`#${t}C`).fadeIn('slow');
        }
    });

    //mob menu
    let hamburger = $('#hamburger-icon'),
        showMenu = $('.main-nav, .main-nav-side');
    hamburger.click(function() {
        hamburger.toggleClass('active');
        showMenu.toggleClass('show');
        return false;
    });
    showMenu.on("click", "li", function() {
        if(showMenu.hasClass('show')) {
            showMenu.toggleClass('show');
            hamburger.toggleClass('active');
        }
    });

    //slider
    $('.testimonials-slider').slick({
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});
