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

// Realiza la consulta para obtener los mantenimientos programados
$sql = "SELECT * FROM mantenimientos_programados";
$result = $conn->query($sql);

// Verifica si la consulta se ejecutó correctamente
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Mantenimientos Programados</title>
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
    <div class="container mt-5">
        <h2>Mantenimientos Programados</h2>
        <li class="nav-item">
                    <a class="nav-link" href="login.php">
                    <a href="tecnico_panel.php"><img class="" src="img/back.png" width="50rem" alt="volver"></a>
                    </a>
                </li>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Fecha de Programación</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Muestra los resultados de la consulta en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["usuario"] . "</td>";
                        echo "<td>" . $row["fecha_programacion"] . "</td>";
                        echo "<td>" . $row["tipo"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay mantenimientos programados</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
