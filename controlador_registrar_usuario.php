<?php


// $nombre = $_POST["name"];
//                     $apellido = $_POST["email"];
//                     $asunto = $_POST["subject"];
//                     $mensaje = $_POST["message"];
                    
//                     // Imprimir los valores para verificar
//                     echo "Nombre: " . $nombre . "<br>";
//                     echo "Apellido: " . $apellido . "<br>";
//                     echo "Asunto: " . $asunto . "<br>";
//                     echo "Mensaje: " . $mensaje . "<br>";
                    
//                     // Preparar la consulta de inserción
//                     $sentencia = $this->conn->prepare("INSERT INTO opiniones(opinion, asunto, nombre, correo) VALUES (?, ?, ?, ?);");
                    
//                     // Ejecutar la consulta
//                     $resultado = $sentencia->execute([$mensaje, $asunto, $nombre, $apellido]);
                    
//                     // Verificar el resultado
//                     if ($resultado) {
//                         echo "Inserción exitosa";
//                     } else {
//                         echo "Error en la inserción: " . $sentencia->errorInfo()[2];
//                     }

include 'css_login/conexion_be.php';

$nombre = $_POST['name'];
$apellido = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$query = "INSERT INTO opiniones(opinion, asunto, nombre, correo)
          VALUES ('$mensaje', '$asunto', '$nombre', '$apellido')";
          
  $ejecutar = mysqli_query($conexion, $query);

  //ALMACENADO EXITOSO//

  if($ejecutar){
         echo'
           <script>
              
               alert("Comentario Enviado Exitosamente");
               window.location = "contacto.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Comentario Fallido, Intentelo de nuevo");
          window.location = "contacto.php";
            
      </script>         
    ';

}

  mysqli_close($conexion);

// if ($_POST){
 
//             $nombre=$_POST["name"];
//             $apellido=$_POST["email"];
//             $asunto=$_POST["subject"];
//             $mensaje=$_POST["message"];
//             $insertQuery="insert into opiniones (opinion,asunto,nombre,correo) values('$mensaje,'$mensaje','$nombre','$apellido')";
//             $insert=$db->execQuery($insertQuery);
//             if ($insert===true) {
//                 echo 'Mensasje Registrado Correctamente';
//             } else {
//                 echo 'error';exit();
//             };
           
//         }

//print_r($_POST);
// if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtciudad"])){
//     header('Location: index.php?mensaje=falta');
//     exit();
// }
        
                // include_once 'Database.php';
                // $nombre = $_POST["name"];
                // $apellido = $_POST["email"];
                // $asunto = $_POST["subject"];
                // $mensaje = $_POST["message"];

                // $sentencia = $this->conn->prepare("INSERT INTO opiniones(opinion, asunto, nombre, correo) VALUES (?, ?, ?, ?);");
                // $resultado = $sentencia->execute([$mensaje, $asunto, $nombre, $apellido]);

                // if ($resultado) {
                //      echo "Inserción exitosa";
                //  } else {
                //      echo "Error en la inserción: " . $sentencia->errorInfo()[2];
                //  }

// if ($resultado === TRUE) {
//     header('Location: index.php?mensaje=registrado');
// } else {
//     header('Location: index.php?mensaje=error');
//     exit();
// }



?>