'use strict';

$('.' + menuCtrl.toSectionClass).on('click', function () {
    if (hoverCtrl.getState() == 'OPEN') {
        hoverCtrl.close();
    }
    viewportCtrl.scrollTo($('#' + menuCtrl.sectionClass + $(this).attr('menu_value')));
    menuCtrl.close();
});

$('.arrowDown').on('click', function () {
    viewportCtrl.scrollTo($('#section2'));
});

$('.hover').find('.close-button').on('click', function () {
    hoverCtrl.back();
});

$('.section.products').find('.content').on('click', function () {
    var which = $(this).attr('data_id');
    hoverCtrl.open(which);
});

$('.hover .product').on('click', function () {
    hoverCtrl.openInfo($(this));
});