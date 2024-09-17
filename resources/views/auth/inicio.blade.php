@push('scripts')
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    };
</script>

@push('styles')
<style type="text/css">
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
        background-image: url('auto.jpg');
        /* Ruta de la imagen de fondo */
        background-size: cover;
        /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
        background-position: center;
        /* Centra la imagen en el fondo */
        background-repeat: no-repeat;
        /* Evita que la imagen se repita */
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        background: linear-gradient(to right, #f3ac74, #cf7956);
        /* Degradado de color */
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

    .forgot-password {
        text-align: center;
        margin-top: 10px;
    }

    .forgot-password a {
        color: #333;
        text-decoration: none;
        font-size: 0.9em;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
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


<x-guest-layout>
    <main>
        <form method="POST" class="form-container" action="{{ route('login') }}">
            @csrf
            <h1>Inicio de Sesión</h1>
            <input type="text" id="login" placeholder="Gmail, Apple ID o Celular">
            <div class="password-container">
                <input type="password" id="password" placeholder="Contraseña">
            </div>
            <div class="checkbox-container">
                <label style="display: flex; justify-content: center; align-items: center; margin-top: 1px;">
                    <input type="checkbox" onclick="togglePasswordVisibility()">
                    <span style="margin-left: 1px; margin-top: -46px;">Mostrar contraseña</span>
                </label>
            </div>
            <button>Acceder</button>
            <div class="forgot-password">
                <a href="{{route('olvido-contrasena')}}">¿Olvidaste la contraseña?</a>
            </div>
        </form>
    </main>
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
                <a href="https://www.tiktok.com/@uber?lang=es" target="_blank"><img src="tik-tok.png" alt="Tik Tok"></a>
                <a href="https://m.facebook.com/uber/" target="_blank"><img src="facebook.png" alt="Facebook"></a>
                <a href="https://x.com/uber" target="_blank"><img src="twitter.png" alt="Twitter"></a>
                <a href="https://www.linkedin.com/company/uber-com/" target="_blank"><img src="linkedin.png"
                        alt="LinkedIn"></a>
                <a href="https://www.instagram.com/uber/" target="_blank"><img src="instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</x-guest-layout>