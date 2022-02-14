<?php
require 'arrayDB.php';
require 'funciones.php';

$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$dni=$_POST["dni"];
$correo=$_POST["correo"];
$codigo=$_POST["codigo"];
$maleta=$_POST["maleta"];
$vuelo=$_POST["vuelo"];
$pago=$_POST["pago"];

echo $nombre . "<br>";
echo $apellidos . "<br>";
echo $dni . "<br>";
echo $correo . "<br>";
echo $codigo . "<br>";
echo $maleta . "<br>";
echo $vuelo . "<br>";
echo $pago . "<br>";

?>