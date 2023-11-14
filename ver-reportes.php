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

// Realiza la consulta para obtener todos los reportes
$sql = "SELECT * FROM reportes_servicio";
$result = $conn->query($sql);

// Cierra la conexión
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="form.css">

    <meta charset="utf-8">
    <meta name=
    <meta name
"viewport" content="width=device-width, initial-scale=1">
    <title>Ver Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- Estilo adicional -->
    <style>
        body {
            background-color: #007bff;
        }

        .navbar {
            background-color: 
        }

        .navbar {
#343a40 !important;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 
            border-collapse: collapse;
            margin-top
20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #343a40;
            color: 
            color:
#ffffff;
        }

        tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
        }

        .volver-btn {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Reportes de Servicio</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Número de Orden</th>
            <th>Fecha de Servicio</th>
            <th>Descripción del Servicio</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Muestra los resultados de la consulta en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["numero_orden"] . "</td>";
                echo "<td>" . $row["fecha_servicio"] . "</td>";
                echo "<td>" . $row["descripcion_servicio"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay reportes disponibles</td></tr>";
        }
        ?>
        </tbody>
    </table>
    
    <a href="admin-reportes.php" class="volver-btn">Volver a Reportes</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
