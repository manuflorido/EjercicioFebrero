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
$fechita=mktime(12,0,0,2,15,2022);

if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    /*echo $nombre . "<br>";
    echo $apellidos . "<br>";
    echo $dni . "<br>";
    echo $correo . "<br>";
    echo $codigo . "<br>";
    echo $vuelo . "<br>";
    echo $pago . "<br>";*/
    echo "Hora de compra: " . "<br>" . date("d/m/Y h:i:s",$fechita) . "<br>";
    echo "Nombre y Apellidos: " . $nombre . " " . $apellidos . "<br>";
    echo "DNI: " . $dni . "<br>";
    echo "Email: " . $correo . "<br>";
    echo "Dinero depositado: <br>"; 
    validaPrecio($vueloPrecio, $pago, $vuelo, $maleta);
    numID($maleta);
}
else {
    echo "Debe especificar un correo válido";
}





?>