<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/navbar-invitado.css')); ?>">

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="<?php echo e(route('uber')); ?>">UBER</a>
            <ul>
                <li><a href="<?php echo e(route('terminos-condiciones')); ?>">Términos y Condiciones</a></li>
                <li><a href="<?php echo e(route('quienes-somos')); ?>">Quiénes Somos</a></li>
                <li><a href="<?php echo e(route('preguntas-frecuentes')); ?>">Preguntas Frecuentes</a></li>
                <li><a href="<?php echo e(route('inicio')); ?>" class="highlighted">Inicio</a></li>
                <li><a href="<?php echo e(route('celular')); ?>" class="highlighted">Registro</a></li>
            </ul>
        </nav>
    </header>

    <?php echo e($slot); ?>



    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <p>Español (internacional) - Buenos Aires, Argentina.</p>
            </div>
            <div class="footer-center">
                <a href="https://play.google.com/store/search?q=Uber&c=apps&hl=es_AR" target="_blank"><img
                        src="appstore.png" alt="App Store" class="logo-appstore"></a>
                <a href="https://play.google.com/store/search?q=Uber&c=apps&hl=es_AR" target="_blank"><img
                        src="googleplay.png" alt="Google Play" class="logo-googleplay"></a>
            </div>
            <div class="footer-right">
                <a href="https://www.tiktok.com/@uber?lang=es" target="_blank"><img src="tik-tok.png" alt="Tik Tok"
                        class="logo-tik tok"></a>
                <a href="https://m.facebook.com/uber/" target="_blank"><img src="facebook.png" alt="Facebook"
                        class="logo-facebook"></a>
                <a href="https://x.com/uber" target="_blank"><img src="twitter.png" alt="Twitter"
                        class="logo-twitter"></a>
                <a href="https://www.linkedin.com/company/uber-com/" target="_blank"><img src="linkedin.png"
                        alt="LinkedIn" class="logo-linkedin"></a>
                <a href="https://www.instagram.com/uber/" target="_blank"><img src="instagram.png" alt="Instagram"
                        class="logo-instagram"></a>
            </div>
        </div>
    </footer>
</body>

</html><?php /**PATH /home/leandro/Documents/Proyectos/php/uber/resources/views/layouts/guest.blade.php ENDPATH**/ ?>