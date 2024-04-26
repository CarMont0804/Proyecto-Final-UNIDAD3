<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="editar_usuario.php" method="post">
        <label for="user">Nombre de usuario:</label>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="pass">Nueva contraseña:</label>
        <br>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>
