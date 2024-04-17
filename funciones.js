var map;
var marker;

async function iniciarMap() {
    // Importa las bibliotecas necesarias
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    map = new Map(document.getElementById('map'), {
        zoom: 10
    });

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            map.setCenter(pos);

            // Usa AdvancedMarkerElement en lugar de google.maps.Marker
            marker = new AdvancedMarkerElement({
                position: pos,
                map: map
            });
        }, function() {
            handleLocationError(true, map.getCenter());
        });
    } else {
        handleLocationError(false, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, pos) {
    var infoWindow = new google.maps.InfoWindow({map: map});
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: El servicio de geolocalización falló.' :
        'Error: Tu navegador no soporta geolocalización.');
    infoWindow.open(map);
}

document.addEventListener('DOMContentLoaded', async () => {
    await customElements.whenDefined('gmpx-store-locator');
    const locator = document.querySelector('gmpx-store-locator');
    locator.configureFromQuickBuilder(CONFIGURATION);
    iniciarMap();
});
AIzaSyAD8doOrUlhBc8GCKnU9GfDP5VtQ6TrWvY