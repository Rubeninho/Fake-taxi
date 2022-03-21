var map = L.map("map").setView([50.074, 14.436], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    lat = 50.074
    lng = 14.436
    var selectedLatLng = 0
    var marker = -1

    function onMapClick(e) {
        if(marker == -1){
             marker = L.marker([lat, lng])
            .addTo(map)
        }
        marker.setLatLng(e.latlng);
        selectedLatLng = e.latlng;
        console.log(selectedLatLng)
    }

    map.on('click', onMapClick);