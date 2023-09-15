<?php 
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$apellido_usuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : null;
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$email_usuario = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?> 

<?php
// Configuración de la conexión a la base de datos (igual que en destinos.html)
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "proyecto_web";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Consulta SQL para obtener una lista de transacciones únicas del usuario
$sql = "SELECT DISTINCT NumeroTransaccion FROM historial WHERE UsuarioID = $id_usuario";

// Ejecutar la consulta
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Historial de Compras</title>
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
        <h1 class="display-4">Mi Historial de Compras</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Número de Transacción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Itera a través de los resultados de la consulta y muestra la lista de transacciones
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["NumeroTransaccion"] . "</td>";
                    echo "<td><a href='detalle_compra.php?transaccion=" . $fila["NumeroTransaccion"] . "'>Ver Detalle</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <!-- Botón para regresar a "destinos.php" -->
    <div class="d-flex justify-content-center my-3">
        <a class="btn btn-primary" href="destinos.php">Volver a Destinos</a>
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
