<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_type'] = $row['tipo'];

        if ($row['tipo'] == 'administrador') {
            header("Location: admin_panel.php");
        } elseif ($row['tipo'] == 'tecnico') {
            header("Location: tecnico_panel.php");
        } elseif ($row['tipo'] == 'cliente') {
            header("Location: cliente_panel.php");
        }
    } else {
        echo "Credenciales incorrectas. Por favor, intente nuevamente.";
    }
}
?>
