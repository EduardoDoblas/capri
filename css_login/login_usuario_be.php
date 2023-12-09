<?php
  session_start();
  include 'conexion_be.php';

  
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $correo_consulta = null;
  $contra_consulta = null;
  $rol = null;

  //encriptamiento//
  $contrasena = hash('sha512', $contrasena); 


  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
  and contrasena='$contrasena'");

  foreach($validar_login as $res)
  {
    $correo_consulta = $res['correo'];
    $contra_consulta = $res['contrasena'];
    $rol = $res['id_car'];


    echo $res['correo'];
  }

  // echo $correo_consulta.'    ';
  // echo $contra_consulta.'    ';
  // echo $rol;

  if($correo === $correo_consulta && $contrasena === $contra_consulta)
  {
    if($rol == 0)
    {
      $_SESSION['usuario'] = $correo;
      header('Location: ../index.php?rol='.$rol);
    }
    if($rol == 1)
    {
      $_SESSION['usuario'] = $correo;
      header('Location: ../index_admin.php');
    }
  }
  else
  {
    echo'
         <script>
             alert("Usuario No Existe, Por Favor Verifique Los Datos Introduccion");
             window.location = "../usuario.php";  
    
    
    
           </script>
    
           
    ';

    exit();
  }


  



  mysqli_close($conexion);
?>