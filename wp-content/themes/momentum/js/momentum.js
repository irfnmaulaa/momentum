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

    $('.counter').each(function() {
        const end = parseInt($(this).text(), 10)
        animateCounter($(this), 0, end, 2000);
    })

    // Simple number counter function
    function animateCounter($element, start, end, duration) {
        $({ counter: start }).animate({
            counter: end
        }, {
            duration: duration,
            easing: 'swing',
            step: function() {
                $element.text(Math.ceil(this.counter));
            },
            complete: function() {
                $element.text(end);
                $element.addClass('highlight');
                setTimeout(() => $element.removeClass('highlight'), 500);
            }
        });
    }

    const $rollingTexts = $('.rolling-text');
    let currentIndex = 0;

    // Initial state
    $rollingTexts.eq(currentIndex).addClass('active');

    function rollText() {
        // Remove active class and add fade-out to current text
        const activeText = $rollingTexts.eq(currentIndex)
        activeText.addClass('absolute top-0 translate-y-[100%] transition duration-500')
        setTimeout(() => {
            activeText.removeClass('translate-y-[100%] transition duration-500').addClass('translate-y-[-100%]')
        }, 300)

        // Update index
        currentIndex = (currentIndex + 1) % $rollingTexts.length;

        $rollingTexts.eq(currentIndex).addClass('transition duration-500').removeClass('absolute top-0 translate-y-[-100%]');

        if(currentIndex >= 3) {
            currentIndex = 0
        }
    }

    // Start the rolling animation
    setInterval(rollText, 3000);
})

window.onload = function() {
    // initialize AOS
    AOS.init({
        offset: 100,
        duration: 700,
    });
}