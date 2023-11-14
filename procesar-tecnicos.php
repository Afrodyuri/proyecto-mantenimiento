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

// Asegúrate de que la fecha se formatee correctamente
$fecha_programacion = date('Y-m-d', strtotime($_POST['fecha_programacion']));

// Realiza la inserción de datos
$sql = "INSERT INTO tecnicos_programados (fecha_programacion, modalidad, correo_tecnico, identificacion_tecnico, nombre_empresa, telefono_empresa, correo_empresa, direccion_empresa)
        VALUES ('$fecha_programacion', '$_POST[modalidad]', '$_POST[correo_tecnico]', '$_POST[identificacion_tecnico]', '$_POST[nombre_empresa]', '$_POST[telefono_empresa]', '$_POST[correo_empresa]', '$_POST[direccion_empresa]')";

if ($conn->query($sql) === TRUE) {
    // Redirecciona después de la inserción exitosa
    header("Location: ver-tecnicos-programados.php");
    exit();
} else {
    echo "Error en la inserción de datos: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
