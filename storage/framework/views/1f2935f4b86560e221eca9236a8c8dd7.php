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
        padding: 25px;
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
        width: 180px;
        color: #fff;
        n
    }

    .container {
        background-color: #fff;
        padding: 40px;
        /* Aumentar el relleno */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 400px;
        /* Aumentar el ancho */
        margin: 60px auto;
        /* Centrar el contenedor y ajustar márgenes */
    }

    h1 {
        font-size: 18px;
        margin-bottom: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-size: 14px;
    }

    input[type="tel"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #666;
        border-radius: 20px;
        box-sizing: border-box;

    }



    .button {
        width: 100%;
        /* Ajustar el ancho del botón */
        padding: 10px;
        border: none;
        border-radius: 20px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-bottom: 10px;
        background-color: #000;
        /* Cambiar el color de fondo a negro */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        background-color: #666;
        /* Gris para Google */
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        /* Espacio entre el texto y el logo */
    }

    .button {
        background-color: #666;
        /* Gris para Apple */
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        /* Espacio entre el texto y el logo */
    }

    .social-login img {
        height: 24px;
        /* Tamaño ajustado del logo */
    }

    .flag {
        width: 24px;
        /* Tamaño de la bandera */
        vertical-align: middle;
        /* Alinear verticalmente con el texto */
        margin-right: 5px;
        /* Espacio entre la bandera y el texto */
    }

    .disclaimer {
        font-size: 12px;
        color: #666;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        margin-top: auto;
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

<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <h1>Ingresa tu número de teléfono móvil</h1>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <label for="phone">
                +54 Número de teléfono
            </label>
            <input type="tel" id="phone" name="phone" required>
            <button type="button">
                Continuar
            </button>
        </form>
        <div class="social-login">
            <a href="<?php echo e(route('google')); ?>" class="google button">
                Continúa con Google
            </a>
            <a class="apple button" href="<?php echo e(route('apple')); ?>">
                Continúa con Apple
            </a>
        </div>
        <p class="disclaimer">
            Al continuar, aceptas recibir llamadas, WhatsApp o SMS de Uber y de sus afiliados al número proporcionado,
            incluso de forma automática.
        </p>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/auth/registro.blade.php ENDPATH**/ ?>