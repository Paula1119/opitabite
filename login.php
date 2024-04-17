<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="process_login.php" method="post">
        <label for="username">Nombre de usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <button onclick="window.location.href='Usuario/Usuario.php'">Registrarme como cliente</button>
    <button onclick="window.location.href='Negocio/Negocio.php'">Registrarme como restaurante</button>
</body>
</html>
