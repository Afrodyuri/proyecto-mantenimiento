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
    // Obtiene los datos del formulario
    $fecha_programacion = isset($_POST['fecha_programacion']) ? $_POST['fecha_programacion'] : null;
    $modalidad = isset($_POST['modalidad']) ? $_POST['modalidad'] : null;
    $correo_tecnico = isset($_POST['correo_tecnico']) ? $_POST['correo_tecnico'] : null;
    $identificacion_tecnico = isset($_POST['identificacion_tecnico']) ? $_POST['identificacion_tecnico'] : null;
    $nombre_empresa = isset($_POST['nombre_empresa']) ? $_POST['nombre_empresa'] : null;
    $telefono_empresa = isset($_POST['telefono_empresa']) ? $_POST['telefono_empresa'] : null;
    $correo_empresa = isset($_POST['correo_empresa']) ? $_POST['correo_empresa'] : null;
    $direccion_empresa = isset($_POST['direccion_empresa']) ? $_POST['direccion_empresa'] : null;

    // Realiza la inserción en la base de datos (ajusta la consulta según tu estructura)
    $sql = "INSERT INTO  tecnicos_programados (fecha_programacion, modalidad, correo_tecnico, identificacion_tecnico, nombre_empresa, telefono_empresa, correo_empresa, direccion_empresa) 
            VALUES ('$fecha_programacion', '$modalidad', '$correo_tecnico', '$identificacion_tecnico', '$nombre_empresa', '$telefono_empresa', '$correo_empresa', '$direccion_empresa')";

    if ($conn->query($sql) === TRUE) {
        echo "Programación de técnico realizada con éxito.";
    } else {
        echo "Error al programar al técnico: " . $conn->error;
    }
       // Redirige a la página de éxito
       header("Location: ver-tecnicos-programados.php");
       exit();
   } else {
       echo "Error al programar al técnico: " . $conn->error;
   }


// Cierra la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programación de técnicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    
    <meta name="description" content="Programación de técnicos vista desde el administrador">
</head><!-- (Tu código de scripts y enlaces JS aquí) -->
</body>
</html>

    <style>
        body {
            background-color: #007bff;
        }

        .navbar {
            background-color: #343a40 !important;
        }

        .nav-link,
        .navbar-brand {
            color: #ffffff !important;
        }

        .container {
            background-color: #ffffff;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
        }

        .input-group {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            margin: 5px;
        }

        .text-center button {
            margin-top: 20px;
        }
    </style>
</head>

<body class="bg-primary">

<!--navbar-->
<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logosolo.png" alt="logo pagina" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="perfil-admin.php"><img src="img/cliente.png" width="20rem" alt=""> Perfil</a>
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
    <h4 class="text-white p-5 fw-bold">Administrador</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="admin_panel.php"><img src="img/back.png" width="50rem" alt="volver"></a>
            </div>

            <div class="col-md-8">
                <div class="card border-0 ">
                    <div class="card-body">
                        <h4 class="card-title fw-bolder text-black text-center">PROGRAMACIÓN DE TÉCNICOS</h4></a>
                        <h5 class="mt-5 fw-semibold">Datos técnico</h5>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-group justify-content-center align-items-center">
                                <div class="input-group gap-1 mt-3">
                                    <input class="form-control bg-light" type="text" placeholder="Nombres y apellidos"
                                           style="width: 15.5rem;">
                                    <input class="form-control me-2 bg-light text-center" type="date"
                                           aria-label="date">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Modalidad</option>
                                        <option value="1">Presencial</option>
                                        <option value="2">Virtual</option>
                                    </select>
                                </div>
                                <div class="input-group gap-1 mt-2">
                                    <input class="form-control bg-light" type="text" placeholder="Correo electrónico">
                                    <input class="form-control bg-light" type="text"
                                           placeholder="Número de identificación">
                                </div>
                            </div>

                            <h5 class="mt-4 fw-semibold">Datos empresa</h5>
                            <div class="input-group justify-content-center align-items-center">
                                <div class="input-group gap-1 mt-3">
                                    <input class="form-control bg-light" type="text" placeholder="Nombre">
                                    <input class="form-control bg-light" type="text" placeholder="Teléfono">
                                </div>
                                <div class="input-group gap-1 mt-2">
                                    <input class="form-control bg-light" type="text" placeholder="Correo electrónico">
                                    <input class="form-control bg-light" type="text" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary mt-4" type="submit">Programar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<div>
    <br><br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

<script>(function (d) {
    var s = d.createElement("script");
    s.setAttribute("data-account", "9n4L4pC3pz");
    s.setAttribute("src", "https://cdn.userway.org/widget.js");
    (d.body || d.head).appendChild(s);
})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a
        href="https://userway.org">website accessibility</a></noscript>

</body>

</html>
