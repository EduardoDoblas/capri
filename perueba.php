<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;

$consultaPruebaQry="SELECT nieves.nombre as nieve, tamano.nombre as tamano , categorias.nombre as categoria FROM nieves join categorias on nieves.categoria = categorias.id_categorias 
join tamano on tamano.id_tamano = nieves.tamano";
$consultaPrueba=$db->selectQuery($consultaPruebaQry);

foreach($consultaPrueba as $res)
{
 echo $res['nieve'] . '<br>';
 echo $res['tamano']. '<br>';
 echo $res['categoria'];
}

