<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mantenimiento";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>
