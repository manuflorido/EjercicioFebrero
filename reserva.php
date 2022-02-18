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
$teladedivisa=$_POST["teladedivisa"];
$fechita=mktime(12,0,0,2,15,2022);

if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "Billete generado, puede observarlo cuando quiera: <br><br>";
    echo "Datos de su compra: <br>";
    echo "Fecha de compra: " . date("d/m/Y h:i:s",$fechita) . "<br>";
    echo "Vuelo y Destino: " . $vuelo . "<br>";
    echo "Nombre y Apellidos: " . $nombre . " " . $apellidos . "<br>";
    echo "DNI: " . $dni . "<br>";
    echo "Email: " . $correo . "<br>";

    echo "Dinero depositado: "; 
    $tela=validaPrecio($vueloPrecio, $pago, $vuelo, $maleta, $codigo, $teladedivisa);

    $aerodesti=aeroDesti($vueloAeropuerto, $vueloPrecio, $vuelo);
    $fechaSali=fechaSalida($vueloHoras, $vuelo);
    $ciudesti=ciuDesti($vueloAeropuerto, $vueloPrecio, $vuelo);
    $tdespegue=tiempoDespegue($vueloHoras, $vuelo, $fechita);
    $pasajRES=pasajRes($vueloPrecio, $vuelo);
    $nombreFichero="Billete ";
    $ext=".txt";
    $date=date("H-i-m");
    $res=$nombreFichero.$date.$ext;

    $fichero= fopen("Billetes/$res","a+");
    if ($fichero == false) {
    echo "Error no se ha creado";
    } else {
    fwrite($fichero,"Bienvenido a su billete SR/SRA: " . $nombre . " " . $apellidos ." con DNI " . $dni . "\r\n");
    fwrite($fichero,"Salida desde Aeropuerto de Sevilla\r\n");
    fwrite($fichero,"Fecha de compra: " . date("d/m/Y h:i:s",$fechita) . "\r\n");
    fwrite($fichero,"$tela\r\n");
    fwrite($fichero,"$aerodesti\r\n");
    fwrite($fichero,"$ciudesti\r\n");
    fwrite($fichero,"$fechaSali\r\n");
    fwrite($fichero,"$tdespegue\r\n");
    fwrite($fichero,"$pasajRES\r\n");
    fflush($fichero);
    fclose($fichero);
}
}
else {
    echo "Debe especificar un correo válido";
}




?>