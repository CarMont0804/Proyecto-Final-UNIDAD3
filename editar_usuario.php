<?php
session_start();

// Verificar si el usuario está autenticado
if(isset($_SESSION["usuario"])) {
    // Conectar a la base de datos (debes configurar tus propios valores aquí)
    $servidor = "localhost";
    $usuariodb = "root";
    $passdb = "mont";
    $db = "tabla_galeria";

    $conexion = mysqli_connect($servidor, $usuariodb, $passdb, $db);

    // Verificar la conexión
    if($conexion === false) {
        die("Error: No se pudo conectar. " . mysqli_connect_error());
    }

    // Obtener datos del formulario
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"]; // Aquí debes aplicar la lógica para encriptar la contraseña si es necesario

    // Preparar la consulta SQL para actualizar los datos del usuario
    $query = "UPDATE usuarios SET nombre='$user', correo_electronico='$email', contrasena='$pass' WHERE id = '$_SESSION[id]'";

    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    // Si el usuario no está autenticado, redirigir al formulario de inicio de sesión
    header("Location: login.php");
}
?>
