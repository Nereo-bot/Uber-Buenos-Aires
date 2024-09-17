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
        width: 90%;
        max-width: 600px;
        margin: 30px auto;
        padding: 0 15px;
        flex: 1;
    }

    .payment-form {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .payment-form h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #000;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    .btn-submit {
        display: block;
        width: 100%;
        padding: 15px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .btn-submit:hover {
        background-color: #808080;
    }

    .btn-submit:active {
        background-color: #808080;
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
</style>
@push('scripts')
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
<x-app-layout>
    <div class="container">
        <form action="{{route('paying')}}" class="payment-form" method="post">
            @csrf
            <input type="hidden" name="price" value="{{$price}}">
            <input type="hidden" name="nombre_chofer" value="{{$nombre_chofer}}">
            <h2>Ingrese los Datos de la Tarjeta</h2>
            <div class="form-group">
                <label for="nombre">Nombre en la Tarjeta</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="numero">Número de Tarjeta</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <div class="form-group">
                <label for="fecha">Mes de expiracion</label>
                <input type="text" id="fecha" name="expirationMonth" required>
            </div>
            <div class="form-group">
                <label for="fecha">Año de expiracion</label>
                <input type="text" name="expirationYear" required>
            </div>
            <div class="form-group">
                <label for="cvv">Código CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn-submit">Pagar</button>
        </form>
    </div>
</x-app-layout>