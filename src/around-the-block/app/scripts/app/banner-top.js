(function () {

    'use strict';

    var $BannerDate = $('#banner-top-date')

    if ($BannerDate.length) {
        $BannerDate.text(moment($BannerDate.attr('datatime')).fromNow())
    }
}());
