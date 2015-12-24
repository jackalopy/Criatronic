'use strict';

$(window).on('resize', function () {
    viewportCtrl.resize();
    mapsCtrl.resize();
});