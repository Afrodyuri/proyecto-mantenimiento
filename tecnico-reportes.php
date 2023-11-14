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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegúrate de que la fecha se formatee correctamente
    $fecha_mantenimiento = date('Y-m-d', strtotime($_POST['fecha_mantenimiento']));

    // Realiza la inserción de datos
    $sql = "INSERT INTO reportes_mantenimiento (fecha_mantenimiento, modelo, estado, tipo_equipo, sistema_operativo, observaciones)
            VALUES ('$fecha_mantenimiento', '$_POST[modelo]', '$_POST[estado]', '$_POST[tipo_equipo]', '$_POST[sistema_operativo]', '$_POST[observaciones]')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Reporte de mantenimiento enviado exitosamente');</script>";
    } else {
        echo "Error en la inserción de datos: " . $conn->error;
    }
}
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Procesa el formulario (aquí debes agregar la lógica para guardar en la base de datos)

  // Redirige a la página de visualización después de procesar el formulario
  header("Location: tecnico-ver-reportes.php");
  exit(); // Asegúrate de terminar la ejecución del script después de la redirección
}

// Cierra la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte de mantenimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
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

<!-- Contenido del panel -->
<div class="contaider-fluid bg-primary">
    <h4 class="text-white p-5 fw-bold">Técnico</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="tecnico_panel.php">
                <a href="tecnico_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
                </a>
            </div>
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <h4 class="card-title fw-bolder text-black text-center">REPORTE DE MANTENIMIENTO</h4>
                        <p class="mt-4 text-center">Reporte de servicio de mantenimientos realizados</p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <h5 class="mt-5 fw-semibold">Datos del equipo</h5>
                            <div class="input-group">
                                <!-- Agrega aquí los campos del formulario -->
                                <div class="input-group gap-1 mt-3">
                                    <input class="form-control bg-light" type="text" placeholder="Modelo" name="modelo" required>
                                    <input class="form-control bg-light" type="text" placeholder="Estado" name="estado" required>
                                </div>
                                <div class="input-group gap-1 mt-2">
                                    <input class="form-control me-2 bg-light text-center" type="date" aria-label="date" name="fecha_mantenimiento" required>
                                    <select class="form-select" aria-label="Tipo de Equipo" name="tipo_equipo" required>
                                        <option selected>Tipo de Equipo</option>
                                        <option value="Presencial">Torre</option>
                                        <option value="Virtual">Portatil</option>
                                    </select>
                                    <select class="form-select" aria-label="Sistema operativo" name="sistema_operativo" required>
                                        <option selected>Sistema operativo</option>
                                        <option value="Windows">Windows</option>
                                        <option value="Linux">Linux</option>
                                        <option value="MacOS">MacOS</option>
                                    </select>
                                </div>
                                <p class="mt-2">Observaciones</p>
                                <div class="input-group gap-1">
                                    <input class="form-control bg-light" type="text" style="height: 10rem;" name="observaciones" required>
                                </div>
                                <div class="d-flex justify-content-around  mt-1">
                                    <div class="d-flex align-items-center gap-1">
                                        <input class="form-check-input" type="checkbox" required>
                                        <div class="pt-1" style="font-size: 0.9rem;">Acepto que los datos registrados son verídicos</div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary mt-3" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<!-- Pie de página -->
<div>
    <br><br>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
