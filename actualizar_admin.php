<?php
include 'css_login/conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $id_car = $_POST["id_car"];
    $id_usr = $_POST["id_usr"];

    // Validar y actualizar en la base de datos
    // (Asegúrate de implementar las validaciones necesarias)

    $sentencia = $conexion->prepare("UPDATE usuarios SET nombre=?, correo=?, id_car=? WHERE id_usr=?");
    $sentencia->bind_param("sssi", $nombre, $correo, $id_car, $id_usr);
    
    if ($sentencia->execute()) {
        echo "Usuario actualizado correctamente";
        // Redirigir a la página de administradores después de la actualización
        header("Location: agregar_admin.php");
        exit();
    } else {
        // Manejar el caso en el que la actualización falla
        echo "Error al actualizar el usuario: " . $sentencia->error;
    }
} else {
    // Manejar el caso en el que no se haya enviado el formulario correctamente
    echo "Error: El formulario no se envió correctamente.";
}
?>