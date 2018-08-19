function getMaps(latlng) {
  var map = new L.Map('maps', {zoom: 10, center: new L.latLng(latlng) });	//set tengah dari lokasi pertama
  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer
  var markersLayer = new L.LayerGroup();	//buat layer baru
  map.addLayer(markersLayer);
}
