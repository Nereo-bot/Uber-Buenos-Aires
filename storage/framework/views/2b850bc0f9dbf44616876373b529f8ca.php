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
        width: 1200px;
        height: 700px;
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

    <?php
        $distance = mt_rand (1.1*10, 2.2*10) / 10;
    ?>

        <h1>Choferes disponibles para tu viaje por $<span><?php echo e($price); ?></span></h1>
        
        <?php $__currentLoopData = $choferes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chofer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('pago')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="price" value="<?php echo e($price); ?>">
                <input type="hidden" name="nombre_chofer" value="<?php echo e($chofer->name); ?>">
                <h2><?php echo e($chofer->vehicle->brand); ?> <?php echo e($chofer->vehicle->model); ?></h2>
                <p><?php echo e($chofer->rating); ?> estrellas</p>
                <p>A <?php echo e($distance); ?> kilometros de ti</p>
                <h3>Nombre del chofer: <?php echo e($chofer->lastname); ?>, <?php echo e($chofer->name); ?></h3>
                <button>Elegir</button>
            </form>

            <?php
                $distance += mt_rand (0.15*10, 0.45*10) / 10;
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/viajes/choferes.blade.php ENDPATH**/ ?>