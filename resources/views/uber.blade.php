@push('styles')
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    header {
        background-color: #000;
        color: #fff;
        padding: 1px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
    }

    header {
        display: flex;
        align-items: center;
        height: 80px;
    }

    .logo {
        font-size: 20px;
        color: #fff;
        text-decoration: none;
    }

    a:hover {
        color: #bdbdbd;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 0 50px;
    }

    nav ul {
        list-style: none;
        display: flex;
        padding: 0;
        gap: 15px;
        align-items: center;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .highlighted {
        background-color: #d4af37;
        padding: 10px 15px;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        width: 120px;
        color: #fff;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 50px 80px;
    }


    .left-panel {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 400px;
    }

    .left-panel h1 {
        color: #333;
        text-align: left;
        margin-bottom: -20px;
        font-size: 40px;
        margin-right: -160px;
    }

    .left-panel p {
        font-size: 22px;
        color: #666;
        margin-bottom: 10px;
        margin-right: -50px;
        width: 120%;
    }

    form {
        width: 100%;
    }

    form label {
        display: block;
        margin: 10px 0 5px;
    }

    form input {
        padding: 15px;
        border: 1px solid #ccc;
        margin-bottom: 0px;
        border-radius: 20px;
        width: 100%;
        font-size: 16px;
    }

    .button {
        padding: 15px;
        background-color: #00a884;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        width: 50%;
        font-size: 16px;
        margin-top: 30px;
        text-align: center;
    }

    #map {
        width: 575px;
        /* Ancho del mapa */
        height: 500px;
        /* Altura del mapa */
        background-color: #ddd;
        margin-left: 20px;
        border-radius: 15px;
        /* Radio del borde para redondearlo */
        overflow: hidden;
        /* Esto asegura que el contenido del mapa se ajuste a los bordes redondeados */
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 50px;
        flex-wrap: wrap;
    }

    .footer-left {
        flex: 1;
        text-align: left;
    }

    .footer-center {
        flex: 2;
        text-align: center;
    }

    .footer-right {
        flex: 1;
        text-align: right;
    }

    .footer-content img {
        height: 40px;
        width: auto;
        margin: 0 7px;
    }

    .logo-appstore,
    .logo-googleplay {
        height: 50px !important;
    }
</style>
@push('scripts')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUHDD3k6qhez-fLcWpcPKAPI89jJtO1TY&libraries=places,directions"
    async defer></script>
<script>
    let map, directionsService, directionsRenderer, markerA, markerB;

    function initMap() {
        const buenosAires = { lat: -34.6037, lng: -58.3816 };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: buenosAires
        });

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        const options = {
            componentRestrictions: { country: 'ar' },
            fields: ['formatted_address', 'geometry', 'name'],
            types: ['geocode', 'establishment']
        };

        const pickupInput = document.getElementById('pickup');
        const destinationInput = document.getElementById('destination');

        const autocompletePickup = new google.maps.places.Autocomplete(pickupInput, options);
        const autocompleteDestination = new google.maps.places.Autocomplete(destinationInput, options);

        autocompletePickup.addListener('place_changed', () => {
            const place = autocompletePickup.getPlace();

            // Eliminar el marcador "A" si ya existe
            if (markerA) {
                markerA.setMap(null);
            }

            // Agregar el marcador "A"
            if (place.geometry) {
                markerA = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: "Punto A",
                    label: "A"
                });

                // Actualizar la ruta si ambos puntos están seleccionados
                if (pickupInput.value && destinationInput.value) {
                    calculateAndDisplayRoute();
                } else {
                    directionsRenderer.set('directions', null);
                }
            }
        });

        autocompleteDestination.addListener('place_changed', () => {
            const place = autocompleteDestination.getPlace();

            // Eliminar el marcador "B" si ya existe
            if (markerB) {
                markerB.setMap(null);
            }

            // Agregar el marcador "B"
            if (place.geometry) {
                markerB = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: "Punto B",
                    label: "B"
                });

                // Actualizar la ruta si ambos puntos están seleccionados
                if (pickupInput.value && destinationInput.value) {
                    calculateAndDisplayRoute();
                } else {
                    directionsRenderer.set('directions', null);
                }
            }
        });

        pickupInput.addEventListener('input', () => {
            if (!pickupInput.value) {
                if (markerA) markerA.setMap(null);
                if (destinationInput.value) {
                    directionsRenderer.set('directions', null);
                }
            }
        });

        destinationInput.addEventListener('input', () => {
            if (!destinationInput.value) {
                if (markerB) markerB.setMap(null);
                if (pickupInput.value) {
                    directionsRenderer.set('directions', null);
                }
            }
        });
    }

    function calculateAndDisplayRoute() {
        const pickup = document.getElementById('pickup').value;
        const destination = document.getElementById('destination').value;

        directionsService.route(
            {
                origin: pickup,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            },
            (response, status) => {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(response);
                    routeDistance = response.routes[0].legs[0].distance.value / 1000; // en kilómetros

                    if (routeDistance > 100) {
                        // Mostrar el mensaje si la distancia excede los 100 km
                        alert('Lo sentimos, no se pueden realizar viajes de más de 100 km.');
                        directionsRenderer.set('directions', null); // Limpiar la ruta del mapa
                        routeDistance = null; // Resetear la distancia
                    }
                } else {
                    window.alert('No se pudo calcular la ruta: ' + status);
                }
            }
        );
    }

    function clearMarkers() {
        if (markerA) markerA.setMap(null);
        if (markerB) markerB.setMap(null);
    }

    window.addEventListener('load', () => {
        initMap();
    });
</script>

<x-guest-layout>
    <main>
        <div class="left-panel">
            <h1>DESCUBRE EL MUNDO A TU MANERA CON UBER</h1>
            <p>Pide un viaje, súbete al vehículo y relájate.</p>
            <label for="pickup">Ingresa una ubicación</label>
            <input type="text" id="pickup" name="pickup" placeholder="Buenos Aires">
            <label for="destination">Ingresa un destino</label>
            <input type="text" id="destination" name="destination" placeholder="Av Corrientes">
            <a href="{{route('inicio')}}" class="button">Ver Precios</a>
        </div>
        <div id="map"></div>
    </main>
</x-guest-layout>