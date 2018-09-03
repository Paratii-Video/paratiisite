(function () {

    'use strict';

    //

    function init () {
        var $chapters;

        $chapters = $('section.chapters');

        $chapters.on('click', 'a.chapters-button', function (e) {
            if ($(this).attr('href') === '#') {
                e.preventDefault();

                $(this).toggleClass('open');
            }
        });

        $chapters.on('mouseout', 'a.chapters-button', function (e) {
            e.preventDefault();

            $(this).removeClass('open');
        });
    }

    if ($('section.chapters').length) {
        init();
    }
}());
