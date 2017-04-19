function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(14.1008, 121.0794),
        zoom: 10
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}