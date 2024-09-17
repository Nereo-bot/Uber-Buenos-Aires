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

    .review-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #fff;
        margin: 100px auto;
        /* Centra el contenedor horizontalmente */
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%;
        /* Ajusta el ancho del contenedor, por ejemplo al 80% del ancho de la página */
        max-width: 600px;
        /* Opcional: limita el ancho máximo a 600px */
    }

    .review-container h1 {
        margin-bottom: 20px;
    }

    .stars {
        display: flex;
        font-size: 30px;
        color: #ddd;
        cursor: pointer;
    }

    .stars span {
        padding: 0 5px;
    }

    .stars span.selected {
        color: #ffcc00;
    }

    .review-container textarea {
        width: 100%;
        height: 100px;
        margin: 10px 100px;
        /* Esto lo centra horizontalmente */
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .review-container button {
        background-color: #000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }

    .hidden {
        display: none;
    }
</style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stars = document.querySelectorAll('.stars span');
        const reviewTextarea = document.getElementById('review');
        const sendButton = document.getElementById('send-review');
        const thankYouMessage = document.getElementById('thank-you');

        let selectedStars = 0;

        stars.forEach(star => {
            star.addEventListener('click', () => {
                selectedStars = star.dataset.value;
                stars.forEach(s => {
                    s.classList.toggle('selected', s.dataset.value <= selectedStars);
                });
            });
        });

        sendButton.addEventListener('click', () => {
            if (selectedStars > 0 && reviewTextarea.value.trim() !== '') {
                // Ocultar el formulario de reseña y mostrar el mensaje de agradecimiento
                document.querySelector('.review-container').style.display = 'none';
                thankYouMessage.classList.remove('hidden');
            } else {
                alert('Por favor, selecciona una calificación y escribe una reseña antes de enviar.');
            }
        });
        document.getElementById('send-review').addEventListener('click', function () {
            window.location.href = 'fin.html'; // Reemplaza 'otra-pagina.html' con la URL a la que deseas redirigir
        });

        // Mostrar/ocultar el menú de la cuenta al hacer clic en el botón
        const accountButton = document.querySelector('.account-menu button');
        const dropdownContent = document.querySelector('.dropdown-content');

        accountButton.addEventListener('click', () => {
            dropdownContent.classList.toggle('show');
        });

        // Cerrar sesión
        document.getElementById('logout').addEventListener('click', () => {
            alert('Has cerrado sesión.');
        });
    });
</script>
<x-app-layout>
    <div class="review-container">
        <form action="">
            <h1>Deja una reseña a tu chofer, {{$nombre_chofer}}</h1>
            <div class="stars">
                <span data-value="1">&#9733;</span>
                <span data-value="2">&#9733;</span>
                <span data-value="3">&#9733;</span>
                <span data-value="4">&#9733;</span>
                <span data-value="5">&#9733;</span>
            </div>
            <textarea id="review" placeholder="Escribe tu reseña aquí..."></textarea>
            <button id="send-review">Mandar</button>
        </form>

    </div>
</x-app-layout>