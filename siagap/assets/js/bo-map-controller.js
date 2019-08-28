var mapOptions = {
   center: [-18.91368, 47.64613],
   zoom: 4.5,
   trackResize : true
}

var map = new L.map('bo-map-placement', mapOptions);
var assetLayerGroup = new L.LayerGroup();

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    // maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiemFjaGFyaWUiLCJhIjoiY2p0cXlubW83MGEyNjRkbDgwYjgzbHpyMCJ9.I_05xIIXbm5EqhqSXTDbJQ'
 }).addTo(map);
assetLayerGroup.addTo(map);
// window.dispatchEvent(new Event('resize'));