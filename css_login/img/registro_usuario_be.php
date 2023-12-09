<?php
  
  include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre, correo, contrasena)
          VALUES ('$nombre_completo', '$correo', '$contrasena')";
          
  $ejecutar = mysqli_query($conexion, $query);

?>