var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

window.isIOs = isMobile.iOS();
window.isMobile = isMobile.any();

let Maps = require('./controllers/maps');
window.mapsCtrl = new Maps();

$(document).ready(function() {
    
    let Animation = require('./controllers/animations');
    let Viewport = require('./controllers/viewport');
    let Menu = require('./controllers/menu');
    let Hover = require('./controllers/hover');
    let Gallery = require('./controllers/gallery');
    require('scrollreveal');
    
    window.scrollRevealCtrl = new scrollReveal({
        mobile: true,
        vFactor:  .8,
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