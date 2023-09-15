<?php
// Establece la conexión con la base de datos 
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "proyecto_web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtiene los datos de la compra desde la solicitud AJAX
$data = json_decode(file_get_contents("php://input"));

// Inserta los datos de la compra en la base de datos
$sql = "INSERT INTO historial (UsuarioID, NumeroTransaccion, ValorPagado, FechaCompra) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iids", $data->usuarioID, $data->numeroTransaccion, $data->valorPagado, $data->fechaCompra);

if ($stmt->execute()) {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
