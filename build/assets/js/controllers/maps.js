'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var myLatLng = undefined,
    map = undefined,
    myPlaceID = undefined;

var Maps = (function () {
    function Maps() {
        _classCallCheck(this, Maps);

        window.initMap = this.initMap;
    }

    _createClass(Maps, [{
        key: 'initMap',
        value: function initMap() {
            myLatLng = { lat: -23.5991102, lng: -46.890860 };
            myPlaceID = 'ChIJuU1bzQmqz5QR_JtddtDebvU';
            var myOptions = {
                zoom: 17,
                center: myLatLng,
                disableDefaultUI: true,
                disableDoubleClick: true,
                keyboardShortcuts: false,
                scrollwheel: false,
                draggable: !isMobile,
                mapTypeControl: false,
                panControl: false,
                scaleControl: false,
                streetViewControl: false,
                zoomControl: true
            };

            map = new google.maps.Map(document.getElementById('map'), myOptions);
            var geocoder = new google.maps.Geocoder();

            var marker = new google.maps.Marker({ title: 'Criatronic', map: map });

            geocoder.geocode({ placeId: myPlaceID }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {

                    map.setCenter(results[0].geometry.location);

                    marker.setPosition(results[0].geometry.location);
                    marker.addListener('click', function () {
                        window.open("https://www.google.com.br/maps/place/Criatronic+Empreendimentos+LTDA/@-23.5991031,-46.8929057,17z/data=!3m1!4b1!4m2!3m1!1s0x94cfaa09cd5b4db9:0xf56eded0765d9bfc", "_blank");
                    });
                    map.setCenter();
                }
            });
        }
    }, {
        key: 'resize',
        value: function resize() {
            map.setCenter(myLatLng);
        }
    }]);

    return Maps;
})();

exports['default'] = Maps;
module.exports = exports['default'];