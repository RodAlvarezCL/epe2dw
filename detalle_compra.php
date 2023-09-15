<?php
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$apellido_usuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : null;
$email_usuario = isset($_SESSION['email']) ? $_SESSION['email'] : null;

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

if (isset($_GET['transaccion'])) {
    // Obtén el número de transacción desde la URL
    $numeroTransaccion = $_GET['transaccion'];

    // Consulta SQL para obtener todas las compras asociadas a la transacción
    $sql = "SELECT Destino, ValorPagado, FechaCompra FROM historial WHERE UsuarioID = $id_usuario AND NumeroTransaccion = $numeroTransaccion";

    // Ejecutar la consulta
    $resultado = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Compra</title>
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
        <h1><p style="font-size: 30px; color: grey;"><b><u>Aerolíneas Vuela Alto</u></b></h1>
        <h1><p style="font-size: 20px; color: grey;">Detalle de Compra (Transacción : <?php echo $numeroTransaccion; ?>)</h1>
        <h1><p style="font-size: 20px; color: grey;">Usuario: <?php echo $nombre_usuario . ' ' . $apellido_usuario; ?></h1>
        <?php
        if (isset($email_usuario)) {
            echo '<h1><p style="font-size: 20px; color: grey;">Email: ' . $email_usuario . '</h1>';
        } else {
            echo '<h1><p style="font-size: 20px; color: grey;">Email: (No disponible)</h1>';
        }
        ?>
       
        <table class="table">
            <thead>
                <tr>
                    <th><U>Destino</U></th>
                    <th><U>Valor Pagado (US$)</U></th>
                    <th><U>Fecha de Compra</U></th>
                <br>               
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($resultado)) {
                    // Itera a través de los resultados de la consulta y muestra el detalle de la compra
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["Destino"] . "</td>";
                        echo "<td>$" . $fila["ValorPagado"] . "</td>";
                        echo "<td>" . $fila["FechaCompra"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron detalles de compra para esta transacción.</td></tr>";
                }
                ?>
            </tbody>
        </table>

               <!-- Botón centrado vertical y horizontalmente -->
                <div class="d-flex justify-content-center align-items-center my-3">
                <button class="btn btn-primary imprimir-detalle" onclick="imprimirDetalle()">Imprimir Boucher</button>
                <a class="btn btn-secondary mx-3" href="historial_compras.php">Volver a Detalle de Compra</a>
                </div>
    </div>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <script>
        // Función para abrir la ventana de impresión
        function imprimirDetalle() {
            const ventanaImpresion = window.open('', '', 'width=600,height=400');
            ventanaImpresion.document.write('<html><head><title>Detalle de Compra</title></head><body>');

            // Copia el contenido que deseas imprimir
            ventanaImpresion.document.write(document.querySelector('.container').innerHTML);

            ventanaImpresion.document.write('</body></html>');
            ventanaImpresion.document.close();
            ventanaImpresion.print(); // Imprime la ventana emergente
        }
    </script>
</body>
</html>
