@push('styles')
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

    .container {
        flex: 1;
        width: 90%;
        max-width: 600px;
        margin: 120px auto 0;
        /* Center container horizontally and add top margin */
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .payment-options {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .payment-options button {
        width: 100%;
        padding: 20px;
        border: none;
        border-radius: 12px;
        font-size: 18px;
        cursor: pointer;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: 40px;
        background-repeat: no-repeat;
        background-position: left center;
        background-color: #333;
        transition: background-color 0.3s ease;
        position: relative;
        height: 80px;
        /* Adjust height for better spacing */
    }

    .payment-options .btn-card {
        background-image: url('path_to_card_image.png');
        /* Replace with your card image */
    }

    .payment-options .btn-cash {
        background-image: url('path_to_cash_image.png');
        /* Replace with your cash image */
        background-color: #4CAF50;
    }

    .payment-options button:hover {
        background-color: #555;
    }

    .payment-options .btn-cash:hover {
        background-color: #45a049;
    }

    .payment-options img {
        width: 30px;
        height: 30px;
        margin-right: 15px;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 5px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        text-align: center;
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

@push('scripts')
<script>

    document.addEventListener('DOMContentLoaded', () => {
        const accountButton = document.querySelector('.account-menu button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const logoutLink = document.querySelector('.dropdown-content .logout'); // Selecciona el enlace de cierre de sesión

        accountButton.addEventListener('click', () => {
            // Alterna la visibilidad del menú desplegable
            if (dropdownContent.style.display === 'block') {
                dropdownContent.style.display = 'none';
            } else {
                dropdownContent.style.display = 'block';
            }
        });

        // Opcional: Cierra el menú si se hace clic fuera de él
        window.addEventListener('click', (event) => {
            if (!event.target.matches('.account-menu button') && !event.target.matches('.dropdown-content')) {
                if (dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                }
            }
        });

        logoutLink.addEventListener('click', (event) => {
            event.preventDefault(); // Evita que el enlace siga su comportamiento por defecto
            const confirmLogout = confirm("¿Seguro que quieres salir de tu cuenta?");
            if (confirmLogout) {
                // Redirige a la página de cierre de sesión
                window.location.href = 'uber.html'; // Cambia esto a la URL deseada
            }
        });
    });

</script>

<x-app-layout>
    <div class="container">
        <div class="title">Métodos de Pago</div>
        <h1>Como desea pagar <span>${{$price}}</span>?</h1>
        <div class="payment-options">
            <form action="{{route('tarjeta')}}" method="post">
                @csrf
                <input type="hidden" name="price" value="{{$price}}">
                <input type="hidden" name="nombre_chofer" value="{{$nombre_chofer}}">
                <button class="btn-card">
                    Pagar con tarjeta</button>
            </form>
            <form action="{{route('disfrute')}}" method="post">
                @csrf
                <input type="hidden" name="price" value="{{$price}}">
                <input type="hidden" name="nombre_chofer" value="{{$nombre_chofer}}">
                <button class="btn-card">
                    Pagar en efectivo</button>
            </form>
        </div>
    </div>
</x-app-layout>