<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aerolíneas Vuela Alto - Centro de Ayuda</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <?php
    session_start();
     $nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
     ?>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"
          ><img src="imag/logo68px.png"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="destinos.php">Destinos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hoteles.php">Hoteles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ayuda.php">Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactos.php">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-3">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
              <?php
              if ($nombre_usuario) {
                  echo "<p>Bienvenido, $nombre_usuario | <a href='cerrar_sesion.php'>Cerrar Sesión</a></p>";
              } else {
                  echo "<p><a href='login.php'>Iniciar Sesión</a></p>";
              }
              ?>
          </div>
      </div>
  </div>
    <div class="container my-3">
      <div class="row">
        <h1 class="display-4">Centro de ayuda - Preguntas Frecuentes</h1>
      </div>
      <br /><br />
      <div class="accordion" id="faqAccordion">
        <!-- Pregunta 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              ¿Cómo funciona el Check-in automático?
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Una vez que hayas realizado la compra de tu pasaje en vuelo
              nacional, te enviaremos inmediatamente tu tarjeta de embarque
              dinámica. Cuando queden 48 horas antes de tu vuelo, ya tendrás la
              información actualizada con los últimos detalles de tu viaje. El
              día de tu vuelo, preséntate en el aeropuerto normalmente. Si
              viajas con equipaje de mano, solo tienes que pasar directamente a
              la puerta de embarque con tu cédula de identidad o pasaporte. En
              tu tarjeta de embarque dinámica verás actualizado el número de
              puerta. Si llevas equipaje de bodega, dirígete a nuestro counter o
              kiosco de autoatención para etiquetar tus maletas y entregarlas en
              el counter.
            </div>
          </div>
        </div>

        <!-- Pregunta 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              ¿Puedo cambiar un vuelo o la fecha de mi pasaje?
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Puedes llamar para verificar si tu pasaje te permite cambiar la
              fecha o destino de tu viaje sin multas ni diferencias tarifarias.
              Si el vuelo es cancelado o reprogramado debido a la pandemia
              COVID-19, o por otras razones de seguridad o de fuerza mayor,
              podrás reprogramar tu viaje, solicitar el reembolso del valor del
              pasaje o contratar otros servicios de nuestra aerolínea. Conoce
              más en nuestra sección de política de cambios. Ten en cuenta que
              por ahora, el cambio de pasajes en línea sólo está disponible en
              Chile y Ecuador.
            </div>
          </div>
        </div>

        <!-- Pregunta 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
            >
              ¿Qué pasa si mi vuelo se canceló?
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              No te preocupes, llama y podrás aceptar el nuevo itinerario que te
              proponemos o: <br />- Elegir una nueva fecha <br />- Pedir la
              devolución.<br /><br />
              Si quieres elegir una nueva fecha: <br />- Podrás hacer un cambio
              sin costo en la misma cabina del viaje original. <br />- Podrás
              reprogramar el nuevo vuelo durante la vigencia de tu pasaje*.
              <br /><br />*Vigencia del pasaje: <br />- Si tu viaje original
              comenzaba entre el 1 de marzo y el 31 de diciembre 2020, la
              vigencia es hasta el 31 de diciembre de 2021. <br />- Si tu viaje
              original comienza en 2021, la vigencia es de 12 meses a partir de
              la fecha del primer vuelo de tu pasaje. <br />- Si ya comenzaste
              el viaje, deberás completar el regreso no más allá de 12 meses
              desde tu primer vuelo. <br /><br />Si prefieres no viajar y pedir
              la devolución:<br />- Recibirás un Travel Voucher que podrás
              canjear por servicios de la aerolínea o dinero. Si usaste tus
              millas para canjear tu pasaje, éstas serán devueltas en tu cuenta
              de socio.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
