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

    $usuario = $_POST["usuario"];
    $fechaProgramacion = $_POST["fecha_programacion"];
    $tipo = $_POST["tipo"];

    // Aquí debes agregar la lógica para guardar en la base de datos
    $sql = "INSERT INTO mantenimientos_programados (usuario, fecha_programacion, tipo) VALUES ('$usuario', '$fechaProgramacion', '$tipo')";
    $result = $conn->query($sql);

    // Redirige a la página de visualización después de procesar el formulario
    header("Location: tecnico-ver-mantenimientos-programados.php");
    exit(); // Asegúrate de terminar la ejecución del script después de la redirección
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programar Mantenimiento</title>
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
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="login.php">
            <img src="img/logosolo.png" alt="logo pagina" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tecnico-perfil.php">
                        <img src="img/cliente.png" width="20rem" alt=""> Perfil
                    </a>
                    <li class="nav-item">
                <a class="nav-link" href="login.php"><img src="img/salir.png" width="20rem" alt=""> Cerrar sesión</a>
              </li>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
    <div class="container mt-5">
        <h2>Programar Mantenimiento</h2>
        <form method="post" action="">
            <div class="mb-3">
            <li class="nav-item">
                    <a class="nav-link" href="login.php">
                    <a href="tecnico_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
                    </a>
                </li>
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="fecha_programacion" class="form-label">Fecha de Programación</label>
                <input type="date" class="form-control" id="fecha_programacion" name="fecha_programacion" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <button type="submit" class="btn btn-primary">Programar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
