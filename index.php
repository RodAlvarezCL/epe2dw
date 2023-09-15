<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolíneas Vuela Alto</title>
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Estilos personalizados de colores corporativos -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$apellido_usuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : null;
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$email_usuario = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?>
</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imag/logo68px.png" />
            </a>
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="destinos.php">Destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hoteles.php">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ayuda.php"> Ayuda</a>
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
                echo "<p>Bienvenido, $nombre_usuario $apellido_usuario | <a href='cerrar_sesion.php'>Cerrar Sesión</a></p>";
            } else {
                echo "<p><a href='login.php'>Iniciar Sesión</a></p>";
            }
            ?>
        </div>
    </div>

    <div class="container my-3">
        <div class="row">
            <h1 class="display-4">Aerolíneas Vuela Alto</h1>
            <p class="lead text-justify text-white">
                <!--texto blanco para el párrafo principal usando color corporativo secundario-->
                Bienvenido a una Experiencia de Vuelo Sin Límites En Aerolínea Vuela
                Lejos, desafiamos la gravedad y superamos cualquier distancias. Somos
                más que una aerolínea, somos un portal a nuevos horizontes, aventuras
                y emociones inolvidables. Te invitamos a explorar el mundo desde las
                alturas y a descubrir juntos lugares mágicos.
                <br /><br />¿Estás listo para despegar? <br /><br />Aerolínea Vuela
                Alto - Donde los sueños despegan hacia la realidad.
            </p>
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
