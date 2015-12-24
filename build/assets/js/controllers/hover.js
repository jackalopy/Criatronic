'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var Hover = (function () {
    function Hover() {
        var hoverClass = arguments.length <= 0 || arguments[0] === undefined ? 'hover' : arguments[0];

        _classCallCheck(this, Hover);

        this.hover = $('.' + hoverClass);
        this.backButton = this.hover.find('.close-button');
        this.backStack = [];
    }

    _createClass(Hover, [{
        key: 'open',
        value: function open() {
            var which = arguments.length <= 0 || arguments[0] === undefined ? 0 : arguments[0];

            var that = this;
            this.hover.find('.products').removeClass('show');
            this.hover.find('.info').removeClass('show');

            this.hover.find('.products[data_id=' + which + ']').addClass('show');
            galleryCtrl.refresh(which);

            this.state = 'OPEN';
            viewportCtrl.scrollTo($('.section.products'), .5);
            this.hover.addClass('open');
            setTimeout(function () {
                $('body').addClass('hoverOpen');
            }, 500);
        }
    }, {
        key: 'openInfo',
        value: function openInfo(which) {
            var that = this;
            var info = this.hover.find('.info');
            info.attr('data_id', which.closest('.products').attr('data_id'));
            info.find('.title').html(which.attr('data_title'));
            info.find('.caption').html(which.attr('data_caption'));

            info.find('.image').html('');
            var thumbnails = $('<div class="thumbnails"></div>');

            for (var i = 0; true; i++) {
                if (which.attr('data_image' + i) == null) {
                    break;
                } else {
                    if (i == 0) {
                        info.find('.image').append('<img src="' + which.attr('data_image' + i) + '"></img>');
                    }
                    var a = $('<a class="thumbnail" href="' + which.attr('data_image' + i) + '" data-lightbox="' + info.attr('data_id') + '"></a>');
                    a.css('background-image', 'url(' + which.attr('data_image' + i) + ')');
                    thumbnails.append(a);
                }
            }

            info.find('.image').append(thumbnails);

            info.find('.description').html('');
            for (var i = 0; true; i++) {
                if (which.attr('data_description' + i) == null) {
                    break;
                } else {
                    var paragraph = $('<p></p>').html(which.attr('data_description' + i));
                    info.find('.description').append(paragraph);
                }
            }

            this.addToBack(function () {
                that.closeInfo();
            });

            setTimeout(function () {
                that.backButton.addClass('infoStyle');
                info.addClass('show');
            }, 200);

            setTimeout(function () {
                $('.products').removeClass('show');
            }, 300);

            require('../libraries/lightbox');
        }
    }, {
        key: 'closeInfo',
        value: function closeInfo() {
            var that = this;
            var info = this.hover.find('.info');
            var dataId = info.attr('data_id');
            var products = this.hover.find('.products[data_id=' + dataId + ']');

            products.addClass('show');

            setTimeout(function () {
                that.backButton.removeClass('infoStyle');
                info.removeClass('show');
            }, 200);
        }
    }, {
        key: 'addToBack',
        value: function addToBack(doThis) {
            this.backStack.push(doThis);
        }
    }, {
        key: 'back',
        value: function back() {
            if (this.backStack.length > 0) {
                this.backStack[this.backStack.length - 1]();
                this.backStack.pop();
            } else {
                this.close();
            }
        }
    }, {
        key: 'close',
        value: function close() {
            var that = this;
            this.state = 'CLOSE';
            $('body').removeClass('hoverOpen');
            $(window).scrollTop($('.section.products').offset().top);
            this.hover.removeClass('open');
            this.backStack = [];

            setTimeout(function () {
                that.hover.find('.info').removeClass('show');
                that.hover.find('.products').removeClass('show');
            }, 500);
        }
    }, {
        key: 'toggleState',
        value: function toggleState() {
            if (this.state == 'OPEN') {
                this.close();
            } else {
                this.open();
            }
        }
    }, {
        key: 'getState',
        value: function getState() {
            return this.state;
        }
    }]);

    return Hover;
})();

exports['default'] = Hover;
module.exports = exports['default'];