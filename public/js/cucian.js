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
            var loc = data.loc;
            var locKantor = data.kantor;
            wrapLoc(loc, locKantor);
        }
    });
}

function maps(latlng)
{
  map = new L.Map('maps', {zoom: 14, center: new L.latLng(latlng) });
  var markerKantor = L.marker(latlng, {icon: iconKantor}).addTo(map);
  markerKantor.bindPopup('Halondry');
  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));

  renderMap(map);
}

function wrapLoc (loc, locKantor) {
    var notParse    = loc[0].latlng;
    var latLngKantor = locKantor[0].latlng;

    var a           = notParse.split(',').map(function(item) {
      return parseFloat(item);
    });
    var kantor      = latLngKantor.split(',').map((item) => {
      return parseFloat(item);
    });

    maps(kantor);

    var markersLayer = new L.LayerGroup();
    map.addLayer(markersLayer);

    var controlSearch = new L.Control.Search({
		position:'topright',
		layer: markersLayer,
		initial: false,
		zoom: 12,
		marker: false
    });

    map.addControl(controlSearch);

    for(i in loc) {
  		    var nama            = loc[i].nama;
  		    var notParseLoop    = loc[i].latlng;
          var aLoop           = notParseLoop.split(',').map(function(item) {
                                  return parseFloat(item);
                              });
          var	marker = new L.Marker(new L.latLng(aLoop) ,{title: nama, draggable: true} );
          marker.on('dragend', function() {
              console.log(marker.getLatLng());
          });

          marker.bindPopup(nama);
		      markersLayer.addLayer(marker);
    }
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
