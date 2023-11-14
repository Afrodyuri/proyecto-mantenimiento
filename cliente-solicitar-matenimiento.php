<?php
// Conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesa el formulario (aquí debes agregar la lógica para guardar en la base de datos)

    $nombreCliente = $_POST["nombre_cliente"];
    $telefonoCliente = $_POST["telefono_cliente"];
    $correoCliente = $_POST["correo_cliente"];
    $direccionCliente = $_POST["direccion_cliente"];
    $fechaProgramacion = $_POST["fecha_programacion"];
    $modalidad = $_POST["modalidad"];
    $tipoMantenimiento = $_POST["tipo_mantenimiento"];
    $aceptaTerminos = isset($_POST["acepta_terminos"]) ? 1 : 0;

    // Aquí debes agregar la lógica para guardar en la base de datos
    $sql = "INSERT INTO solicitudes_mantenimiento (nombre_cliente, telefono_cliente, correo_cliente, direccion_cliente, fecha_programacion, modalidad, tipo_mantenimiento, acepta_terminos) VALUES ('$nombreCliente', '$telefonoCliente', '$correoCliente', '$direccionCliente', '$fechaProgramacion', '$modalidad', '$tipoMantenimiento', '$aceptaTerminos')";
    $result = $conn->query($sql);

    // Redirige a la página de visualización después de procesar el formulario
    header("Location: cliente-ver-solicitudes-mantenimiento.php");
    exit(); // Asegúrate de terminar la ejecución del script después de la redirección
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solicitar Mantenimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #007BFF;
            color: #FFFFFF;
        }
        .navbar {
            background-color: #007BFF;
        }
        .card {
            background-color: #FFFFFF;
            color: #000000;
        }
    </style>
</head>
   <!--navbar-->

   <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="index.php">
          <img src="img/logosolo.png" alt="logo pagina" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="nav nav-tabs ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="perfil-usuario.php"><img src="img/cliente.png" width="20rem" alt=""> Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><img src="img/salir.png" width="20rem" alt=""> Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="col-md-2">
                <a href="cliente_panel.php"><img src="img/back.png" width="50rem" alt="volver"></a>
              </div>
<body>
    <div class="container mt-5">
        <h2>Solicitar Mantenimiento</h2>
        <form method="post" action="">
            <!-- Agrega los campos del formulario según tus necesidades -->
            <div class="mb-3">
                <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
            </div>
            <div class="mb-3">
                <label for="telefono_cliente" class="form-label">Teléfono del Cliente</label>
                <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" required>
            </div>
            <div class="mb-3">
                <label for="correo_cliente" class="form-label">Correo del Cliente</label>
                <input type="text" class="form-control" id="correo_cliente" name="correo_cliente" required>
            </div>
            <div class="mb-3">
                <label for="direccion_cliente" class="form-label">Dirección del Cliente</label>
                <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" required>
            </div>
            <div class="mb-3">
                <label for="fecha_programacion" class="form-label">Fecha de Programación</label>
                <input type="date" class="form-control" id="fecha_programacion" name="fecha_programacion" required>
            </div>
            <div class="mb-3">
                <label for="modalidad" class="form-label">Modalidad</label>
                <select class="form-select" id="modalidad" name="modalidad" required>
                    <option value="Presencial">Presencial</option>
                    <option value="Virtual">Virtual</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tipo_mantenimiento" class="form-label">Tipo de Mantenimiento</label>
                <select class="form-select" id="tipo_mantenimiento" name="tipo_mantenimiento" required>
                    <option value="Correctivo">Correctivo</option>
                    <option value="Preventivo">Preventivo</option>
                </select>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="acepta_terminos" name="acepta_terminos" required>
                <label class="form-check-label" for="acepta_terminos">Acepto que los datos serán usados con el fin de proporcionar un mejor servicio.</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
