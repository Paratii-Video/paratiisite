(function () {

    'use strict';

    //

    function init () {
        var $teasers,
            $iframe,
            sources,
            index
        ;

        $teasers = $('section.teasers');
        $iframe = $('#teasers-iframe');
        sources= $iframe.data('videos').split(';');
        index = 0;
        
        //

        function next () {
            index++;
            if (index >= sources.length) index = 0;
            $iframe.attr('src', sources[index]);
        }

        //

        $iframe.attr('src', sources[index]);

        $teasers.on('click', 'button.teasers-button-next', next);

        $teasers.on('click', 'button.teasers-button-scroll', function () {
            GLOBALS.methods.scrollTo($(".about"))
        });
    }

    if ($('section.teasers').length) {
        init();
    }
}());
