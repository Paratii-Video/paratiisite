(function () {

    'use strict';

    //

    function init () {
        var $interviews, $items, $article, $modal, gif, giftime, timeout, rememberY;

        rememberY = 0;

        $interviews = $('section.interviews');
        $modal = $interviews.find('div.interviews-modal');
        $items = $modal.find('article.interviews-article');

        function clear () {
            if (timeout) clearTimeout(timeout);
            if (giftime) clearInterval(giftime);
            $modal.animate({scrollTop: 0});
        }

        function animate () {
            $article.find('img.interviews-article-gif').attr('src', '').attr('src', gif + '?x='+Math.round(Math.random()*1000));
        }

        function open (item) {
            clear();

            if ($article) $article.removeClass('ontop');

            rememberY = window.scrollY;
            $article = $(item);
            gif = $article.find('img.interviews-article-gif').attr('src');

            $modal.addClass('show');
            $article.addClass('ontop active');

            timeout = setTimeout(function(){
                if (window.innerWidth < 769) GLOBALS.$body.addClass('no-scroll');
                animate();
                giftime = setInterval(animate, 5000);
            }, 1000);
        }

        function close () {
            clear();

            if (window.innerWidth < 769) GLOBALS.$body.removeClass('no-scroll');

            $modal.removeClass('show');
            $items.removeClass('active');

            GLOBALS.body.scrollTop = rememberY;
            window.scrollTo(0, rememberY);
        }

        $interviews.on('click', 'a.interviews-nav-link', function (e) {
            e.preventDefault();
            open($(this).attr('href'));

            ga('send', 'event', 'Interviews', 'open-modal', $(this).data('title'));
        });

        $interviews.on('click', 'button.interviews-button-back', close);

        GLOBALS.methods.closeInterview = close;
    }

    if ($('section.interviews').length) {
        init();
    }
}());
