'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var _dragdealer = require('dragdealer');

var _dragdealer2 = _interopRequireDefault(_dragdealer);

var Dragdealer = _dragdealer2['default'].Dragdealer;

var Gallery = (function () {
    function Gallery() {
        var galleryClass = arguments.length <= 0 || arguments[0] === undefined ? '.hover .products.mobile-only' : arguments[0];

        _classCallCheck(this, Gallery);

        this.galleryClass = galleryClass;
        this.initMobile();
        this.initDesk();
    }

    _createClass(Gallery, [{
        key: 'initMobile',
        value: function initMobile() {
            var that = this;
            var galleries = $(this.galleryClass);
            this.galleries = galleries;
            this.draggers = [];

            galleries.each(function () {
                that.initMobileUnit($(this));
            });
        }
    }, {
        key: 'initDesk',
        value: function initDesk() {}
    }, {
        key: 'initMobileUnit',
        value: function initMobileUnit(which) {
            var dragger = new Dragdealer(which.attr('id'), {
                steps: which.find('.product').length,
                speed: 0.3,
                loose: true,
                requestAnimationFrame: true,
                callback: function callback(x, y) {
                    var step = dragger.getStep()[0];
                    which.parent().find('.buttons').find('.button').each(function () {
                        if ($(this).attr('value') == step) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    });
                }
            });

            this.draggers.push(dragger);
        }
    }, {
        key: 'refresh',
        value: function refresh() {
            var which = arguments.length <= 0 || arguments[0] === undefined ? 0 : arguments[0];

            var dragger = this.draggers[which];
            which = $(this.galleries[which]);

            which.parent().find('.buttons').remove();
            var buttons = $('<div class="buttons mobile-only"></div>');
            var galleryLength = which.find('.product').length;
            for (var i = 1; i <= galleryLength; i++) {
                var button = $('<div class="button button' + i + (i == 1 ? ' active' : '') + '" value="' + i + '"></div>');
                button.on('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    dragger.setStep($(this).attr('value'));
                });
                buttons.append(button);
            }

            which.parent().append(buttons);

            dragger.reflow();

            setInterval(function () {
                dragger.reflow();
            }, 1500);
        }
    }]);

    return Gallery;
})();

exports['default'] = Gallery;
module.exports = exports['default'];