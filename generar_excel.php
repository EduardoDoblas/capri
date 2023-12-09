<?php
   header("content-type: application/xls; charset=UTF-8");
   header("content-disposition: attachment; filename = Excel.xls");
   echo "\xEF\xBB\xBF"; 
?>

<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;
?>

<?php
    include 'css_login/conexion_be.php';
    $comentariosQry = "SELECT id_usr, nombre, correo FROM usuarios WHERE id_car = 1";
    $opiniones = $db->selectQuery($comentariosQry);
    
?>
<div class="card">
                
                <div class="p-4">
                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($opiniones as $res) { ?>
                                        <tr>
                                            <th scope="row"><a><?php echo $res['id_usr']; ?></a></th>
                                            <td><a><?php echo $res['nombre']; ?></a></td>
                                            <td><a><?php echo $res['correo']; ?></a></td>
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    
                </div>
            </div>
        </div>
