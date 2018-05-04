(function () {

    'use strict';

    function init () {
        var $nav, $open, $bg, $close;

        $nav = $('div.main-nav');
        $open = $('button.main-header-button');
        $close = $('button.main-nav-button');
        $bg = $('span.main-nav-bg');

        function open () {
            // GLOBALS.$body.addClass('no-scroll');
            $nav.addClass('open');
        }

        function close () {
            // GLOBALS.$body.removeClass('no-scroll');
            $nav.removeClass('open');
        }

        function go(y) {
            var delay;

            delay = 0;

            if (GLOBALS.$interview.hasClass('show')) {
                if (GLOBALS.methods.closeInterview) GLOBALS.methods.closeInterview();
                delay = 500;
            }

            if (GLOBALS.methods.pauseVideo) GLOBALS.methods.pauseVideo();

            setTimeout(function () {
                $('html,body').animate({ scrollTop: y - (GLOBALS.$title.height() / 2) }, 600);
            }, delay);
        }

        function click(e) {
            e.preventDefault();
            var $target = $($(this).attr('href'));
            if ($target.length) {
                go($target.offset().top);
                close();
            }
        }

        $open.on('click', open);
        $bg.on('click', close);
        $close.on('click', close);
        $nav.on('click', 'a.main-nav-link', click);

        $(document).keyup( function(e) {
             if (e.keyCode == 27) {
                close();
            }
        });
    }

    if ($('div.main-nav').length) {
        init();
    }
}());
