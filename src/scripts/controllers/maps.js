let myLatLng, map, myPlaceID;

export default class Maps {
    constructor() {
        window.initMap = this.initMap;
    }
    
    initMap() {
        myLatLng = {lat: -23.5991102, lng: -46.890860};
        myPlaceID = 'ChIJuU1bzQmqz5QR_JtddtDebvU';
        let myOptions = {
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
            zoomControl: true,
        }
        
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        let geocoder = new google.maps.Geocoder();

        let marker = new google.maps.Marker({title: 'Criatronic', map: map});
        
        geocoder.geocode({ placeId: myPlaceID}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                
                map.setCenter(results[0].geometry.location);
                
                marker.setPosition(results[0].geometry.location);
                marker.addListener('click', function() {
                    window.open("https://www.google.com.br/maps/place/Criatronic+Empreendimentos+LTDA/@-23.5991031,-46.8929057,17z/data=!3m1!4b1!4m2!3m1!1s0x94cfaa09cd5b4db9:0xf56eded0765d9bfc", "_blank");
                });
                map.setCenter()
                
            }
        });
        
        
    }
    
    resize() {
        map.setCenter(myLatLng);
    }
}