<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/navbar-invitado.css')}}">

    @stack('styles')
    @stack('scripts')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="{{route('uber')}}">UBER</a>
            <ul>
                <li><a href="{{route('terminos-condiciones')}}">Términos y Condiciones</a></li>
                <li><a href="{{route('quienes-somos')}}">Quiénes Somos</a></li>
                <li><a href="{{route('preguntas-frecuentes')}}">Preguntas Frecuentes</a></li>
                <li><a href="{{route('inicio')}}" class="highlighted">Inicio</a></li>
                <li><a href="{{route('celular')}}" class="highlighted">Registro</a></li>
            </ul>
        </nav>
    </header>

    {{ $slot }}


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

</html>