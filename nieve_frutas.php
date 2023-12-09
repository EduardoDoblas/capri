<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAPRI - Menu</title>
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
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                      
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="nieve_frutas.php">Nieves de Frutas</a></li>
                          <li><a class="dropdown-item" href="nieve_leche.php">Nieve de Leche</a></li>
                          <li><a class="dropdown-item" href="nieve_raspays.php">Nieve de Raspays</a></li>
                        </ul>
                      </div>
                    <a href="about.php" class="nav-item nav-link">Historia</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <a href="usuario.php" class="nav-item nav-link"><i class="bi bi-person-circle" style="font-size: 30px;"></i></a>
                    <a href="Shop.php"><i class="bi bi-cart-fill align-middle" style="font-size: 30px;"></i></a> <!-- Establecido un tamaño de 24px -->
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
                        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
                        <div class="d-inline-flex mb-lg-5">
                            <p class="m-0 text-white"><a class="text-white" href="index.php">Inicio</a></p>
                            <p class="m-0 text-white px-2">/</p>
                            <p class="m-0 text-white">menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menú</h4>
                <h1 class="display-4">Sabores de Nieves</h1>

                <!-- NIEVE DE FRUTAS -->
                <h2 class="">Nieve de Frutas</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <a href="menu.html"></a>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Mango</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor mango</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Fresa</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor fresa</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Limón</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor limón</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Durazno</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor durazno</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Mamey</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor mamey</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Plátano</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor plátano</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Higo</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor higo</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Guayaba</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor guayaba</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Guanábana</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor guanábana</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Zarzamora</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor zarzamora</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Tamarindo</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor tamarindo</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Kiwi</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor kiwi</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Piña</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor piña</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Ciruela</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor ciruela</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menú</h4>

                <!-- NIEVE MINERALIZADAS -->
                <h2 class="">Nieve Mineralizadas</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Limón</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor limón</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Mango</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor mango</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Kiwi</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor kiwi</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Fresa</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor fresa</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Piña</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor piña</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Tamarindo</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor tamarindo</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>
                                <a>Chamoy</a>
                            </h4>
                            <p class="m-0">Nieve de raspa de sabor chamoy</p>
                            <button class="btn btn-primary add-to-cart" data-name="Cajeta" data-price="5.00">Agregar Producto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Menu End -->


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