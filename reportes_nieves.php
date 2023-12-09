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
    
    
    
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="styles_reportes.css" media="print">
</head>

<?php
    include 'css_login/conexion_be.php';
    //llamando a BD a traves de un metodo y la consulta
    $conexion = new mysqli("localhost", "root", "", "capri");

    
?>


</div>
<!-- Mostrar datos -->
                <?php
                    $comentariosQry = "SELECT id_nieve, nombre, descripcion, estatus FROM nieves";
                    $opiniones = $db->selectQuery($comentariosQry);
                ?>
                <body>
<div class="card">
                
                <div class="p-4">
                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($opiniones as $res) { ?>
                                        <tr>
                                            <th scope="row"><a><?php echo $res['id_nieve']; ?></a></th>
                                            <td><a><?php echo $res['nombre']; ?></a></td>
                                            <td><a><?php echo $res['descripcion']; ?></a></td>
                                            <td><a><?php echo $res['estatus']; ?></a></td>
                                            
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    <a href="reportes_nieves.php" onclick="window.print()" class="btn btn-primary botonInv" >Imprimir</a>
                    <!-- <a href="reportes.php" onclick="window.print()" class="btn btn-primary">Imprimir</a> -->
                    <a href="generar_excel_nieves.php"  class="btn btn-success botonInv">Exportar Excel</a>
                    <a href="agregar_nieves.php"  class="btn btn-danger botonInv">Cancelar</a>

                    
                </div>
            </div>
        </div>

</body>

</html>
