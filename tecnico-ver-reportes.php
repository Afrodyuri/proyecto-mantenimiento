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

// Realiza la consulta para obtener los reportes de mantenimiento
$sql = "SELECT * FROM reportes_mantenimiento";
$result = $conn->query($sql);

// Verifica si la consulta se ejecutó correctamente
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

// Cierra la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Reportes de Mantenimiento</title>
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
        .table {
            background-color: #FFFFFF;
            color: #000000;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <img src="img/salir.png" width="20rem" alt=""> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido para visualizar los reportes de mantenimiento -->
<div class="container mt-5">
    <h2>Reportes de Mantenimiento</h2>
    <a href="tecnico_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Mantenimiento</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Tipo de Equipo</th>
                <th>Sistema Operativo</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Muestra los resultados de la consulta en la tabla
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["fecha_mantenimiento"] . "</td>";
                    echo "<td>" . $row["modelo"] . "</td>";
                    echo "<td>" . $row["estado"] . "</td>";
                    echo "<td>" . $row["tipo_equipo"] . "</td>";
                    echo "<td>" . $row["sistema_operativo"] . "</td>";
                    echo "<td>" . $row["observaciones"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No hay reportes de mantenimiento</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm
