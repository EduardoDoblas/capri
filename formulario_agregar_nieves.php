<?php

include 'css_login/conexion_be.php';

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$estatus = $_POST['estatus'];

// Manejar la imagen
$imagenNombre = $_FILES['imagen']['name'];
$imagenTemp = $_FILES['imagen']['tmp_name'];
$carpetaDestino = 'carpeta/imagenes/'; // Reemplaza con la carpeta donde deseas almacenar las imágenes

// Mueve la imagen a la carpeta de destino
move_uploaded_file($imagenTemp, $carpetaDestino . $imagenNombre);

$query = "INSERT INTO nieves(nombre, descripcion, estatus, Imagen)
          VALUES ('$nombre', '$categoria', '$estatus', '$imagenNombre')";
          
$ejecutar = mysqli_query($conexion, $query);


  //ALMACENADO EXITOSO//

  if($ejecutar){
         echo'
           <script>
              
               alert("Nieve Enviada Exitosamente");
               window.location = "agregar_nieves.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Algo fallo, Intentelo de nuevo");
          window.location = "agregar_nieves.php";
            
      </script>         
    ';

}

  mysqli_close($conexion);



?>