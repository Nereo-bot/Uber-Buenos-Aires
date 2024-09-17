<header>
    <nav>
        <a class="logo" href="<?php echo e(route('viajes-iniciada')); ?>">UBER</a>
        <ul>
            <li class="account-menu">
                <button><?php echo e(Auth::user()->name); ?></button>
                <div id="dropdown" class="dropdown-content">
                    <a href="<?php echo e(route('gestionar-cuenta')); ?>">Gestionar cuenta</a>
                    <a href="<?php echo e(route('actividad')); ?>">Actividad</a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>

                        <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            Cerrar sesión
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</header><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/layouts/navigation.blade.php ENDPATH**/ ?>