(function () {

    'use strict';

    //

    function init () {
        var $discover;

        $discover = $('#discover');

        $discover.find('div.discover-entry').rss('https://medium.com/feed/paratii', {
            dateFormat: 'MMM D',
            limit: 3,
            layoutTemplate: '<ul class="discover-list">{entries}</ul>',
            entryTemplate: '<li class="discover-item"><a class="discover-link" href="{url}" target="_blank"><article class="discover-article" role="article"><time class="discover-time" datetime="{date}">{date}</time><h3 class="discover-item-title">{title}</h3></article></a></li>',
        });
    }

    if ($('#discover').length) {
        init();
    }
}());
