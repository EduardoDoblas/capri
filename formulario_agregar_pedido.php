<?php

include 'css_login/conexion_be.php';

$nombre = $_POST['nombre'];
$estatus = $_POST['estatus'];
$descripcion = $_POST['descripcion'];


$query = "INSERT INTO pedido(nombre, estatus, descripcion)
          VALUES ('$nombre', '$estatus', '$descripcion')";
          
  $ejecutar = mysqli_query($conexion, $query);

  //ALMACENADO EXITOSO//

  if($ejecutar){
         echo'
           <script>
              
               alert("Nieve Enviada Exitosamente");
               window.location = "menu.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Algo fallo, Intentelo de nuevo");
          window.location = "menu.php";
            
      </script>         
    ';

}

  mysqli_close($conexion);



?>