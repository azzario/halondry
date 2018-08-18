function getLokasi () {
    $.ajax({
        url: '/loc',
        method: 'get',
        success: function(data) {
            var loc = data.loc;
            wrapLoc(loc);
        }
    });
}

function wrapLoc (loc) {
    var notParse    = loc[0].latlng;
    var a           = notParse.split(',').map(function(item) {
                        return parseFloat(item);
                    });

    var map = new L.Map('maps', {zoom: 10, center: new L.latLng(a) });	//set tengah dari lokasi pertama
    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer
    var markersLayer = new L.LayerGroup();	//buat layer baru
    map.addLayer(markersLayer);

    var controlSearch = new L.Control.Search({
		position:'topright',		
		layer: markersLayer,
		initial: false,
		zoom: 12,
		marker: false
    });
    
    map.addControl(controlSearch);
    renderMap(map);

    for(i in loc) {
		var nama            = loc[i].nama;	//value searched
		var notParseLoop    = loc[i].latlng;
        var aLoop           = notParseLoop.split(',').map(function(item) {
                                return parseFloat(item);
                            });
        var	marker = new L.Marker(new L.latLng(aLoop), {title: nama, draggable: true} );//set property searched
        marker.on('dragend', function() {
            console.log(marker.getLatLng());
        });
        
        marker.bindPopup('Kota: '+ nama );
		markersLayer.addLayer(marker);
    }
}

function customIcon () {
    //var laundryIcon = '';
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
            console.log(data);
            $('.harga').text(data);
        }
    });
}