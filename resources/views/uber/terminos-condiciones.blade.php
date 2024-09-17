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
        padding: 6px 0;
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

    .terms-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 2px -2px gray;
    }

    .terms-content h1 {
        color: #333;
        margin-bottom: 20px;
    }

    .terms-content p {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 10px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        font-size: 16px;
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
        <div class="terms-content">
            <h1>Términos y Condiciones</h1>
            <p>Bienvenido a Uber Buenos Aires. Estos Términos y Condiciones regulan tu acceso y uso de nuestros
                servicios. Al utilizar nuestros servicios, aceptas cumplir con todos los términos y condiciones
                establecidos en este documento. Si no estás de acuerdo con alguna de las disposiciones de estos
                términos, te recomendamos que no utilices nuestros servicios.</p>

            <p><strong>1. Aceptación de los Términos</strong><br>
                Al acceder a nuestro sitio web o utilizar nuestros servicios, aceptas plenamente estos Términos y
                Condiciones, así como nuestras políticas de privacidad. Estos términos constituyen un acuerdo legalmente
                vinculante entre tú y Uber Buenos Aires. Si utilizas nuestro servicio en nombre de una empresa u otra
                entidad, te aseguras de tener la autoridad para vincular a dicha entidad y a sus afiliados con estos
                términos. Si no tienes la autoridad para hacerlo, no debes utilizar nuestros servicios.</p>

            <p><strong>2. Cambios en los Términos</strong><br>
                Uber Buenos Aires se reserva el derecho de modificar, actualizar o cambiar estos términos en cualquier
                momento y a su sola discreción. Cualquier cambio será efectivo en el momento en que se publique en
                nuestro sitio web o en el momento en que se te notifique de otra manera. Es tu responsabilidad revisar
                estos términos periódicamente para estar al tanto de cualquier cambio. El uso continuado de nuestros
                servicios después de la publicación de los cambios constituye tu aceptación de dichos cambios.</p>

            <p><strong>3. Uso del Servicio</strong><br>
                Te comprometes a utilizar nuestros servicios únicamente para fines legales y de acuerdo con todas las
                leyes, regulaciones y políticas aplicables. No debes utilizar nuestros servicios para ningún propósito
                ilegal o no autorizado, incluyendo, pero no limitado a, la violación de derechos de propiedad
                intelectual, la distribución de contenido ilegal, o la participación en actividades fraudulentas.
                Además, debes cumplir con todas las instrucciones y pautas proporcionadas por Uber Buenos Aires en
                relación con el uso de nuestros servicios.</p>

            <p><strong>4. Responsabilidad</strong><br>
                Uber Buenos Aires no será responsable de ningún daño directo, indirecto, incidental, especial,
                consecuente o punitivo que surja de tu uso o incapacidad para utilizar nuestros servicios. Esto incluye,
                pero no se limita a, daños por pérdida de beneficios, datos o información, o cualquier otra pérdida
                intangible. En ningún caso nuestra responsabilidad total hacia ti por todos los daños, pérdidas y causas
                de acción excederá el monto que hayas pagado a Uber Buenos Aires, si corresponde, por el uso de nuestros
                servicios. Excluimos todas las garantías, expresas o implícitas, que no estén específicamente
                establecidas en estos términos.</p>

            <p><strong>5. Contacto</strong><br>
                Si tienes preguntas, comentarios o inquietudes sobre estos términos o sobre el uso de nuestros
                servicios, te invitamos a contactarnos a través de los canales de comunicación proporcionados en nuestro
                sitio web. Haremos todo lo posible para responder a tus consultas y resolver cualquier problema que
                puedas tener. Ten en cuenta que responderemos a las consultas dentro de un plazo razonable y no
                garantizamos una respuesta inmediata. Para soporte técnico o asistencia adicional, por favor, visita la
                sección de ayuda en nuestro sitio web.</p>

            <p><strong>6. Relación Contractual</strong><br>
                La relación entre tú y Uber Buenos Aires es de naturaleza contractual y está regida por estos Términos y
                Condiciones, así como por cualquier acuerdo adicional que puedas celebrar con nosotros. Ningún aspecto
                de nuestra relación se considera como una relación de sociedad, agencia, empleo o franquicia. Cualquier
                intento de modificar esta relación sin el consentimiento expreso de Uber Buenos Aires será nulo y sin
                efecto.</p>

            <p><strong>7. Pago</strong><br>
                Los servicios proporcionados por Uber Buenos Aires pueden estar sujetos a tarifas y cargos. Al utilizar
                nuestros servicios, aceptas pagar todas las tarifas aplicables, impuestos y cargos adicionales asociados
                con el uso de nuestros servicios. Las tarifas se te comunicarán antes de la finalización de la
                transacción. En caso de discrepancias o disputas relacionadas con el pago, debes contactarnos a través
                de los canales establecidos en nuestro sitio web para resolver el problema. Nos reservamos el derecho de
                modificar nuestras tarifas y cargos en cualquier momento, y dichos cambios serán efectivos de acuerdo
                con lo estipulado en la cláusula 2 de estos términos.</p>
        </div>
    </main>
</x-guest-layout>