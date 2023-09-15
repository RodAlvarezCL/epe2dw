<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aerolíneas Vuela Alto - Hoteles</title>
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!-- Estilos CSS para miniaturas y efectos -->
    <style>
      /* Estilos para las miniaturas */
      .hotel-thumbnails {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
      }

      .thumbnail {
        width: 30%;
        transition: transform 0.5s ease; /* tiempo de la transición de las miniaturas */
      }

      /* Efecto y escala al pasar el mouse por sobre la miniatura*/
      .thumbnail:hover {
        transform: scale(1.4);
      }
    </style>
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
              <a class="nav-link" href="Destinos.php">Destinos</a>
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
        <h1 class="display-4">Nuestros Hoteles</h1>
        <p class="card-text text-white">
          En Aerolíneas Vuela Alto, nos enorgullece ofrecer a nuestros pasajeros
          experiencias de viaje excepcionales y hospedaje de alta calidad. Hemos
          establecido convenios exclusivos con los hoteles que presentamos a
          continuación. Esto significa que, al reservar su estancia a través de
          nosotros, disfrutará de tarifas especiales y beneficios adicionales
          que solo nuestros clientes pueden aprovechar. Nos esforzamos por
          brindarle comodidades de primera clase en cada paso de su viaje, desde
          la reserva de vuelos hasta su alojamiento.<br />
          ¡Explore estos hoteles excepcionales y descubra las ventajas de viajar
          con Aerolíneas Vuela Alto! <br /><br />
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="imag/hotel1.jpg" class="card-img-top" alt="Hotel 1" />
            <div class="card-body">
              <h5 class="card-title">Bora-Bora Pearl Beach Resort & Spa</h5>
              <p class="card-text">
                Ubicado en Motu Tevairoa, a sólo diez minutos en barco desde el
                aeropuerto y quince minutos a través de la laguna desde el
                pueblo de Vaitape, Le Bora Bora by Pearl Resorts combina una
                ubicación paradisíaca y proximidad al continente. El complejo
                cuenta con un estilo y una arquitectura polinesios auténticos y,
                sin duda, ofrece algunas de las habitaciones de diseño más
                tradicional de Bora Bora. Las 108 habitaciones y villas están
                ubicadas en un hermoso jardín tropical, en la playa o
                suspendidas sobre la deslumbrante laguna.
              </p>
            </div>
            <!-- miniaturas hotel 1 -->
            <div class="hotel-thumbnails">
              <img
                src="imag/hotel1mini1-150x150px.jpg"
                alt="Miniatura 2"
                class="thumbnail"
              />
              <img
                src="imag/hotel1mini2-150x150px.jpg"
                alt="Miniatura 3"
                class="thumbnail"
              />
              <img
                src="imag/hotel1mini3-150x150px.jpg"
                alt="Miniatura 4"
                class="thumbnail"
              />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="imag/hotel2.jpg" class="card-img-top" alt="Hotel 2" />
            <div class="card-body">
              <h5 class="card-title">
                DoubleTree by Hilton Hotel New York Times Square West
              </h5>
              <p class="card-text">
                Disfrute de las vistas del río Hudson a sólo 10 minutos de Times
                Square. El Hotel está a 15 minutos a pie del Empire State
                Building, el Javits Center y los espectáculos de Broadway.
                Ubicado junto a la terminal de la Autoridad Portuaria y a pasos
                de varias líneas de metro. Disfrute de música en vivo con vistas
                despejadas de la ciudad en nuestro bar en la azotea. Cada
                estadía comienza con nuestra exclusiva galleta con chispas de
                chocolate!.
              </p>
            </div>
            <!-- miniaturas hotel 2 -->
            <div class="hotel-thumbnails">
              <img
                src="imag/hotel2mini1-150x150px.jpg"
                alt="Miniatura 1"
                class="thumbnail"
              />
              <img
                src="imag/hotel2mini2-150x150px.jpg"
                alt="Miniatura 2"
                class="thumbnail"
              />
              <img
                src="imag/hotel2mini3-150x150px.jpg"
                alt="Miniatura 3"
                class="thumbnail"
              />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="imag/hotel3.jpg" class="card-img-top" alt="Hotel 3" />
            <div class="card-body">
              <h5 class="card-title">Hotel MALTE - Astotel</h5>
              <p class="card-text">
                Situado en el distrito histórico del centro de París, a sólo 650
                metros del Museo del Louvre. Cuenta con un patio interior,
                habitaciones insonorizadas con TV satelital y WiFi gratuita.
                Cada habitación dispone de minibar, baño privado. Todas las
                mañanas se sirve un desayuno bufé en la sala de desayunos y se
                puede disfrutar en el patio del Hotel. Los niños pueden jugar en
                una zona exclusiva y segura. Ubicado a 450 metros de la estación
                de metro Pyramides, que conecta directamente con la estación de
                tren de Saint-Lazare.
              </p>
            </div>
            <!-- miniaturas hotel 3 -->
            <div class="hotel-thumbnails">
              <img
                src="imag/hotel3mini1-150x150px.jpg"
                alt="Miniatura 1"
                class="thumbnail"
              />
              <img
                src="imag/hotel3mini2-150x150px.jpg"
                alt="Miniatura 2"
                class="thumbnail"
              />
              <img
                src="imag/hotel3mini3-150x150px.jpg"
                alt="Miniatura 3"
                class="thumbnail"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
