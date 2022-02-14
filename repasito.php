<?php

#CONSTANTES

$pi=pi();

echo "Número Pi: " . $pi . "<br>";

define("GRAVEDAD",9.8);

echo "Constante de la Gravedad: " . GRAVEDAD . "<br>";

#ARRAYS Y TRATAMIENTO

$numeros= array(2,4,8,7,10,GRAVEDAD);

$cantidad_numeros=count($numeros);

print_r($numeros);
echo "<br>";
shuffle($numeros);

echo "Cantidad de números en el array: " . $cantidad_numeros ."<br>";

print_r($numeros);
echo "<br>";

for ($i=0; $i < $cantidad_numeros; $i++) { 
    echo "Valor de " . $i . "= " . $numeros[$i] . "<br>";
}

echo "<br> ForEach <br>";

foreach ($numeros as $numerito) {
    echo "Valor del array: " . $numerito . "<br>";
}

echo "<br>";
echo "<h1>hola</h1>";
$provincias=array(
"Andalucía" => "1",
"Comunidad de Madrid" => "2",
"Aragón" => "3",
"Cataluña" => "4",
"Andalucía" => "5",);

print_r($provincias);

echo "<br> ForEach Asociativo <br>";

foreach ($provincias as $provincita => $capitalita) {
    echo "Comunidad Autónoma: " . $provincita . " su capital es: " . $capitalita . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br> Añadir Valores a Arrays normales <br>";
//Se añade al final

$numeros=array(1,2,3,4);
foreach ($numeros as $numerito) {
    echo "Valor del array: " . $numerito . "<br>";


}

//Eliminar un valor de un array
echo "<br>";
unset($numeros[5]);
foreach ($numeros as $numerito) {
    echo "Valor del array: " . $numerito . "<br>";
}

echo "<br>";

//ARRAY MULTIDIMENSIONAL
$asir = array(
    array('Vuelo' => "Vueling-AE12","Destino" => "1" ),
    array('Vuelo' => "Volotea-EA21","Destino" => "2" ),
    array('Vuelo' => "Iberia-WE44","Destino" => "3" ),
    array('Vuelo' => "Vueling-AE12","Destino" => "4" )
);

print_r($asir);

echo "<br>";

foreach ($asir as $alumno) {
    //echo "Vuelo " . $alumno["Vuelo"] . ": " . $alumno["Destino"];
    $vuelesito=$alumno["Vuelo"];
    $tupacaso=$alumno["Destino"];
    $var=0;
    if ($vuelesito=='Vueling-AE12') {
        echo "<h1>OLE TU POLLA</h1>";
        $asir = array_sum($alumno["Destino"]);
        print_r($asir);
    }
    else {
        echo "Chupala";
    }
    echo "<br>";
}



/*
#RECOGIDA DE DATOS
$manule="Cafelaso de arvellana";
$migue=0;
$paco=true;

$dato1=$_POST["datito1"];
$dato2=$_GET["datito2"];


#CONDICIONALES
if (condition) {
    # code...
} else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}


#BUCLES

while ($a <= 10) {
    # code...
}

for ($i=0; $i < ; $i++) { 
    # code...
}
*/


?>