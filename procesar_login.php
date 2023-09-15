<?php
// Establecer la conexión con la base de datos (cambia las credenciales según corresponda)
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "proyecto_web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los valores del formulario
$email = $_POST["email"];
$password = $_POST["password"];

// Consulta SQL usando sentencia preparada para verificar si el usuario existe
$sql = "SELECT id, nombre, apellido, email FROM usuarios WHERE email = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró un usuario
if ($result->num_rows > 0) {
    // Obtener el nombre y apellido del usuario de la base de datos
$row = $result->fetch_assoc();
$nombre_usuario = $row["nombre"];
$id_usuario = $row["id"];
$apellido_usuario = $row["apellido"]; // Verifica si se obtiene correctamente
$email_usuario = $row["email"];

    // Iniciar la sesión y almacenar el nombre del usuario y ID
    session_start();
    $_SESSION['id'] = $id_usuario;  
    $_SESSION['nombre'] = $nombre_usuario;
    $_SESSION['apellido'] = $apellido_usuario;
    $_SESSION['email'] = $email_usuario;

    // Redirigir al usuario a la página de inicio o a donde desees
    header("Location: index.php");
    exit();
} else {
    // Usuario no encontrado, mostrar un mensaje de error y redirigir a la página de inicio de sesión
    $error_message = "Correo electrónico o contraseña incorrectos.";
    include("login.php");
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
?>
