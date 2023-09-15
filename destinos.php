<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto a tu servidor de base de datos
$username = "root"; // Cambia esto a tu nombre de usuario
$password = "root123"; // Cambia esto a tu contraseña
$dbname = "proyecto_web";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>
<?php
session_start();
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$apellido_user = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : null;
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$email_usuario = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolíneas Vuela Alto - Destinos</title>
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
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
                echo "<p>Bienvenido, $nombre_usuario $apellido_user | <a href='cerrar_sesion.php'>Cerrar Sesión</a></p>";
            } else {
                echo "<p><a href='login.php'>Iniciar Sesión</a></p>";
            }
            ?>
          <h1 class="display-4">Descubre Nuestros Destinos</h1>
        </div>
      </div>
    </div>

    <!-- Tarjetas de Destinos -->
    <div class="container my-4">
      <div class="row">
        <!-- Tarjeta 1 -->
        <div class="col-md-4">
          <div class="card">
            <img src="imag/destino1.jpg" class="card-img-top" alt="Destino 1">
            <div class="card-body">
              <h5 class="card-title">Islas Bora Bora</h5>
              <p class="card-text">Joya del Pacífico, fascina con aguas cristalinas, montañas verdes y lujosos bungalows sobre el agua.</p>
              <br>
              <h5 span class="texto-precio">US$ 7618.00</h5>
              <button class="btn btn-primary agregar-al-carrito" data-nombre="Islas Bora Bora" data-precio="7618">Agregar al Carro</button>
            </div>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="col-md-4">
          <div class="card">
            <img src="imag/destino2.jpg" class="card-img-top" alt="Destino 2">
            <div class="card-body">
              <h5 class="card-title">New York</h5>
              <p class="card-text">Ciudad icónica de rascacielos, cultura diversa, teatros brillantes, parques animados y oportunidades inagotables.</p>
              <h5 span class="texto-precio">US$ 785.00</h5>
              <button class="btn btn-primary agregar-al-carrito" data-nombre="New York" data-precio="785">Agregar al Carro</button>
            </div>
          </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="col-md-4">
          <div class="card">
            <img src="imag/destino3.jpg" class="card-img-top" alt="Destino 3">
            <div class="card-body">
              <h5 class="card-title">Egipto</h5>
              <p class="card-text">Las pirámides, monumentos ancestrales de ingeniería, misterio histórico y esplendor arquitectónico en el desierto.</p>
              <h5 span class="texto-precio">US$ 1793.00</h5>
              <button class="btn btn-primary agregar-al-carrito" data-nombre="Egipto" data-precio="1793">Agregar al Carro</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-4">
        <!-- Tarjeta 4 -->
        <div class="col-md-4">
          <div class="card">
            <img src="imag/destino4.jpg" class="card-img-top" alt="Destino 4">
            <div class="card-body">
              <h5 class="card-title">Paris</h5>
              <p class="card-text">La Ciudad de la Luz, cautiva con su elegancia, arte, historia, gastronomía y romántico encanto urbano.</p>
              <br>
              <h5 span class="texto-precio">US$ 1345.00</h5>
              <button class="btn btn-primary agregar-al-carrito" data-nombre="Paris" data-precio="1345">Agregar al Carro</button>
               </div>
          </div>
        </div>

        <!-- Tarjeta 5 -->
        <div class="col-md-4">
          <div class="card">
            <img src="imag/destino5.jpg" class="card-img-top" alt="Destino 5">
            <div class="card-body">
              <h5 class="card-title">India</h5>
              <p class="card-text">Taj Mahal, sublime mausoleo de mármol blanco, emblema de amor eterno, gra arquitectura y Patrimonio de la Humanidad.</p>
              <h5 span class="texto-precio">US$ 1760.00</h5>
              <button class="btn btn-primary agregar-al-carrito" data-nombre="India" data-precio="1760">Agregar al Carro</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carrito de Compras -->
    <div class="container my-3">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div id="carrito-container" class="border p-3">
          <h2 class="mb-3" style="color: white;">Carrito de Compras</h2>
            <ul id="carrito-list" class="list-group">
            </ul>
            <div id="mensaje-carrito-vacio" class="alert alert-warning mt-3" style="display: none;">
              El carrito está vacío. Agrega destinos antes de comprar.
            </div>
            <button id="vaciar-carrito" class="btn btn-danger btn-block mt-3">Vaciar Carrito</button>
            <button id="comprar-carrito" class="btn btn-success mt-3">Reservar</button>
            <a href="historial_compras.php" class="btn btn-primary mt-3">Historial de Compra</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <!-- JavaScript para el carrito de compras -->
    <script>
      // Obtén referencias a elementos HTML
const carritoList = document.getElementById("carrito-list");
const vaciarCarritoButton = document.getElementById("vaciar-carrito");
const mensajeCarritoVacio = document.getElementById("mensaje-carrito-vacio");

// Inicializa un carrito vacío
let carrito = [];

// Agregar evento de clic a los botones de agregar al carrito
const botonesAgregar = document.querySelectorAll(".agregar-al-carrito");
botonesAgregar.forEach((boton) => {
  boton.addEventListener("click", () => {
    const nombre = boton.getAttribute("data-nombre");
    const precio = parseFloat(boton.getAttribute("data-precio"));

    // Agrega el destino al carrito
    carrito.push({ nombre, precio });

    // Actualiza la visualización del carrito
    actualizarCarrito();
  });
});

// Agregar evento de clic al botón para vaciar el carrito
vaciarCarritoButton.addEventListener("click", () => {
  carrito = []; // Vacía el carrito
  actualizarCarrito();
});

// Función para actualizar la visualización del carrito
function actualizarCarrito() {
  // Limpia la lista actual
  carritoList.innerHTML = "";

  // Calcula el total de la compra
  let total = 0;

  // Recorre los elementos del carrito y crea la lista
  carrito.forEach((item, index) => {
    const listItem = document.createElement("li");
    listItem.textContent = `${item.nombre} - $${item.precio.toFixed(2)}`;
    listItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
    carritoList.appendChild(listItem);

    total += item.precio;

    // Agrega un botón para eliminar el elemento
    const eliminarButton = document.createElement("button");
    eliminarButton.textContent = "Eliminar";
    eliminarButton.classList.add("btn", "btn-danger", "btn-sm");
    eliminarButton.addEventListener("click", () => eliminarItemDelCarrito(index));
    listItem.appendChild(eliminarButton);
  });

  // Agrega el total al carrito
  const totalItem = document.createElement("li");
  totalItem.textContent = `Total: $${total.toFixed(2)}`;
  totalItem.classList.add("list-group-item", "font-weight-bold");
  carritoList.appendChild(totalItem);

  // Muestra o oculta el mensaje de carrito vacío
  if (carrito.length === 0) {
    mensajeCarritoVacio.style.display = "block";
  } else {
    mensajeCarritoVacio.style.display = "none";
  }
}

// Función para eliminar un elemento del carrito
function eliminarItemDelCarrito(index) {
  carrito.splice(index, 1); // Elimina el elemento en la posición index
  actualizarCarrito();
}

// Obtén referencia al botón "Comprar"
const comprarCarritoButton = document.getElementById("comprar-carrito");

function obtenerCarrito() {
  // Supongamos que carrito es una variable global que contiene los elementos del carrito
  return carrito;
}

function generarNumeroTransaccion() {
  // Genera un número aleatorio único de 8 dígitos
  return Math.floor(Math.random() * 100000000);
}

// Agregar evento de clic al botón "Comprar"
comprarCarritoButton.addEventListener("click", () => {
    // Obtén los elementos del carrito
    const carrito = obtenerCarrito();

    // Si el carrito no está vacío, procede con la compra
    if (carrito.length > 0) {
        // Crea un objeto con los detalles de la compra
        const detallesCompra = JSON.stringify(carrito);

        // Realiza una solicitud POST al servidor para guardar los detalles de la compra
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "guardar_compra.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Maneja la respuesta del servidor
                const respuesta = xhr.responseText;
                alert(respuesta); // Muestra una alerta con el número de transacción
                // Vacía el carrito después de comprar
                carrito.length = 0;
                actualizarCarrito();
            }
        };
        xhr.send("detalles=" + encodeURIComponent(detallesCompra));
    } else {
        // Si el carrito está vacío, muestra el mensaje de carrito vacío
        mensajeCarritoVacio.style.display = "block";
    }
});
</script>
</body>
</html>
