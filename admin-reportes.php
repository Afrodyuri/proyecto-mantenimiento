<?php
// Conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Código PHP para la inserción en la base de datos
    $numero_orden = $_POST['numero_orden'];
    $fecha_servicio = $_POST['fecha_servicio'];
    $descripcion_servicio = $_POST['descripcion_servicio'];

    $sql = "INSERT INTO reportes_servicio (numero_orden, fecha_servicio, descripcion_servicio) 
            VALUES ('$numero_orden', '$fecha_servicio', '$descripcion_servicio')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver-reportes.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reportes de servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">

    <meta name="description" content="Reportes de servicios desde la vista de Administrador">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body class="bg-primary">

    <!--navbar-->

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="login.php">
                <img src="img/logosolo.png" alt="logo pagina" width="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="nav nav-tabs ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="perfil-admin.php"><img src="img/cliente.png" width="20rem" alt="">
                            Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><img src="img/salir.png" width="20rem" alt=""> Cerrar
                            sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--panel-->

    <div class="container-fluid bg-primary">
        <h4 class="text-white p-5 fw-bold">Administrador</h4>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-2">
                    <a href="admin_panel.php"><img src="img/back.png" width="50rem" alt="volver"></a>
                </div>

                <div class="col-md-8">
                    <div class="card border-0 ">
                        <div class="card-body">
                            <h4 class="card-title fw-bolder text-black">CONSULTAR REPORTES</h4>
                            <p class="mt-4">Reportes de servicio de mantenimientos realizados</p>
                            <div class="input-group justify-content-center align-items-center">
                                <form role="search" style="width: 25rem;" method="post"
                                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <p class="mt-2 fw-semibold">Número de orden:</p>
                                    <input class="form-control me-2 bg-light" type="search" name="numero_orden"
                                        aria-label="Search" required>

                                    <p class="mt-2 fw-semibold">Fecha de servicio:</p>
                                    <input class="form-control me-2 bg-light" type="date" name="fecha_servicio"
                                        required>

                                    <p class="mt-2 fw-semibold">Descripción del servicio:</p>
                                    <textarea class="form-control me-2 bg-light" name="descripcion_servicio" rows="4"
                                        required></textarea>

                                    <button class="btn btn-primary mt-4" type="submit">Guardar Reporte</button>
                                </form>

                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    echo '
                                    <button class="btn btn-success mt-4 ms-2" onclick="mostrarAlerta()">Ver Reportes</button>
                                    <a href="admin-reportes.php" class="btn btn-secondary mt-4 ms-2">
                                        <img src="img/back-arrow.png" width="20" alt="volver"> Volver
                                    </a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>

        <div>
            <br><br>
        </div>

        <!-- Script para la funcionalidad de inicio de sesión y la alerta de éxito -->
        <script>
            function mostrarAlerta() {
                alert("Reporte insertado exitosamente");
                window.location.href = "ver-reportes.php";
            }
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script>(function(d) { var s = d.createElement("script"); s.setAttribute("data-account", "9n4L4pC3pz"); s.setAttribute("src", "https://cdn.userway.org/widget.js"); (d.body || d.head).appendChild(s); })(document)</script>
</body>

</html>

</body>

</html>
``










