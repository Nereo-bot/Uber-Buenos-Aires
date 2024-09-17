<header>
    <nav>
        <a class="logo" href="{{route('viajes-iniciada')}}">UBER</a>
        <ul>
            <li class="account-menu">
                <button>{{Auth::user()->name}}</button>
                <div id="dropdown" class="dropdown-content">
                    <a href="{{route('gestionar-cuenta')}}">Gestionar cuenta</a>
                    <a href="{{route('actividad')}}">Actividad</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            Cerrar sesión
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</header>