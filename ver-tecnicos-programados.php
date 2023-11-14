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


// Realiza la consulta para obtener los técnicos programados
$sql = "SELECT * FROM tecnicos_programados";
$result = $conn->query($sql);

// Verifica si la consulta se ejecutó correctamente
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
 else {
    echo "<tr><td colspan='9'>Error al recuperar los técnicos programados: " . $conn->error . "</td></tr>";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="form.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Técnicos Programados</title>
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
<li class="nav-item">
                    <a class="nav-link" href="login.php">
                    <a href="tecnico_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
                    </a>
                </li>
    <div class="container mt-5">
        <h2>Técnicos Programados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha de Programación</th>
                    <th>Modalidad</th>
                    <th>Correo del Técnico</th>
                    <th>Identificación del Técnico</th>
                    <th>Nombre de la Empresa</th>
                    <th>Teléfono de la Empresa</th>
                    <th>Correo de la Empresa</th>
                    <th>Dirección de la Empresa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Muestra los resultados de la consulta en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["fecha_programacion"] . "</td>";
                        echo "<td>" . $row["modalidad"] . "</td>";
                        echo "<td>" . $row["correo_tecnico"] . "</td>";
                        echo "<td>" . $row["identificacion_tecnico"] . "</td>";
                        echo "<td>" . $row["nombre_empresa"] . "</td>";
                        echo "<td>" . $row["telefono_empresa"] . "</td>";
                        echo "<td>" . $row["correo_empresa"] . "</td>";
                        echo "<td>" . $row["direccion_empresa"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No hay técnicos programados</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
