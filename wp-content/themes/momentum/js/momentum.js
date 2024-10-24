const $ = jQuery

$(document).ready(function () {

    $('a').click(function (e) {
        const target = $(this).attr('href')
        if(target[0] === '#') {
            e.preventDefault()

            var offset = 120; // Adjust this value based on your needs
            if ($(window).width() <= 1020) {
                offset = 72;
            }
            $('html, body').animate({
                scrollTop: $(target).offset().top - offset
            }, 1000, function() {
                history.pushState(null, null, target);
            });

            $('#navbar-toggle').removeAttr('checked')
        }
    })

    $('#navbar-toggle').on('change', function () {
        if($(this).is(':checked')) {
            $('.header-float').removeClass('shadow-lg')
        } else {
            $('.header-float').addClass('shadow-lg')
        }
    })

})

window.onload = function() {
    // initialize AOS
    AOS.init({
        offset: 100,
        duration: 700,
    });
}