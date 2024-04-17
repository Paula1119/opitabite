
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <script type="text/javascript">
        function registroExitoso() {
            alert("¡Felicidades, te has registrado con éxito!");
            window.location.href = 'login.php';
        }
    </script>
</head>
<body>
    <form action="process_register.php" method="post" onsubmit="registroExitoso()">
        <label for="nombre">Nombres:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellido">Apellidos:</label><br>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" id="correo" name="correo"><br>
        <label for="identificacion">Número de Identificación:</label><br>
        <input type="text" id="identificacion" name="identificacion"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Registrarme">
    </form>
</body>
</html>
