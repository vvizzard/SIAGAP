var mapOptions = {
   center: [-16.91368, 47.64613],
   zoom: 5.5,
   trackResize : true
}

var map = new L.map('map-placement', mapOptions);

// var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
// map.addLayer(layer);

// AssetLayGroup allow us to put list of Layer, so we can remove a layer by removing it from this
var assetLayerGroup = new L.FeatureGroup();

// Array of marker so to make possible to remove them
var markers = new Map();

// This AssetLayGroup is specially for grouped AP like for Categorie, Gestionnaire, ...
// var assetLayerGroupForGroup = new L.LayerGroup();
var groupOfAssetLayerGroup = new Map();


L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    // maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiemFjaGFyaWUiLCJhIjoiY2p0cXlubW83MGEyNjRkbDgwYjgzbHpyMCJ9.I_05xIIXbm5EqhqSXTDbJQ'
 }).addTo(map);

assetLayerGroup.addTo(map);
// assetLayerGroupForGroup.addTo(map);


// function removeTest() {
//    assetLayerGroup.removeLayer(polygon_1);
// }

// function addTest() {
//    assetLayerGroup.addLayer(polygon_1);
// }

