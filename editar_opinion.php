<?php
// editar.php hola

include 'css_login/conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado una solicitud POST

    // Obtener el ID de la opinión a editar y el nuevo comentario
    $id_opiniones_editar = $_POST['id_opiniones_editar'];
    $opinion_editar = $_POST['opinion_editar'];

    // Conectar a la base de datos (ajusta las credenciales según tu configuración)
    $conexion = new mysqli("localhost", "root", "", "capri");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar y ejecutar la consulta de actualización
    $consulta = $conexion->prepare("UPDATE opiniones SET opinion = ? WHERE id_opiniones = ?");
    $consulta->bind_param("si", $opinion_editar, $id_opiniones_editar);

    if ($consulta->execute()) {
        // La fila se actualizó correctamente
        $consulta->close();
        $conexion->close();

        // Redirigir a la página principal o realizar otras acciones necesarias
        header("Location: index.php"); // Reemplaza "index.php" con el nombre de tu página principal
        exit();
    } else {
        // Hubo un error al ejecutar la consulta
        $consulta->close();
        $conexion->close();

        // Puedes manejar el error de alguna manera (por ejemplo, mostrar un mensaje de error)
        echo "Error al actualizar la fila.";
    }
} else {
    // Si no es una solicitud POST, redirigir a la página principal o realizar otras acciones necesarias
    header("Location: index.php"); // Reemplaza "index.php" con el nombre de tu página principal
    exit();
}
?>