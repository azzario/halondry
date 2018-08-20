var iconKantor = L.icon({
  iconUrl: '../images/marker-halondry.png',
  iconSize: [40,75],
});

var map;



function getLokasi() {
    $.ajax({
        url: '/loc',
        method: 'get',
        success: function(data) {
            var locKantor = data.kantor;
            wrapLoc(locKantor);
        }
    });
}

function maps(latlng)
{
  map = new L.Map('maps', {zoom: 14, center: new L.latLng(latlng) });
  var markerKantor = L.marker(latlng, {icon: iconKantor}).addTo(map);
  markerKantor.bindPopup('Halondry');
  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));
}

function wrapLoc (locKantor) {
    var latLngKantor = locKantor[0].latlng;
    var kantor      = latLngKantor.split(',').map((item) => {
      return parseFloat(item);
    });

    maps(kantor);
    renderMap(map);
}

function renderMap (map) {
    map.invalidateSize();
}

function getHarga (nama, qty) {
    $.ajax({
        url: '/harga',
        method: 'get',
        data: {
            nama: nama,
            qty: qty
        },
        success: function(data) {
            $('.harga').text(data);
        }
    });
}
