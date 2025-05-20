const $ = jQuery

$(document).ready(function () {

    $('.slider-portfolio').each(function(index, el) {
        const sliderEl = $(el)
        const id = sliderEl.find('.siema').attr('id')

        const slider = new Siema({
            selector: `#${id}`,
            duration: 200,
            easing: 'ease-out',
            perPage: 1,
            startIndex: 0,
            draggable: true,
            multipleDrag: true,
            threshold: 20,
            loop: false,
            rtl: false,
            onInit: () => {},
            onChange: () => {
                $('.dot').css({
                    background: 'transparent',
                    opacity: 0.7
                })
                $(`.dot[data-index="${ slider.currentSlide }"]`).css({
                    background: '#333',
                    opacity: 1
                })
            },
            loop: true,
        });

        sliderEl.find('.btn-next').click(function (e) {
            e.preventDefault()
            slider.next()
        })

        sliderEl.find('.btn-prev').click(function (e) {
            e.preventDefault()
            slider.prev()
        })

        sliderEl.find('.dot').click(function () {
            const index = $(this).data('index')
            slider.goTo(index)
        })


        $('.dot').css({
            background: 'transparent',
            opacity: 0.7
        })
        $(`.dot[data-index="${ slider.currentSlide }"]`).css({
            background: '#333',
            opacity: 1
        })
    })


    $('.testimonial-video-btn').click(function () {
        $(this).parents('.testimonial-video').find('.testimonial-video-player').trigger('play')
        $(this).remove()
    })

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

    $(window).on('scroll', () => {
        checkCounter()
    })
    checkCounter()
    function checkCounter() {
        $('.counter:not(.is-animated)').each((index, counter) => {
            const end = $(counter).text()
            const duration = $(counter).data('duration')
            if($(window).scrollTop() + $(window).height() > $(counter).offset().top) {
                $(counter).addClass('is-animated')
                animateCounter($(counter), 0, end, duration ? parseInt(duration, 10) : 2000);
            }
        })
    }

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
        const activeText = $rollingTexts.eq(currentIndex)
        activeText.css({
            transition: '0.5s',
            transform: 'translateY(100%)',
            position: 'absolute',
            top: '0',
        })
        setTimeout(() => {
            activeText.css({
                transform: 'translateY(-100%)',
                transition: '0s',
            })
        }, 300)
        //
        currentIndex = (currentIndex + 1) % $rollingTexts.length;
        $rollingTexts.eq(currentIndex).css({
            transition: '0.5s',
            position: 'static',
            top: '0',
            transform: 'translateY(0)'
        })
        //
        if(currentIndex >= $rollingTexts.length) {
            currentIndex = 0
        }
    }

    // Start the rolling animation
    setInterval(rollText, 1000);
})

window.onload = function() {
    // initialize AOS
    AOS.init({
        offset: 100,
        duration: 500,
    });
}