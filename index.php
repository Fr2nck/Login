<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Basico</title>
</head>
<body>
    <form action="funciones/PHP_login_basico.php" method="POST">
        <label>Usuario: </label>
        <input type="text" name="user" placeholder="Usuario" required><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña" required><br>
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>