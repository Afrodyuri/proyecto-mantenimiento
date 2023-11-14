<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>
<body class="login">
    <div class="logo login">
        <img src="img/logo.png" alt="Logo de la empresa">
    </div>
    <div class="container login">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="POST" class="form-container">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required><br>

            <button type="submit">Iniciar Sesión</button>
            <div class="extra-links">
            <a href="recuperar_contraseña.php">¿Olvidaste tu contraseña?</a><br>
            <a href="crear_usuario.php">Crear nuevo usuario</a>
        </div>
        </form>
    </div>
</body>
</html>

