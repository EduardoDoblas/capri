<?php
  
  include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero']; 

//encriptamiento//
$contrasena = hash('sha512', $contrasena); 

$query = "INSERT INTO usuarios(nombre, correo, contrasena, id_car)
          VALUES ('$nombre_completo', '$correo', '$contrasena', '$numero')";


//EL CORREO NO SE REPITE //
  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0){

     echo'
        <script>
        
             alert("Este Correo Ya Esta Registrado, Intenta Agregar Otro Diferente");  
             window.location = "../agregar_admin.php";

        </script>
     ';

     exit();

  }


  //El NOMBRE NO SE REPITE//
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre ='$nombre_completo' ");

  if(mysqli_num_rows($verificar_nombre) > 0){

    echo'
       <script>
       
            alert("Este Nombre Ya Esta Registrado, Intenta Agregar Otro Diferente");  
            window.location = "../agregar_admin.php";

       </script>

    ';

    exit();

 }




  //ALMACENADO EXITOSO//
  $ejecutar = mysqli_query($conexion, $query);

  if($ejecutar){
         echo'
           <script>
              
               alert("Administrador Almacenado Exitosamente");
               window.location = "../agregar_admin.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Registro Fallido, Intentelo de nuevo");
          window.location = "../agregar_admin.php";
            
      </script>         
    ';

}

  mysqli_close($conexion);
    

?>