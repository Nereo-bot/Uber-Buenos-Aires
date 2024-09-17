<?php $__env->startPush('styles'); ?>
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
        padding: 6px 0;
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

    .account-menu {
        position: relative;
        display: inline-block;
    }

    .account-menu button {
        background-color: #fff;
        color: #000;
        border: none;
        padding: 10px 60px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 300px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 0px;
        right: -36.5%;
        top: 160%;
    }

    .dropdown-content.show {
        display: block;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown-content .logout {
        background-color: #f44336;
        color: white;
        padding: 15px;
        border-radius: 10px;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 10px 30px;
    }

    .left-panel {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 260px;
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
        align-items: flex-start important !;
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

    form button {
        padding: 15px;
        background-color: #00a884;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        width: 50%;
        font-size: 16px;
        margin-top: 10px;
        margin-left: -125px;
    }

    /* Ajustes generales del contenedor de precios */
    #price-container {
        display: none;
        /* Oculto inicialmente */
        flex-direction: column;
        /* Alinea las opciones en columna */
        gap: 20px;
        /* Espacio entre opciones */
        width: 115%;
        /* Ancho completo del contenedor */
        max-width: 800px;
        /* Ancho máximo */
        margin: -10px -40px;
        /* Centrado horizontal */
        padding: 20px;

    }

    /* Ajustes para cada opción de precio */
    .price-option {
        display: flex;
        align-items: center;
        /* Alinea verticalmente la imagen con el texto */
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        width: 100%;
        /* Ancho completo de la opción */
    }

    /* Ajustes para las imágenes */
    .price-option img {
        width: 80px;
        height: 80px;
        border-radius: 0%;
        margin-right: 15px;
        /* Espacio entre la imagen y el texto */
    }

    /* Ajustes para la sección de texto */
    .price-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Centra el texto verticalmente */
        flex: 1;
        /* Ocupa el espacio restante */
    }

    /* Ajuste para el precio */
    .price-text .price {
        font-size: 24px;
        color: #00a884;
        font-weight: bold;
        margin-bottom: 5px;
        /* Espacio entre el precio y el título */
    }

    /* Ajuste para el título (más grande) */
    .price-text .title {
        font-size: 22px;
        font-weight: bold;
        margin: 0;
        color: #333;
    }

    /* Ajuste para el subtítulo (más pequeño) */
    .price-text .subtitle {
        font-size: 13.5px;
        color: #666;
        margin: 0;
    }

    /* Colores diferenciados para cada tipo de opción */
    #economical-option {
        border-left: 5px solid #00a884;
    }

    #priority-option {
        border-left: 5px solid #ffb74d;
    }

    #premium-option {
        border-left: 5px solid #003366;
    }

    #moto-option {
        border-left: 5px solid #ff5722;
    }

    /* Animación hover */
    .price-option:hover {
        transform: scale(1.05);
    }

    .price-link {
        display: block;
        text-decoration: none;
        color: inherit;
        margin-left: 0;
    }

    .price-option {
        display: flex;
        align-items: center;
        margin-bottom: 1px;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 8px;
        transition: box-shadow 0.3s ease;
    }

    .price-option:hover {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .price-text {
        margin-left: 10px;
    }

    .price img {
        max-width: 50px;
        max-height: 50px;
    }

    #map {
        width: 600px;
        height: 500px;
        background-color: #ddd;
        margin-left: 20px;
        border-radius: 15px;
        overflow: hidden;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 13px 0;
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
<?php $__env->startPush('scripts'); ?>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUHDD3k6qhez-fLcWpcPKAPI89jJtO1TY&libraries=places,directions"
    async defer></script>
<?php $__env->startPush('scripts'); ?>
<script>
    function toggleDropdown() {
        document.getElementById('dropdown').classList.toggle('show');
    }

    // Cierra el dropdown si se hace clic fuera de él
    window.onclick = function (event) {
        if (!event.target.matches('.account-menu button')) {
            const dropdowns = document.getElementsByClassName('dropdown-content');
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<?php $__env->startPush('scripts'); ?>
<script>
    let map, directionsService, directionsRenderer, markerA, markerB, routeDistance;

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
            if (markerA) {
                markerA.setMap(null);
            }
            if (place.geometry) {
                markerA = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: "Punto A",
                    label: "A"
                });

                if (pickupInput.value && destinationInput.value) {
                    calculateAndDisplayRoute();
                } else {
                    directionsRenderer.set('directions', null);
                }
            }
        });

        autocompleteDestination.addListener('place_changed', () => {
            const place = autocompleteDestination.getPlace();
            if (markerB) {
                markerB.setMap(null);
            }
            if (place.geometry) {
                markerB = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: "Punto B",
                    label: "B"
                });

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
    // Función para verificar si es hora pico
    function isPeakHour() {
        const now = new Date();
        const hours = now.getHours();

        // Verifica si la hora actual está dentro de los intervalos de hora pico
        return (hours >= 16 && hours < 19) || (hours >= 6 && hours < 9);
    }

    // Función para mostrar los precios cuando se haga clic en el botón
    function showPrices() {
        if (routeDistance) {
            const basePrice = 510.5;
            const prices = {
                economical: basePrice * 1.5,
                priority: basePrice * 1.8,
                premium: basePrice * 2.0,
                moto: basePrice * 1.2
            };

            function calculatePrice(type) {
                const pricePerKm = {
                    economical: 765.75,
                    priority: 918.9,
                    premium: 1021,
                    moto: 612.6
                };
                return prices[type] + routeDistance * pricePerKm[type];
            }

            // Determina si es hora pico
            const peakMultiplier = isPeakHour() ? 1.20 : 1.00;

            const calculatedPrices = {
                economical: (calculatePrice('economical') * peakMultiplier).toFixed(2),
                priority: (calculatePrice('priority') * peakMultiplier).toFixed(2),
                premium: (calculatePrice('premium') * peakMultiplier).toFixed(2),
                moto: (calculatePrice('moto') * peakMultiplier).toFixed(2)
            };

            document.getElementById('price-economical').value = calculatedPrices.economical;
            document.getElementById('price-priority').value = calculatedPrices.priority;
            document.getElementById('price-premium').value = calculatedPrices.premium;
            document.getElementById('price-moto').value = calculatedPrices.moto;

            document.getElementById('price-container').style.display = 'block';
        } else {
            alert('Primero debe calcular la ruta');
        }
    }

    window.addEventListener('load', () => {
        initMap();
    });
    document.addEventListener('DOMContentLoaded', () => {
        const accountButton = document.querySelector('.account-menu button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const logoutLink = document.querySelector('.dropdown-content .logout'); // Selecciona el enlace de cierre de sesión

        accountButton.addEventListener('click', () => {
            // Alterna la visibilidad del menú desplegable
            if (dropdownContent.style.display === 'block') {
                dropdownContent.style.display = 'none';
            } else {
                dropdownContent.style.display = 'block';
            }
        });

        // Opcional: Cierra el menú si se hace clic fuera de él
        window.addEventListener('click', (event) => {
            if (!event.target.matches('.account-menu button') && !event.target.matches('.dropdown-content')) {
                dropdownContent.style.display = 'none';
            }
        });
    });

    document.getElementById('pickup').addEventListener('onkeyup', function () {
        document.getElementsByClassName('start').forEach(start => {
            start.value = document.getElementById('pickup').value;
        });
    });

    document.getElementById('destination').addEventListener('onkeyup', function () {
        document.getElementsByClassName('destination').forEach(d => {
            d.value = document.getElementById('destination').value;
        });
    });
</script>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main>
        <div class="left-panel">
            <label for="pickup">Ingresa una ubicación</label>
            <input type="text" id="pickup" placeholder="Buenos Aires">

            <label for="destination">Ingresa un destino</label>
            <input type="text" id="destination" placeholder="Av.Corrientes">

            <div style="text-align: center;">
                <!-- Botón para ver precios (calcular y mostrar precios al mismo tiempo) -->
                <button type="button" onclick="showPrices()">Ver Precios</button>
            </div>

            <div id="price-container" style="display: none;">

                <form action="<?php echo e(route('pago-opcion')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="price-option" id="economical-option">
                        <div class="price-text">
                            <input type="hidden" name="start" class="start">
                            <input type="hidden" name="end" class="end">
                            <input type="text" class="price" name="price" id="price-economical" readonly>
                            <p class="title">Uber Económico</p>
                            <p class="subtitle">Viajes Económicos, todos los días</p>
                        </div>
                    </div>
                    <button class="price-link">Elegir</button>
                </form>
                <form action="<?php echo e(route('pago-opcion')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="start" class="start">
                    <input type="hidden" name="end" class="end">
                    <div class="price-option" id="priority-option">
                        <div class="price-text">
                            <input type="text" class="price" name="price" id="price-priority" readonly>
                            <p class="title">Uber Prioridad</p>
                            <p class="subtitle">Prioridad en la recogida</p>
                        </div>
                    </div>
                    <button class="price-link">Elegir</button>
                </form>
                <form action="<?php echo e(route('pago-opcion')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="start" class="start">
                    <input type="hidden" name="end" class="end">
                    <div class="price-option" id="premium-option">
                        <div class="price-text">
                            <input type="text" class="price" name="price" id="price-premium" readonly>
                            <p class="title">Uber Premium</p>
                            <p class="subtitle">Mejores Conductores y autos</p>
                        </div>
                    </div>
                    <button class="price-link">Elegir</button>
                </form>
                <form action="<?php echo e(route('pago-opcion')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="start" class="start">
                    <input type="hidden" name="end" class="end">
                    <div class="price-option" id="moto-option">
                        <div class="price-text">
                            <input type="text" class="price" id="price-moto" name="price" readonly>
                            <p class="title">Uber Moto</p>
                            <p class="subtitle">Viajes Económicos en moto</p>
                        </div>
                    </div>
                    <button class="price-link">Elegir</button>
                </form>
            </div>

        </div>
        <div id="map"></div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/viajes/cuenta-iniciada.blade.php ENDPATH**/ ?>