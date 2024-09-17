<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/navbar-usuario.css')); ?>">

    <title>Uber Buenos Aires</title>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($header)): ?>

    <?php endif; ?>

        <?php echo e($slot); ?>

</body>

</html><?php /**PATH /home/leandro/Documents/Proyectos/php/uber/resources/views/layouts/app.blade.php ENDPATH**/ ?>