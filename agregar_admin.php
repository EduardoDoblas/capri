<?php
   session_start();

   if(!isset($_SESSION['usuario'])){
     echo '
       <script>
          alert("Por Favor Debes Iniciar Sesion");
          window.location = "usuario.php";
       </script>

     ';
   
     session_destroy();
     die();

   }
 
  

?>



<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAPRI - Administradores</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .btn-amarillo {
background-color: thistle;
    color: #000; /* Cambia el color del texto si es necesario para que sea legible en el fondo amarillo */
}

    </style>
    
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="styles_reportes.css" media="print">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index_admin.php" class="navbar-brand px-lg-4 m-0">
                <img src="img/LogoCapri.png" alt="logoinicio" width="240px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                <a href="index_admin.php" class="nav-item nav-link active">Inicio</a>
                    <a href="conteo.php" class="nav-item nav-link">Ventas</a>
                    <a href="leer_comentarios.php" class="nav-item nav-link">Comentarios</a>
                    <a href="agregar_nieves.php" class="nav-item nav-link">Añadir Productos</a>
                    <a href="agregar_admin.php" class="nav-item nav-link">Añadir Administradores</a>
                    <a href="css_login/cerrar_sesion_be.php" class="nav-item nav-link">Cerrar Sesión</a>
                 </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel 1 -->
                <div class="carousel-item active">
                    <img class="w-100" src="img/nieve_admin.jpg" alt="Image" height="450px"  width="700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Añadir Administradores</h1>
                        <div class="d-inline-flex mb-lg-5">
                            <p class="m-0 text-white"><a class="text-white" href="index_admin.php">Inicio</a></p>
                            <p class="m-0 text-white px-2">/</p>
                            <p class="m-0 text-white">Administradores</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Start -->
    
    

    
    <div class="container-fluid">
        <div class="row">
            <!-- Lado Izquierdo: Mostrar Administrador -->
            <div class="col-md-6">
                <div class="container">
                    <?php
                    $comentariosQry = "SELECT id_usr, nombre, correo FROM usuarios WHERE id_car = 1";
                    $opiniones = $db->selectQuery($comentariosQry);
                    ?>

                    <div class="boton">
                        <form method="post">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($opiniones as $res) { ?>
                                        <tr>
                                            <th scope="row"><a><?php echo $res['id_usr']; ?></a></th>
                                            <td><a><?php echo $res['nombre']; ?></a></td>
                                            <td><a><?php echo $res['correo']; ?></a></td>
                                            <td>
                                            <form method="POST" action="editar_admin_formulario.php">
                                                <input type="hidden" name="id_usr" value="<?php echo $res['id_usr']; ?>">
                                                <button type="submit" class="btn btn-danger">Editar</button>
                                            </form>
                                            </td>
                                            <td>
                                                <form method="POST" action="eliminar_administrador.php" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta fila?');"> 
                                                    <input type="hidden" name="id_usr" value="<?php echo $res['id_usr']; ?>">
                                                    <button type="submit" class="btn btn-amarillo">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <a href="reportes.php" target="_blank" class="btn btn-success">Generar Reportes</a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Lado Derecho: Agregar Administrador -->
                <form action="css_login/registro_admin_be.php" method="POST" class="formulario__register">
                        <div class="contenedor__todo">
                                        <h2>Agregar Administrador</h2>
                                        <label for="exampleInputPassword1">Ingresa el nombre</label>
                                        <input type="text" class="form-control bg-transparent p-4"  name="nombre_completo" placeholder="Ingresa el nombre"
                                                required="required" data-validation-required-message="Por favor ingresa el nombre" />
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="contenedor__todo">
                                    <label for="exampleInputPassword1">Correo Electrónico</label>
                                    <input type="email" class="form-control bg-transparent p-4" name="correo" placeholder="Ingresa el correo"
                                                required="required" data-validation-required-message="Por favor ingresa el correo" />
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="form-check">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Ingresa la Contraseña</label>
                                    <input type="password" class="form-control bg-transparent p-4" name="contrasena" placeholder="Ingresa la contraseña"
                                                required="required" data-validation-required-message="Por favor ingresa la contraseña" />
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-check">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Ingresa número 1</label>
                                    <input type="number" class="form-control bg-transparent p-4" name="numero" placeholder="Ingresa el número"
                                                required="required" data-validation-required-message="Por favor ingresa la categoria" />
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="form-check">
                                    </div>

                                    
                                    <button>Agregar Administrador </button>
                    </form>
                    <?php
                    if (isset($_GET['mensaje'])) {
                        echo "<p>Mensaje: " . $_GET['mensaje'] . "</p>";
                    }
                    ?>




    <!-- Contact End -->

    <!-- Footer Start -->
    <div class=" footer text-white mt-5 pt-5c px-0 position-relative overlay-top">
            
            <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
                <div class="col-lg-6 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Visítanos</h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Calz Paseo de la Rosita 610-Int. A, Residencial Campestre 
                        la Rosita, 27250 Torreón, Coah.</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+52 871 137 4863</p>
                    <p class="m-0"><i class="fa fa-envelope mr-2"></i>neveriacapri@hotmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Síguenos</h4>
                    <p>Síguenos en nuestras redes sociales</p>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://chat.whatsapp.com/LO7iXSZ9me0A4pxTbVJ1R1" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/NeveriaCapri/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horario</h4>
                    <div>
                        <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                        <p>11.00 AM - 10.00 PM</p>
                        <h6 class="text-white text-uppercase">Sábado - Domingo</h6>
                        <p>11.00 PM - 10.00 PM</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>



