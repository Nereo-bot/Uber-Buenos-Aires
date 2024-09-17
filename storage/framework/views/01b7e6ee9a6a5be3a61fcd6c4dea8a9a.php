<?php $__env->startPush('styles'); ?>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    header {
        background-color: #000;
        color: #fff;
        padding: 1px 0;
        box-shadow: 0px 4px 2px -2px gray;
        font-weight: bold;
        display: flex;
        align-items: center;
        height: 80px;
        flex-shrink: 0;
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

    .logo-appstore,
    .logo-googleplay {
        height: 50px !important;
    }

    .content {
        flex: 1;
        padding: 20px;
        /* Espacio en blanco en el medio */
    }


    .faq-intro {
        text-align: center;
        margin: 15px auto;
        max-width: 1000px;
        /* Ajusta el ancho máximo según tu diseño */
    }

    .faq-intro h1 {
        font-size: 55px;
        font-weight: bold;
        color: #000;
        margin-bottom: 25px;
    }

    .faq-intro p {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
        margin: 0 auto;
    }

    .faq-section {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0 auto 20px auto;
        /* Centra el contenedor faq-section y añade margen inferior */
        max-width: 700px;
        /* Ancho máximo para evitar que el contenedor sea demasiado ancho */
    }

    .faq-question {
        font-size: 18px;
        cursor: pointer;
        margin: 0;
        padding: 8px 200px;
        background-color: #000;
        color: #fff;
        border-radius: 5px;
        text-align: center;
        /* Centra el texto dentro del fondo negro */
    }

    .logo {
        font-size: 20px;
        color: #fff;
        text-decoration: none;
    }

    a:hover {
        color: #bdbdbd;
    }

    .faq-answer {
        display: none;
        /* Oculta las respuestas por defecto */
        font-size: 14px;
        font-family: 'Roboto', sans-serif;
        color: #7d7d7d;
        line-height: 1.6;
        margin-top: 10px;
        padding: 10px;
        border-left: 3px solid #000;
        background-color: #f9f9f9;
        border-radius: 5px;
    }
</style>
<?php $__env->startPush('scripts'); ?>
<script>
    function toggleAnswer(event) {
        const answer = event.target.nextElementSibling;
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    }
</script>

<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="content">
        <div class="faq-intro">
            <h1>Preguntas frecuentes</h1>
            <p>Podemos ayudarte. Explora las preguntas que más nos hacen los usuarios para encontrar respuestas rápidas
                a tus inquietudes.</p>
            <p>En esta sección, hemos recopilado las consultas más comunes que recibimos de nuestros usuarios. Desde
                cómo solicitar un viaje y los métodos de pago disponibles, hasta cómo contactar con el soporte y qué
                hacer si olvidas un objeto en el vehículo. Cada respuesta está diseñada para brindarte la información
                que necesitas de manera clara y accesible. Si no encuentras lo que buscas aquí, no dudes en ponerte en
                contacto con nuestro equipo de soporte para obtener asistencia personalizada. Queremos asegurarnos de
                que tu experiencia con Uber en Buenos Aires sea lo más fluida y satisfactoria posible.</p>
        </div>
    </div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo solicito un viaje con Uber en Buenos Aires?</div>
        <div class="faq-answer">Para solicitar un viaje, abre la aplicación Uber en tu teléfono móvil y asegúrate de
            haber iniciado sesión. Ingresa tu destino en el campo “¿A dónde vamos?” en la pantalla principal. La
            aplicación te mostrará opciones de tipos de viaje disponibles en tu área. Selecciona el que prefieras,
            revisa la estimación del costo y confirma la solicitud. La app te asignará un conductor cercano y te
            mostrará la información del vehículo y el tiempo estimado de llegada.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cuáles son los métodos de pago disponibles en Uber
            Buenos Aires?</div>
        <div class="faq-answer">En Uber Buenos Aires, puedes pagar tus viajes utilizando diferentes métodos. Aceptamos
            tarjetas de crédito y débito, así como efectivo. También puedes usar el saldo de Uber Cash, que se puede
            agregar a tu cuenta mediante tarjetas de regalo o transferencias. La aplicación te permite gestionar tus
            métodos de pago y seleccionar el que prefieras antes de confirmar tu solicitud de viaje.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Uber ofrece servicio de viaje compartido en Buenos
            Aires?</div>
        <div class="faq-answer">Sí, Uber ofrece el servicio de viaje compartido, conocido como Uber Pool, en Buenos
            Aires. Este servicio te permite compartir tu viaje con otros usuarios que tienen destinos similares, lo cual
            puede reducir el costo de tu viaje. Al seleccionar Uber Pool, la aplicación te mostrará el costo estimado y
            te informará si hay otros pasajeros en la misma ruta.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo puedo contactar al conductor después de solicitar
            un viaje?</div>
        <div class="faq-answer">Una vez que se asigna un conductor para tu viaje, puedes contactarlo a través de la
            aplicación Uber. En la pantalla de detalles del viaje, encontrarás opciones para llamar o enviar un mensaje
            al conductor. Esto es útil si necesitas coordinar detalles sobre la ubicación de recogida o si tienes alguna
            pregunta específica antes de que llegue.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Qué hacer si olvido un objeto en el vehículo?*</div>
        <div class="faq-answer">Si olvidaste un objeto en el vehículo, abre la aplicación Uber y dirígete a la sección
            de “Ayuda”. Allí encontrarás una opción para reportar un objeto perdido. Proporciona detalles sobre el
            artículo perdido y el viaje en cuestión. Uber te pondrá en contacto con el conductor para coordinar la
            devolución. También puedes contactar directamente al soporte de Uber para asistencia adicional.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cuánto tiempo tengo para cancelar un viaje sin cargo?
        </div>
        <div class="faq-answer">Tienes un período de gracia de 5 minutos después de confirmar un viaje para cancelarlo
            sin cargo. Si decides cancelar después de este período, se aplicará una tarifa de cancelación, que varía
            según la distancia recorrida y el tipo de servicio. La tarifa se muestra en la aplicación cuando realizas la
            cancelación.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Uber ofrece servicios para personas con movilidad
            reducida en Buenos Aires?</div>
        <div class="faq-answer">Sí, Uber ofrece opciones accesibles para personas con movilidad reducida, como Uber
            Access, en Buenos Aires. Estos vehículos están equipados para proporcionar un transporte cómodo y accesible.
            Puedes seleccionar esta opción al solicitar un viaje si necesitas asistencia adicional. Es recomendable
            verificar la disponibilidad en tu área a través de la aplicación.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo puedo ver el historial de mis viajes?</div>
        <div class="faq-answer">Puedes revisar el historial de tus viajes accediendo a la sección de “Tus Viajes” en la
            aplicación Uber. Allí encontrarás una lista completa de todos los viajes que has realizado, junto con
            detalles como la fecha, la hora, el destino y el costo. Puedes seleccionar cualquier viaje para ver más
            detalles o para descargar recibos.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Puedo modificar mi destino una vez que el viaje ha
            comenzado?</div>
        <div class="faq-answer"> Sí, puedes modificar tu destino durante el viaje a través de la aplicación Uber.
            Simplemente toca el ícono de la ruta en la pantalla y selecciona “Cambiar destino”. Introduce el nuevo
            destino y la aplicación actualizará la ruta del viaje en tiempo real, siempre y cuando el nuevo destino esté
            dentro del área de servicio de Uber.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo se calcula el costo de un viaje?</div>
        <div class="faq-answer">El costo de un viaje se calcula en función de varios factores, incluyendo la distancia
            recorrida, el tiempo del viaje, el tipo de servicio solicitado y la demanda en ese momento. La aplicación
            Uber te muestra una estimación del costo antes de que confirmes la solicitud, y el precio final puede variar
            ligeramente dependiendo de las condiciones del tráfico y otros factores.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Qué hacer si mi conductor no llega?</div>
        <div class="faq-answer"> Si tu conductor no llega dentro del tiempo estimado, puedes usar la aplicación Uber
            para contactar al soporte y obtener ayuda. Verifica el estado del viaje en la aplicación y, si es necesario,
            llama al conductor directamente para confirmar su ubicación. También puedes cancelar el viaje y solicitar
            uno nuevo si el problema persiste.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Uber tiene opciones de viaje con mascotas en Buenos
            Aires?</div>
        <div class="faq-answer">Sí, Uber permite llevar mascotas en algunos tipos de vehículos, como UberX. Sin embargo,
            es recomendable informar al conductor antes del viaje para asegurarte de que esté de acuerdo con el
            transporte de mascotas. En algunos casos, puedes necesitar utilizar una jaula o transportadora para
            garantizar la comodidad de tu mascota y la limpieza del vehículo.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo reporto un problema con mi viaje?</div>
        <div class="faq-answer">Puedes reportar problemas con tu viaje a través de la sección de “Ayuda” en la
            aplicación Uber. Allí encontrarás opciones para informar sobre problemas relacionados con el viaje, como
            conductores, tarifas, o cualquier inconveniente que hayas experimentado. La aplicación te guiará a través
            del proceso de reporte y te permitirá comunicarte directamente con el soporte de Uber.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cuál es el tiempo estimado de espera para un viaje en
            Buenos Aires?</div>
        <div class="faq-answer">El tiempo estimado de espera para un viaje en Buenos Aires puede variar dependiendo de
            la demanda y la ubicación. Generalmente, puedes esperar entre 5 y 10 minutos para que un conductor llegue a
            tu ubicación. Durante horas pico, el tiempo de espera puede ser mayor, y la aplicación te proporcionará una
            estimación en tiempo real.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Uber ofrece promociones o descuentos en Buenos Aires?
        </div>
        <div class="faq-answer">Uber frecuentemente ofrece promociones y descuentos en Buenos Aires, los cuales puedes
            encontrar en la sección de “Promociones” de la aplicación. Estas ofertas pueden incluir descuentos en
            viajes, códigos promocionales y otras promociones especiales. Asegúrate de revisar regularmente la
            aplicación para aprovechar las ofertas disponibles.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Puedo solicitar un viaje para otra persona?</div>
        <div class="faq-answer">Sí, puedes solicitar un viaje para otra persona usando la aplicación Uber. Simplemente
            ingresa la ubicación de recogida y el destino de la persona para la que estás solicitando el viaje. Puedes
            agregar detalles adicionales, como instrucciones especiales para el conductor, y pagar el viaje con tu
            método de pago registrado.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Qué hacer si tengo un problema con la aplicación de
            Uber?</div>
        <div class="faq-answer">Si experimentas problemas con la aplicación Uber, como errores o dificultades técnicas,
            puedes contactar al soporte técnico a través de la sección de “Ayuda” en la aplicación. Allí encontrarás
            opciones para resolver problemas comunes y obtener asistencia para solucionar cualquier inconveniente que
            enfrentes.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Qué medidas de seguridad toma Uber en Buenos Aires?
        </div>
        <div class="faq-answer">Uber implementa varias medidas de seguridad para proteger a los usuarios en Buenos
            Aires. Estas incluyen el seguimiento en tiempo real del viaje, la verificación de antecedentes de los
            conductores, la posibilidad de compartir tu ruta con contactos de confianza, y un sistema de calificación
            que permite a los usuarios y conductores evaluar la calidad del servicio.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Puedo utilizar Uber con un plan de datos limitado?
        </div>
        <div class="faq-answer">Sí, puedes utilizar Uber con un plan de datos limitado, pero es recomendable tener una
            conexión a Internet estable para evitar problemas durante el uso de la aplicación. Considera usar una red
            Wi-Fi cuando sea posible o asegurarte de que tu plan de datos cubra el uso necesario para solicitar y seguir
            tu viaje.</div>
    </div>
    <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(event)">¿Cómo puedo calificar a mi conductor después del viaje?
        </div>
        <div class="faq-answer">Después de completar un viaje, la aplicación Uber te pedirá que califiques a tu
            conductor y dejes un comentario sobre tu experiencia. Esto se hace a través de un sistema de estrellas,
            donde puedes seleccionar una calificación de 1 a 5 estrellas. También puedes dejar un comentario para
            proporcionar retroalimentación específica sobre el servicio recibido.</div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /home/andrade/Documents/Proyectos/php/uber/resources/views/uber/preguntas-frecuentes.blade.php ENDPATH**/ ?>