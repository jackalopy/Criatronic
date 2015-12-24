'use strict';

var isMobile = {
    Android: function Android() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function BlackBerry() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function iOS() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function Opera() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function Windows() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function any() {
        return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
    }
};

window.isIOs = isMobile.iOS();
window.isMobile = isMobile.any();

var Maps = require('./controllers/maps');
window.mapsCtrl = new Maps();

$(document).ready(function () {

    var Animation = require('./controllers/animations');
    var Viewport = require('./controllers/viewport');
    var Menu = require('./controllers/menu');
    var Hover = require('./controllers/hover');
    var Gallery = require('./controllers/gallery');
    require('scrollreveal');

    window.scrollRevealCtrl = new scrollReveal({
        mobile: true,
        vFactor: .8,
        delay: 'always'
    });
    window.animationCtrl = new Animation();
    window.viewportCtrl = new Viewport();
    window.menuCtrl = new Menu();
    window.galleryCtrl = new Gallery();
    window.hoverCtrl = new Hover();

    require('./actions/resize');
    require('./actions/click');
    require('./actions/scroll');
    // require('./libraries/lightbox');
});