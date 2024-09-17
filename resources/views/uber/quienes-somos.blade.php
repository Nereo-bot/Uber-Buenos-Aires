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
        flex-shrink: 0;
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

    .highlighted {
        background-color: #d4af37;
        padding: 10px 15px;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        width: 120px;
        color: #fff;
    }

    .back-button {
        background-color: #28a745;
        /* Verde */
        padding: 10px 15px;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .back-button:hover {
        background-color: #218838;
        /* Verde más oscuro en hover */
    }

    main {
        flex: 1;
        padding: 50px 80px;
    }

    .section {
        margin-bottom: 40px;
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        /* Color del borde del recuadro */
        border-radius: 10px;
        /* Bordes redondeados */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.05);
        /* Sombra suave */
        background-color: #fff;
        /* Fondo blanco */
    }

    .section h1 {
        font-size: 2em;
        color: #333;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .section p {
        font-size: 1.1em;
        color: #555;
        line-height: 1.6;
        margin: 0 auto;
        max-width: 800px;
    }

    .section img {
        max-width: 100%;
        height: auto;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .img-sobre-nosotros {
        width: 80%;
        /* Ajusta según sea necesario */
    }

    .img-sustentabilidad {
        width: 70%;
        /* Ajusta según sea necesario */
    }

    .img-viajes {
        width: 50%;
        /* Ajusta según sea necesario */
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 10px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        font-size: 16px;
        flex-shrink: 0;
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
        <div class="section">
            <h1>Sobre Nosotros</h1>
            <p>Dedicamos a transformar la movilidad urbana y mejorar la vida de los residentes y visitantes de la
                ciudad. Nuestra misión es ofrecer un servicio de transporte seguro, confiable y accesible, adaptado a
                las necesidades de cada persona.Somos una empresa global con un fuerte compromiso local, trabajando
                incansablemente para ser parte integral de la comunidad porteña. Nos esforzamos por proporcionar
                soluciones innovadoras que faciliten el día a día de nuestros usuarios, desde el transporte personal
                hasta la entrega de comida y servicios de movilidad compartida. </p>
            <img src="sobre nosotros.png" alt="Sobre Nosotros" class="img-sobre-nosotros">
        </div>

        <div class="section">
            <h1>Sustentabilidad en Buenos Aires</h1>
            <p>Uber se compromete a convertirse en una plataforma totalmente eléctrica y sin emisiones de carbono para
                2040, con el 100 % de los viajes en vehículos que no produzcan emisiones, mediante transporte público o
                micromovilidad. Al ser una de las plataformas de movilidad más importantes en Buenos Aires, nuestro
                compromiso es enfrentar con más fuerza el desafío del cambio climático. Esto lo lograremos al ofrecer a
                los usuarios más opciones para viajar de manera más sostenible, al ayudar a los socios de la App a
                adaptarse a los vehículos eléctricos, al priorizar la transparencia y al asociarnos con las
                organizaciones no gubernamentales y el sector privado para acelerar una transición hacia la energía
                limpia y justa.</p>
            <img src="sustentabilidad.png" alt="Sustentabilidad en Buenos Aires" class="img-sustentabilidad">
        </div>

        <div class="section">
            <h1>Viajes y Mucho Más</h1>
            <p>Además de ayudar a los usuarios a encontrar una forma de movilidad, ayudamos a las personas a pedir
                comida de manera rápida y económica, ampliamos el acceso a la atención médica, creamos nuevas soluciones
                para solicitar transporte de carga y ayudamos a las empresas a simplificar los viajes para sus
                empleados. Y siempre ayudamos a los socios de la App a generar ganancias.</p>
            <img src="viajes y mucho mas.png" alt="Viajes y Mucho Más" class="img-viajes">
        </div>
    </main>
</x-guest-layout>