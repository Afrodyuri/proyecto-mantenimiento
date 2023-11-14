<?php
// Establecer la conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el número de mantenimiento de la URL
$numeroMantenimiento = isset($_GET['numero_mantenimiento']) ? $_GET['numero_mantenimiento'] : '';

// Realizar la consulta SQL para obtener la información del mantenimiento
$sql = "SELECT * FROM solicitudes_mantenimiento WHERE numero_mantenimiento = '$numeroMantenimiento'";
$result = $conn->query($sql);

// Verificar si la consulta se ejecutó correctamente
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Historial de servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Historial de servicios FG tecno S.A.S. vista desde el usuario">
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

<body class="bg-primary">

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

    <!--panel-->

    <div class="contaider-fluid bg-primary">
        <h4 class="text-white p-5 fw-bold">Usuario</h4>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <a href="cliente_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
              </div>
              
              <div class="col-md-8">
                <div class="card border-0 ">
                  <div class="card-body">
                    <h4 class="card-title fw-bolder text-black">HISTORIAL DE SERVICIOS</h4></a>
                    <p class="mt-4">Consultar mantenimientos realizados</p>
                    <div class="input-group justify-content-center align-items-center">
                        <form action="cliente-ver-solicitudes-mantenimiento.php" method="get">
                            <p class="mt-2 fw-semibold">Número de Mantenimiento:</p>
                            <input class="form-control me-2 bg-light text-center" type="text" name="numero_mantenimiento" value="<?php echo htmlspecialchars($numeroMantenimiento); ?>" required>
                            <button class="btn btn-primary mt-4" type="submit">Buscar</button>
                        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9n4L4pC3pz");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

</body>

</html>
