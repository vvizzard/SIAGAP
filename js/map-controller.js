var mapOptions = {
   center: [-18.91368, 47.53613],
   zoom: 6
}

var map = new L.map('map-placement', mapOptions);
var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

map.addLayer(layer);