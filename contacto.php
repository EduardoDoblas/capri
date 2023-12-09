


<?php
session_start();
include 'css_login/conexion_be.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAPRI - Contacto</title>
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
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <img src="img/LogoCapri.png" alt="logoinicio" width="240px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="menu.php" class="nav-item nav-link active">Menu</a>
                    <!-- <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                      
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="nieve_frutas.php">Nieves de Frutas</a></li>
                          <li><a class="dropdown-item" href="nieve_leche.php">Nieve de Leche</a></li>
                          <li><a class="dropdown-item" href="nieve_raspays.php">Nieve de Raspays</a></li>
                        </ul>
                      </div> -->
                    <a href="about.php" class="nav-item nav-link">Historia</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <a href="usuario.php" class="nav-item nav-link"><i class="bi bi-person-circle" style="font-size: 30px;"></i></a>
                    <a href="Shop.php" class="nav-item nav-link"><i class="bi bi-cart-fill align-middle" style="font-size: 30px;"></i></a> <!-- Establecido un tamaño de 24px -->
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
                    <img class="w-100" src="img/bg.jpg" alt="Image" height="450px"  width="700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Acerca de Nosotros</h1>
                        <div class="d-inline-flex mb-lg-5">
                            <p class="m-0 text-white"><a class="text-white" href="index.php">Inicio</a></p>
                            <p class="m-0 text-white px-2">/</p>
                            <p class="m-0 text-white">Historia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contáctanos</h4>
                <h1 class="display-4">Siéntete libre de contáctarnos</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Dirección</h4>
                    <p>Calz Paseo de la Rosita 610-Int. A, Residencial Campestre la Rosita, 27250 Torreón, Coah.</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Teléfono</h4>
                    <p>+52 871 137 4863</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Correo</h4>
                    <p>neveriacapri@hotmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.4130441491725!2d-103.41808629017787!3d25.524614918269535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdb8569c7b53d%3A0xc8e5e24ea350ca6!2sCapri!5e0!3m2!1ses!2smx!4v1699043323345!5m2!1ses!2smx"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
                

                <form method="post" action='controlador_registrar_usuario.php'>
                    <div class="form-group">
                            <h2>Ingresa tus comentarios</h2>
                            <label for="exampleInputPassword1">Ingresa tú nombre</label>
                            <input type="text" class="form-control bg-transparent p-4"  name="name" placeholder="Ingresa tú nombre"
                                    required="required" data-validation-required-message="Por favor ingresa tú nombre" />
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Ingresa tú correo</label>
                        <input type="email" class="form-control bg-transparent p-4" name="email" placeholder="Tú correo"
                                    required="required" data-validation-required-message="Por favor ingresa tú correo" />
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ingresa el asunto</label><input type="text" class="form-control bg-transparent p-4" name="subject" placeholder="Asunto"
                                    required="required" data-validation-required-message="Por favor ingresa el asunto" />
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-check">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ingresa tú mensaje</label><textarea class="form-control bg-transparent py-3 px-4" rows="5" name ="message" placeholder="Mensaje"
                                    required="required"  data-validation-required-message="Por favor ingresa tú correo"></textarea>
                                <p class="help-block text-danger"></p>
                        </div>
                        <button>Ingresa tu comentario </button>
                </form>

                
            </div>
        </div>
    </div>
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