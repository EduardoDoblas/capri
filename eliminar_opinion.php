<?php
// eliminar.php

include 'css_login/conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado una solicitud POST

    // Obtener el ID de la opinión a eliminar
    $id_opiniones = $_POST['id_opiniones'];

    // Conectar a la base de datos (ajusta las credenciales según tu configuración)
    $conexion = new mysqli("localhost", "root", "", "capri");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar y ejecutar la consulta de eliminación
    $consulta = $conexion->prepare("DELETE FROM opiniones WHERE id_opiniones = ?");
    $consulta->bind_param("i", $id_opiniones);

    if ($consulta->execute()) {
        // La fila se eliminó correctamente
        $consulta->close();
        $conexion->close();

        // Redirigir a la página principal o realizar otras acciones necesarias
        header("Location: leer_comentarios.php"); // Reemplaza "index.php" con el nombre de tu página principal
        exit();
    } else {
        // Hubo un error al ejecutar la consulta
        $consulta->close();
        $conexion->close();

        // Puedes manejar el error de alguna manera (por ejemplo, mostrar un mensaje de error)
        echo "Error al eliminar la fila.";
    }
} else {
    // Si no es una solicitud POST, redirigir a la página principal o realizar otras acciones necesarias
    header("Location: leer_comentarios.php"); // Reemplaza "index.php" con el nombre de tu página principal
    exit();
}
?>