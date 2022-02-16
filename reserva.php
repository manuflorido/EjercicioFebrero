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

if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo $nombre . "<br>";
    echo $apellidos . "<br>";
    echo $dni . "<br>";
    echo $correo . "<br>";
    echo $codigo . "<br>";
    echo $maleta . "<br>";
    echo $vuelo . "<br>";
    echo $pago . "<br>";
    validaPrecio($vueloPrecio, $pago, $vuelo);
    maleta($maleta);
}
else {
    echo "Debe especificar un correo válido";
}





?>