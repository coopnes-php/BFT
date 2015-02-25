var map;
function initialize() {
    var mapOptions = {
        zoom: 15,
        // -16.287785,-48.966622 -16.332165,-48.946753
        center: new google.maps.LatLng(-16.287785, -48.966622),
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        scrollwheel: false
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);