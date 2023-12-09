<?php
include "css_login/img/conexion_be.php/";
$conexion=mysqli_connect("localhost","root","","capri");

if(
    isset($_POST["name"]) && !empty($_POST["name"]) &&
    isset($_POST["categoria"]) && !empty($_POST["categoria"]) &&
    isset($_POST["estatus"]) && !empty($_POST["estatus"]) 
){
    $nombre = $_POST["name"];
    $categoria = $_POST["categoria"];
    $estatus = $_POST["estatus"];

    if (isset($_POST["selImg"]) && !empty($_POST["selImg"])) {
        $imagen = $_POST["selImg"];
    } else {
        $imagen = '';
    }
    $sql = "INSERT INTO nieves (nombre, categoria, estatus, Imagen)
    VALUES (?,?,?,?)";

    if ($statement = mysqli_prepare($conexion, $sql)) {

          mysqli_stmt_bind_param($statement, "ssss", $nombre, $categoria, $estatus, $imagen);

          if(mysqli_stmt_execute($satement)) {
            header('Location: agregar_nieves.php');

          } else {
               echo "Error al actualizar";
          }
          mysqli_stmt_close($statement);

    }

    mysqli_close($conexion);


} else {
    ?><?php
}

?>