import './sass/style.scss';
import 'bootstrap/dist/css/bootstrap.min.css';

import * as $ from "jquery";


const app = {
    init: () => {
        app.components.load();
        app.components.menu();
        app.effects.parallax();
        app.components.call_to_action();
    },
    components: {
        menu: () => {
            $('.menu-mobile').click(function () {
                let menu_active = $('.menu-active');
                let menu = $('.menu');
                let menu_mobile = $('.menu-mobile');

                if (!menu_active.length) {
                    menu_mobile.find('.material-icons').text('close');
                    menu.addClass('menu-active');
                } else {
                    menu_mobile.find('.material-icons').text('menu');
                    menu.removeClass('menu-active');
                }
            });
        },
        load: () => {
            $('body').css('display', 'initial');

            setTimeout(function () {
                $('.load-container').css('display', 'none');
            }, 2000);
        },
        call_to_action: () => {
            $('.call-to-action').click(() => {
                // $('body,html').animate({scrollTop: $('.what-we-to').offset().top }, 400);
            });
        }
    },
    effects: {
        parallax: () => {
            $(window).scroll(function () {

                if ($('.background-parallax').length) {

                    $('.background-parallax').each(function () {
                        var $obj = $(this);

                        $(window).scroll(function () {
                            var yPos = Math.round(($(window).scrollTop() - 100) / 10);

                            var bgpos = '50% ' + yPos + 'px';

                            $obj.css('background-position', bgpos);

                        });
                    });
                }
            });
        }
    }
};

$(document).ready(() => {
    app.init();
});