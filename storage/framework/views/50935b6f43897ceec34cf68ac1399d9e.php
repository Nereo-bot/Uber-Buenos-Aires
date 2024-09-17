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
        background: linear-gradient(to right, #ff7e5f, #feb47b);
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

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        text-align: center;
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

    .header-image {
        width: 200px;
        /* Ajusta el tamaño según sea necesario */
        height: 200px;
        /* Hace la imagen cuadrada */
        object-fit: cover;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 50px auto;
        /* Centra la imagen vertical y horizontalmente */
        display: block;
        /* Asegura que la imagen sea un bloque */
    }

    .message {
        font-size: 68px;
        font-weight: bold;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        text-align: center;
        /* Asegura que el mensaje esté centrado */
    }

    .review-button,
    .exit-link {
        display: block;
        background-color: #fff;
        color: #ff7e5f;
        border: 2px solid #ff7e5f;
        padding: 15px 30px;
        font-size: 20px;
        border-radius: 25px;
        cursor: pointer;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease, color 0.3s ease;
        margin: 10px auto;
        /* Centra los botones horizontalmente */
    }

    .review-button:hover {
        background-color: #ff7e5f;
        color: #fff;
        border-color: #ff7e5f;
    }

    .exit-link {
        background-color: transparent;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: #fff;
        font-weight: normal;
        text-decoration: underline;
    }

    .exit-link:hover {
        color: #ff7e5f;
    }

    @media (max-width: 768px) {
        .message {
            font-size: 36px;
        }

        .review-button,
        .exit-link {
            font-size: 18px;
            padding: 12px 24px;
        }
    }
</style>
<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accountMenuButton = document.querySelector('.account-menu button');
        const dropdownContent = document.querySelector('.dropdown-content');

        accountMenuButton.addEventListener('click', () => {
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (event) => {
            if (!accountMenuButton.contains(event.target) && !dropdownContent.contains(event.target)) {
                dropdownContent.style.display = 'none';
            }
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

    <img src="uber.png" alt="Auto Grande" class="header-image">
    <div class="message">¡Disfruta el viaje!</div>
    <form action="<?php echo e(route('resena')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="price" value=<?php echo e($price); ?>>
        <input type="hidden" name="nombre_chofer" value=<?php echo e($nombre_chofer); ?>>
        <button class="review-button">Calificar al Conductor</button>
    </form>
    <a href="<?php echo e(route('viajes-iniciada')); ?>" class="exit-link">Salir</a>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/viajes/disfruta.blade.php ENDPATH**/ ?>