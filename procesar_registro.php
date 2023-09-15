<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
        <!-- Contenido principal -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php
                // Conexión a la base de datos MySQL
                $servername = "localhost"; // Servidor MySQL
                $username = "root"; // nombre de usuario de MySQL
                $password = "root123"; // contraseña de MySQL
                $dbname = "proyecto_web"; // Nombre de la base de datos

                // Crea una conexión a la base de datos
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verifica la conexión
                if ($conn->connect_error) {
                    die("La conexión a la base de datos falló: " . $conn->connect_error);
                }

                // Obtiene los datos del formulario de registro
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $email = $_POST["email"];
                $contrasena = $_POST["contrasena"];

                // Inserta los datos en la tabla de usuarios
                $sql = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";

                if ($conn->query($sql) === TRUE) {
                    echo "<h2>Registro exitoso. ¡Bienvenido!</h2>";
                    echo "<meta http-equiv='refresh' content='5;url=login.php'>"; // Redirigir después de 5 segundos a login.php
                    echo "<p> Ya puedes revisar nuestros paquetes y animarte a viajar con nosotros!";
                    echo "<p> Si no eres redirigido automáticamente, <a href='login.php'>Haz clic aquí</a>.</p>"; // Enlace opcional para redirigir manualmente
                } else {
                    echo "<h2>Error al registrar:</h2>";
                    echo "<p>" . $conn->error . "</p>";
                }

                // Cierra la conexión a la base de datos
                $conn->close();
                ?>
            </div>
        </div>
    </div>

</body>
</html>
