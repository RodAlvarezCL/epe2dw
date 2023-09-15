<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolíneas Vuela Alto - Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container my-3 d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="d-flex align-items-center mb-3">
                <img src="imag\logo68px.png" alt="Imagen" class="img-fluid mr-3">
                <h1 class="display-4">Aerolíneas Vuela Alto</h1>
            </div>
            <h1 class="display-4">Iniciar Sesión</h1> 
           
            <!-- Modificamos el atributo 'action' del formulario para que apunte a 'procesar_login.php' -->
            <form method="POST" action="procesar_login.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
            <!-- Mostrar mensaje de error (si existe) -->
            <br>
            <?php
            if (isset($error_message)) {
                echo "<p class='text-danger'>$error_message</p>";
            }
            ?>
            
            <br><br><br>
            <p>Si no tienes una cuenta, puedes <a href="registro.html">registrarte aquí</a>.</p>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
