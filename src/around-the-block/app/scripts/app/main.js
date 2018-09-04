(function () {

    'use strict';

    // Typewrite animation

    function typewrite () {
        var element, types, period;
        element = document.getElementsByClassName('teasers-text-typewrite')[0];
        types   = element.getAttribute('data-type');
        period  = element.getAttribute('data-period');

        types = JSON.parse(types);

        new TxtType(element, types, period);

        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    }

    // Cube animations

    function cubes () {
        var params1 = {
            container: document.getElementById('cube-animation-1'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: window.animationData1
        };

        var anim1;

        anim1 = bodymovin.loadAnimation(params1);

        var params2 = {
            container: document.getElementById('cube-animation-2'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: window.animationData2
        };

        var anim2;

        anim2 = bodymovin.loadAnimation(params2);

        var params3 = {
            container: document.getElementById('cube-animation-3'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: window.animationData3
        };

        var anim3;

        anim3 = bodymovin.loadAnimation(params3);

        var params5 = {
            container: document.getElementById('cube-animation-5'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: window.animationData5
        };

        var anim5;

        anim5 = bodymovin.loadAnimation(params5);
    }


    // Intro/start

    function intro (callback) {
        var $intro, media, interval;

        $intro = $('.intro');
        media = (GLOBALS.state.ismobile) ? $intro.find('img')[0] : $intro.find('video')[0];

        function ended () {
            if (callback) callback();
        }

        function video () {
            if (media.readyState == 4) {
                clearInterval(interval);
                $intro.addClass('end');
                $(media).css({ 'minWidth' : media.videoWidth });

                media.addEventListener('ended', videoEnded);
                setTimeout(function () {
                    var promise = media.play();
                    if (promise !== undefined) {
                        try {
                            console.log('around the block')
                        } catch (e) {
                            console.log('around the block: intro error', e)
                        }
                    }
                }, 400);
            }
        }

        function videoEnded () {
            $intro.find('video').remove();
            ended();
        }

        function image () {
            var img = new Image();
            
            img.onload = function () {
                $intro.addClass('end');

                setTimeout(function () {
                    $(media).addClass('show');
                    setTimeout(ended, 3000);
                }, 400);
            }

            img.src = media.src;
        }

        if (GLOBALS.state.ismobile) {
            image();
        } else {
            video();
            media.load();
            interval = setInterval(video, 100);
        }
    }


    function start () {
        GLOBALS.body.scrollTop = 0;
        GLOBALS.$body.addClass('start');

        setTimeout(typewrite, 1000);
        // cubes();
    }


    //

    function init () {
        GLOBALS.body.scrollTop = 0;
        
        // if ($('.intro').length) {
        //     intro(start);
        // } else {
            start();
        // }
    }

    init();
}());
