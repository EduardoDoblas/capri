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
    <title>CAPRI - Ventas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <link rel="icon" href="img/capri.logo.ico" >

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
    
    
    
    <link rel="stylesheet" href="css/">
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
                        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Ventas</h1>
                        <div class="d-inline-flex mb-lg-5">
                            <p class="m-0 text-white"><a class="text-white" href="index_admin.php">Inicio</a></p>
                            <p class="m-0 text-white px-2">/</p>
                            <p class="m-0 text-white">Ventas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
        
        
                
                    
                </div>
                <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>


    

        <div class="container-fluid py-5">
            
            <div class="section-title">
                <h1 class="display-4">Conteo de Ventas</h1>
            </div>
            <div id="info">
                <div class="row">
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h3 class="mb-3">Sabor del Helado:</h3>
                        <h3>Selecciona una fecha:</h3>
                        <h3 class="mb-3">Cantidad Vendida:</h3>
                        <h3 class="mb-3">Total Vendida Por La Unidad:</h3>
                        <h3 class="mb-3">Total De Ventas:</h3>

                        
                        
                    </div>
                    <div class="col-lg-4 py-0 py-lg-5">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            LISTA DE SABORES
                            </a>
                        
                            <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Mango</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Fresa</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Limon</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Mango</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Durazno</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Mamey</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Platano</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Higo</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Guayaba</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Guanabana</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Zarzamora</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Tamarindo</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Kiwi</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta Piña</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Fruta ciruela</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Cajeta</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche rompope</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Chocolate</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Fresa Colada</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Piña Colada</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Mango Colado</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Oreo</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Nutella</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De 3 Leches </a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Vainilla</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Cafe</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Cereza</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Leche Queso</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Mango</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Fresa</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Guayaba</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Piña</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Limon</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Zarzamora</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Durazno</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Raspays Ceresa</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Limon  </a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Mango </a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Kiwi </a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Fresa </a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Piña </a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Tamarindo</a></li>
                            <li><a class="dropdown-item" href="#">Nieve Mineralizada De Chamoy</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Nieve De Concentrados Uva</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Concentrados Root Beer</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Concentrados Chicle Azul</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Concentrados Grosella</a></li>
                            <li><a class="dropdown-item" href="#">Nieve De Concentrados Taro</a></li>

                            </ul>
                            <div class="container mt-4">
                                
                                <input type="date" id="fecha" name="fecha">
                        </div>
                        <p class="blanco"><input type="text" placeholder="" name="total"></p>
                        <p class="blanco"><input type="text" placeholder="" name="password"></p>
                        <p class="blanco"><input type="text" placeholder="" name="password"></p>
                        <p class="blanco"><input type="text" placeholder="" name="password"></p>
                        
                    </div>
                </div>
            </div>
        
    </div>

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