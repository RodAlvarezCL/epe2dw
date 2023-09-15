<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aerolíneas Vuela Alto - Contactos</title>
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
        <h1 class="display-4">Contactos</h1>
      </div>
      <div class="row">
        <div class="col-md-6 contact-info">
          <br /><br />
          <h2>Teléfono de Atención al Cliente</h2>
          <p>
            Para consultas y asistencia, puedes llamarnos al siguiente número de
            teléfono:
            <br /><br /><a href="tel:+56996040090">+56996040090</a>
            <br /><br /><a href="tel:+56996040091">+56996040091</a>
          </p>
        </div>
        <div class="col-md-6 contact-info">
          <br /><br />
          <h2>Correo Electrónico</h2>
          <p>
            También puedes contactarnos por correo electrónico a la siguiente
            dirección:
            <br /><br /><a href="mailto:contacto@aerolinea.cl"
              >contacto@aerolinea.cl</a
            >
          </p>
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
