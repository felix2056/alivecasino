function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

//hover sidenav

$('.subSections').hover(function () {
    if (window.innerHeight < 850) {
        var cookie = getCookie('sidebarOpened');
        if (!cookie || cookie == "false")
            $(this).find('.sideNavSubMenuHov').addClass('hoverSecOpenS');
    } else {
        var cookie = getCookie('sidebarOpened');
        if (!cookie || cookie == "false")
            $(this).find('.sideNavSubMenuHov').addClass('hoverSecOpen');
    }

}, function () {
    if (window.innerHeight < 850) {
        var cookie = getCookie('sidebarOpened');
        if (!cookie || cookie == "false")
            $(this).find('.sideNavSubMenuHov').removeClass('hoverSecOpenS');
    } else {
        var cookie = getCookie('sidebarOpened');
        if (!cookie || cookie == "false")
            $(this).find('.sideNavSubMenuHov').removeClass('hoverSecOpen');
    }

});


//extended sidenav

$('.subSections').on('click', function (event) {

    $('.openNavIcon').removeClass('openNavIcon');
    if (getCookie('sidebarOpened') == "true") {
        var bigNav = $('.bigNav');
        var subContainer = $(this).find('.sideNavSubMenuHov');
        if (!subContainer.hasClass('heightEffect')) {
            bigNav.find('.heightEffect').removeClass('heightEffect');
            subContainer.addClass('heightEffect');
            $(this).find('.sideNavSectionOpener').addClass('openNavIcon');
            scroller();
        } else {
            bigNav.find('.heightEffect').removeClass('heightEffect');
        }
    }
});

window.addEventListener('resize', function(){
    if(window.innerWidth == 1151){
        location.reload();
    }
});

/**
 * giving window height to sectionWrapper
 */
function scroller() {
    $('.sectionWrapper').css('height', window.innerHeight);
}

scroller();

function openSidebar() {
    if (window.innerWidth > 1151) {
        $('.bigNav').find('.heightEffect').removeClass('heightEffect');
        if (window.innerWidth > 1439) {

            if (getCookie('sidebarOpened') != "true") {
                $(".sectionWrapper").mCustomScrollbar("destroy", true);
                $('.wrapper')
                    .addClass('smallNav')
                    .removeClass('bigNav');
                $('.breadcrumbsArea').addClass('breadcrumbsAreaClosed');
            }
            else if (getCookie('sidebarOpened') == "true") {
                $(".sectionWrapper").mCustomScrollbar(
                    {
                        mouseWheel: {scrollAmount: 300}
                    }
                );

                $('.sideBarSubSectionsHov').on('click', function (e) {
                    e.stopPropagation();
                });
                $('.wrapper')
                    .removeClass('smallNav')
                    .addClass('bigNav');
                $('.breadcrumbsArea').removeClass('breadcrumbsAreaClosed');
            }
        } else {
            if (getCookie('sidebarOpened') != "true") {
                $(".sectionWrapper").mCustomScrollbar("destroy", true);
                //$('.sideBarSubSectionsHov').off('click');
                $('.wrapper')
                    .addClass('smallNav')
                    .removeClass('bigNav');
            }
            else {
                $(".sectionWrapper").mCustomScrollbar(
                    {
                        mouseWheel: {scrollAmount: 300}
                    }
                );
                $('.sideBarSubSectionsHov').on('click', function (e) {
                    e.stopPropagation();
                });
                $('.wrapper')
                    .removeClass('smallNav')
                    .addClass('bigNav');
            }
        }
        if (window.innerWidth > 1439) {
            if (getCookie('sidebarOpened') == "true") {
                $('.wrapper')
                    .removeClass('smallNavA')
                    .addClass('bigNavA');

            } else {
                $('.wrapper')
                    .addClass('smallNavA')
                    .removeClass('bigNavA');
            }
        }
        else {
            if ($('#wrapper').hasClass('bigNav')) {
                $('.wrapper')
                    .removeClass('bigNavA')
                    .addClass('smallNavA');

            } else {
                $('.wrapper')
                    .addClass('smallNavA')
                    .removeClass('bigNavA');
            }
        }
    }
    else {
        setCookie('sidebarOpened', true, 10000);
        $('.wrapper').removeClass('bigNavA');
        $(".sectionWrapper").mCustomScrollbar(
            {
                mouseWheel: {scrollAmount: 300}
            }
        );
    }
}
openSidebar();

$( window ).resize(function() {
    openSidebar();
    scroller();
});
/**
 * clicking another space to close sidenav
 */
$('.header, .mainBody').click(function () {
    if (window.innerWidth > 1151) {
        if (window.innerWidth <= 1439) {
            if ($('#wrapper').hasClass('bigNav')) {
                setCookie('sidebarOpened', false, 10000);
                openSidebar();
            }
        }
    } else {
        /*to do*/
    }

});



//        sidebar shrinking
$('.sideNavMenuArea').click(function () {
    if (window.innerWidth > 1151) {
        if (getCookie('sidebarOpened') == "true") {
            setCookie('sidebarOpened', false, 10000);
        } else {
            setCookie('sidebarOpened', true, 10000);
        }
        openSidebar();
    } else {

    }

});

function customScrollInit(selector, callbacks, axis) {

    $(selector).mCustomScrollbar({
        axis: axis ? axis : 'x',
        snapAmount: 0,
        autoDraggerLength: false,
        scrollbarPosition: "outside",
        mouseWheel: {scrollAmount: 170},
        callbacks: {
            onScrollStart: function () {
                if (callbacks && callbacks.onScrollStart) callbacks.onScrollStart();
            },
            onTotalScrollBack: function () {
                if (callbacks && callbacks.onTotalScrollBack) callbacks.onTotalScrollBack();
            },
            onTotalScroll: function (callback) {
                if (callbacks && callbacks.onTotalScroll) callbacks.onTotalScroll();
            }
        }
    });
}


$('.navBlocks a').click(function (e) {
    e.preventDefault();
    debugger;
    alert($this);
});

$(document).on('click', '.navBlocks a',function (e) {
    e.preventDefault();
    var selector= '#' + $(this).attr('data-id');

    $([document.documentElement, document.body]).animate({
        scrollTop: $(selector).offset().top
    }, 1000);

});


$(document).ready(function () {

//accordion slider
//
//
    (function ($) {
        $(window).load(function () {

            var callbacks = {
                onScrollStart: function () {
                    $('.blocksListArea .topLine').addClass('showLine');
                },
                onTotalScrollBack: function () {
                    $('.blocksListArea .topLine').removeClass('showLine');
                }
            };

            customScrollInit(".customListScroll", callbacks);
            customScrollInit(".customListScrollHorizontal", callbacks);

            $(".customListScrollFaster").mCustomScrollbar({
                snapAmount: 0,
                autoDraggerLength: false,
                scrollbarPosition: "outside",
                mouseWheel: {scrollAmount: 300},
                callbacks: {
                    onScrollStart: function () {
                        $('.blocksListArea .topLine').addClass('showLine');
                    },
                    onTotalScrollBack: function () {
                        $('.blocksListArea .topLine').removeClass('showLine');
                    }

                }
            });

        });
    })(jQuery);


//header shrining

    $(window).scroll(function () {
        if (window.innerWidth > 1151) {
            if (window.scrollY > 100) {
                $('.headerArea').addClass('headerAreaShrinked');
            }
            else {
                $('.headerArea').removeClass('headerAreaShrinked');
            }
        } else {
            if (window.scrollY > 100) {
                $('.containerHeader').addClass('addedBgColor');
            }
            else {
                $('.containerHeader').removeClass('addedBgColor');
            }
        }

    });

// view password

    $('.viewPassEye').click(function () {
        if ($('.viewPassword').attr('type') == 'password') {
            $('.viewPassword').attr('type', 'text');
            $('.viewPassEye').addClass('viewPassEyeClicked');
        } else {
            $('.viewPassword').attr('type', 'password');
            $('.viewPassEye').removeClass('viewPassEyeClicked');
        }
    });

//parallax

    $.stellar();

//header user selection//// dropdown script

    /*$('.dropdownWrapper').on('click', function (e) {

     var parents = $(e.currentTarget).parents(),
     source = $(this).find('.dropdownSource'),
     target = $(this).find('.dropdownTarget');

     $(this).find('.dropdownTarget').toggle();

     $(document).on('click', function (e) {

     parents.map(function (index, value) {
     if (value.contains(e.target) === false) {
     target.hide();
     $(document).off('click');
     }
     });
     });
     });*/


    /*$(".selectArea").click(function(){
     $(".options").toggleClass(".optionToggle");
     });*/

    /*
     function addLisstenersInSelects(){
     alert('aaaa');
     $('.selectArea23').off('click');
     $('.selectArea23').on('click', function () {
     $(".options").addClass(".optionToggle");
     alert("JJJJ");
     }, function () {
     $(".options").removeClass(".optionToggle");
     });
     }*/


    /**
     * swiper
     * @type {Window.Swiper|Swiper}
     */

    setTimeout(function () {
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            loop: false,
            spaceBetween: 10,
            slidesPerView: 'auto',

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'

        });
    },5000)


    // var elements = document.getElementsByClassName('swiper-slide');
    // var methodName = '';
    // for (var i = 0; i < elements.length; i++){
    //     methodName = document.getElementsByClassName('swiper-slide')[i].classList[1];
    //     if(methodName !== undefined) {
    //         if (!$('.' + methodName).css('background').includes("url")) {
    //             document.getElementsByClassName(methodName)[0].style.display = 'none';
    //         }
    //     }
    // }


});


if (window.matchMedia('screen and (max-width: 767px)').matches) {
    document.addEventListener("click", function () {
        $("#wrapper").removeClass("disableScroll");
        var elems = document.getElementsByClassName('reveal-overlay');
        var elemLength = elems.length - 1;
        if (elems[elemLength].style.display == 'none') {
            $("#wrapper").removeClass("disableScroll");
        }
        if (elems[elemLength].style.display == 'block') {
            $("#wrapper").addClass("disableScroll");
        }
    });
}

document.addEventListener('scroll', function(e) {
    var elems = document.getElementsByClassName('reveal-overlay');
    if(elems.length) {
        var elemLength = elems.length - 1;
        if (elems[elemLength].style.display == 'block') {
          /*  e.preventDefault(); */
            e.stopPropagation();
        }
    }
}, true);
$(document).on('click','ng-messages .errIcon', function () {
    var x = $(this).parents('ng-messages').addClass('displayNone');
});

/*
document.addEventListener('onscroll', function(e) {
    var elems = document.getElementsByClassName('reveal-overlay');

    if(elems.length) {
        var elemLength = elems.length - 1;
        if (elems[elemLength].style.display == 'block') {
           e.preventDefault();
            e.stopPropagation();
        }
    }
}, true);


document.addEventListener('touchmove', function ( e )  {


    var elems = document.getElementsByClassName('reveal-overlay');
    if(elems.length) {
        var elemLength = elems.length - 1;
        if (elems[elemLength].style.display == 'block') {
            e.preventDefault();
            e.stopPropagation();
        }
    }
});*/
