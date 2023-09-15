<?php
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$apellido_usuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : null;
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$email_usuario = isset($_SESSION['email']) ? $_SESSION['email'] : null;

// Verifica si se ha enviado la solicitud POST con los detalles de la compra
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["detalles"])) {
    // Recupera los detalles de la compra desde la solicitud POST
    $detallesCompra = $_POST["detalles"];

    // Convierte los detalles de la compra de JSON a un array de PHP
    $detallesArray = json_decode($detallesCompra, true);

    // Realiza la conexión a la base de datos (asegúrate de usar tus propias credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "root123";
    $dbname = "proyecto_web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Genera un número de transacción único (puedes usar una lógica más sofisticada)
    $numeroTransaccion = rand(10000000, 99999999);

    // Inserta los detalles de la compra en la tabla "historial"
    foreach ($detallesArray as $detalle) {
        $Destino = $detalle["nombre"];
        $FechaCompra = date('Y-m-d H:i'); // Obtiene la fecha y hora actual en formato MySQL
        $ValorPagado = $detalle["precio"]; // Aquí debes asegurarte de que $detalle["precio"] contenga el precio correcto
        
        $sql = "INSERT INTO historial (UsuarioID, NumeroTransaccion, Destino, ValorPagado, FechaCompra) VALUES ('$id_usuario', '$numeroTransaccion', '$Destino', '$ValorPagado', '$FechaCompra')";

        if ($conn->query($sql) === false) {
            echo "Error al guardar los detalles de la compra: " . $conn->error;
            exit();
       }
    }

    // Cierra la conexión a la base de datos
    $conn->close();

    // Envía una respuesta de éxito al cliente
    echo "¡Reserva exitosa! \n\nNúmero de transacción: $numeroTransaccion \n\nFavor procede con el pago vía transferencia \nNombre: Aerolíneas Vuela Alto\nBanco: XXXXXXXXX\nCta Cte: 1234567890\nEmail: contacto@aerolinea.cl" ;
    
} else {
    // Si no se enviaron los detalles de la compra, muestra un mensaje de error
    echo "Error: No se recibieron los detalles de la compra.";
}
?>