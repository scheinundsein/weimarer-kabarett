$(document).ready(function() {
    $('.site-header__toggle-menu').on('click', function() {
        $('body').toggleClass('menu-open');
    });
});

$(document).ready(function() {

    // Termine Filter
    //     $('input[type=radio][name=filter]').change(function() {
    //         $('.termin').addClass('is-hidden');
    //         if (this.value == 'hausvorstellung') {
    //     $('.termin.hausvorstellung').removeClass('is-hidden');
    // } else if (this.value == 'gastspiel') {
    //     $('.termin.gastspiel').removeClass('is-hidden');
    // } else {
    //     $('.termin').removeClass('is-hidden');
    // }
    //     });

    const $termineNavi = $('#termine-navi');

    if ($termineNavi.length > 0) {
        const termineNaviOffset = $termineNavi.offset().top - 60;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > termineNaviOffset) {
                $termineNavi.addClass('fixed');
            } else {
                $termineNavi.removeClass('fixed');
            }
        });
    }

    //  LIGHTBOX
    $('.is-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            // removalDelay: 300,
            // mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: false,
                tCounter: '%curr% von %total%'
            },
            image: {
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            }
        });
    });

    $('.open-gallery').on('click', function() {
        $(this).parent().parent().find('.is-gallery a').first().trigger('click');
    });

    $("#load-more").on('click', function(e) {
        e.preventDefault();
        if ($(".news-list__item:hidden").length > 0) {
            $(".news-list__item:hidden").slice(0, 4).fadeIn().css('display', 'flex');
        }
        if ($(".news-list__item:hidden").length === 0) {
            $("#load-more").hide();
        }
    });

});