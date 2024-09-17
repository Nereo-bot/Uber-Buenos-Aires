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

        .form-container input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #666;
            border-radius: 20px;
            box-sizing: border-box;
            text-align: center;
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
            <form class="form-container">
                <h1>Cambiar Contraseña</h1>
                <input type="password" id="nueva-contraseña" placeholder="Nueva Contraseña" required>
                <input type="password" id="repetir-contraseña" placeholder="Repetir Contraseña" required>
                <button onclick="location.href='cuenta iniciada.html'">Acceder</button>
            </form>
        </main>
    </x-guest-layout>