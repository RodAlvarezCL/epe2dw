<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=login.php">
    <title>Cerrar Sesión - Aerolíneas Vuela Alto</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container my-5 text-center">
        <h1 class="display-4">¡Gracias por tu preferencia!</h1>
        <p>Has cerrado sesión correctamente.</p>
        <p>Serás redirigido a la página de inicio de sesión en unos segundos.</p>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
