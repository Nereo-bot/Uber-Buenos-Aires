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
        padding: 50px;
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
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .form-container {
        background-color: #fff;
        padding: 2em;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 100%;
        max-width: 500px;
    }

    .form-container h1 {
        margin-bottom: 1em;
        text-align: center;
    }

    .form-row {
        display: flex;
        gap: 10px;
    }

    .form-row input {
        flex: 1;
        padding: 10px;
        border: 1px solid #666;
        border-radius: 20px;
        box-sizing: border-box;
    }

    .form-container input {
        width: 100%;
        margin-bottom: 25px;
        padding: 10px;
        border: 1px solid #666;
        border-radius: 20px;
        box-sizing: border-box;
        text-align: center;
    }

    .password-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .password-container input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #666;
        border-radius: 20px;
    }

    .checkbox-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .checkbox-container label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .checkbox-container label input[type="checkbox"] {
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #000;
        border-radius: 3px;
        margin-right: 5px;
        outline: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: -1.6em;
    }

    .checkbox-container label input[type="checkbox"]:checked::before {
        content: '✔️';
        font-size: 14px;
        color: #000;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .checkbox-container label span {
        font-size: 0.9em;
        color: #333;
    }

    .form-container button {
        width: 100%;
        padding: 1em;
        border: none;
        border-radius: 20px;
        background-color: #000;
        color: #fff;
        font-size: 0.8em;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 0.3em;
    }

    .form-container button:hover {
        background-color: #333;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
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
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

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
    <main>
        <form method="POST" action="<?php echo e(route('register')); ?>" class="form-container">
            <?php echo csrf_field(); ?>
            <h1>Crear Cuenta</h1>
            <div class="form-row">
                <input type="text" id="name" name="name" placeholder="Nombre">
                <input type="text" id="lastname" name="lastname" placeholder="Apellido">
            </div>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Contraseña">
            </div>

            <input type="tel" id="phone" name="phone" placeholder="Numero de telefono">
            <div class="checkbox-container">
                <label style="display: flex; justify-content: center; align-items: center; margin-top: 1px;">
                    <input type="checkbox" onclick="togglePasswordVisibility()">
                    <span style="margin-left: 1px; margin-top: -46px;">Mostrar contraseña</span>
                </label>
            </div>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <button>Continuar</button>
        </form>
        <a class="button" href="<?php echo e(route('google')); ?>">
            Continúa con Google
        </a>
        <a class="button" href="<?php echo e(route('apple')); ?>">
            Continúa con Apple
        </a>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /home/leandro/Documents/Proyectos/php/uber/resources/views/auth/celular.blade.php ENDPATH**/ ?>