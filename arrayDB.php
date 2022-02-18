<?php
//Creación de los arrays necesarios para el ejercicio
$vueloDestino=array(
    array("Avion" => "Vueling-AE12","Destino" => "Milán" ),
    array("Avion" => "Volotea-EA21","Destino" => "Roma" ),
    array("Avion" => "Iberia-WE44","Destino" => "Estambul" ),
    array("Avion" => "Ryanair-EW44","Destino" => "Madrid" ),
    array("Avion" => "Vueling-ZK87","Destino" => "Lima" ),
    array("Avion" => "Volotea-UA21","Destino" => "Bilbao" ),
    array("Avion" => "Iberia-WH44","Destino" => "Roma" ),
    array("Avion" => "Ryanair-EL00","Destino" => "Madrid" ),
    array("Avion" => "Vueling-AE12","Destino" => "Roma" ),
    array("Avion" => "Volotea-EA21","Destino" => "Milán" ),
    array("Avion" => "Iberia-WE44","Destino" => "New York" ),
    array("Avion" => "Ryanair-EW44","Destino" => "Tokio" ),
    array("Avion" => "Vueling-ZK87","Destino" => "Chicago" ),
    array("Avion" => "Volotea-UA21","Destino" => "París" ),
    array("Avion" => "Iberia-WH44","Destino" => "Oporto" ),
    array("Avion" => "Ryanair-EL00","Destino" => "Los Ángeles" )
);

$vueloFabricante=array(
    array("Avion" => "Vueling-AE12","Fabricante" => "Boeing" ),
    array("Avion" => "Volotea-EA21","Fabricante" => "Airbus" ),
    array("Avion" => "Iberia-WE44","Fabricante" => "Airbus" ),
    array("Avion" => "Ryanair-EW44","Fabricante" => "Boeing" ),
    array("Avion" => "Vueling-ZK87","Fabricante" => "Airbus" ),
    array("Avion" => "Volotea-UA21","Fabricante" => "Boeing" ),
    array("Avion" => "Iberia-WH44","Fabricante" => "Boeing" ),
    array("Avion" => "Ryanair-EL00","Fabricante" => "Airbus" )
);

$vueloCompania=array(
    array("Avion" => "Vueling-AE12","Compania" => "Vueling" ),
    array("Avion" => "Volotea-EA21","Compania" => "Volotea" ),
    array("Avion" => "Iberia-WE44","Compania" => "Iberia" ),
    array("Avion" => "Ryanair-EW44","Compania" => "Ryanair" ),
    array("Avion" => "Vueling-ZK87","Compania" => "Vueling" ),
    array("Avion" => "Volotea-UA21","Compania" => "Volotea" ),
    array("Avion" => "Iberia-WH44","Compania" => "Iberia" ),
    array("Avion" => "Ryanair-EL00","Compania" => "Ryanair" )
);

$vueloDuracion=array(
    array("Avion" => "Vueling-AE12","Minutos" => "120" ),
    array("Avion" => "Volotea-EA21","Minutos" => "100" ),
    array("Avion" => "Iberia-WE44","Minutos" => "340" ),
    array("Avion" => "Ryanair-EW44","Minutos" => "45" ),
    array("Avion" => "Vueling-ZK87","Minutos" => "600" ),
    array("Avion" => "Volotea-UA21","Minutos" => "65" ),
    array("Avion" => "Iberia-WH44","Minutos" => "90" ),
    array("Avion" => "Ryanair-EL00","Minutos" => "50" ),
    array("Avion" => "Vueling-AE12","Minutos" => "115" ),
    array("Avion" => "Volotea-EA21","Minutos" => "100" ),
    array("Avion" => "Iberia-WE44","Minutos" => "85" ),
    array("Avion" => "Ryanair-EW44","Minutos" => "360" )
);

$vueloPasajeros=array(
    array("Avion" => "Vueling-AE12","Pasajeros" => "90" ),
    array("Avion" => "Volotea-EA21","Pasajeros" => "75" ),
    array("Avion" => "Iberia-WE44","Pasajeros" => "100" ),
    array("Avion" => "Ryanair-EW44","Pasajeros" => "60" ),
    array("Avion" => "Vueling-ZK87","Pasajeros" => "77" ),
    array("Avion" => "Volotea-UA21","Pasajeros" => "93" ),
    array("Avion" => "Iberia-WH44","Pasajeros" => "86" ),
    array("Avion" => "Ryanair-EL00","Pasajeros" => "75" ),
    array("Avion" => "Vueling-AE12","Pasajeros" => "87" ),
    array("Avion" => "Volotea-EA21","Pasajeros" => "97" ),
    array("Avion" => "Iberia-WE44","Pasajeros" => "97" ),
    array("Avion" => "Ryanair-EW44","Pasajeros" => "75" ),
    array("Avion" => "Vueling-ZK87","Pasajeros" => "87" ),
    array("Avion" => "Volotea-UA21","Pasajeros" => "90" ),
    array("Avion" => "Iberia-WH44","Pasajeros" => "84" ),
    array("Avion" => "Ryanair-EL00","Pasajeros" => "67" ),
    array("Avion" => "Vueling-AE12","Pasajeros" => "86" ),
    array("Avion" => "Volotea-EA21","Pasajeros" => "66" ),
    array("Avion" => "Iberia-WE44","Pasajeros" => "40" ),
    array("Avion" => "Ryanair-EW44","Pasajeros" => "77" ),
    array("Avion" => "Vueling-ZK87","Pasajeros" => "82" )
);

//TRABAJO FINALIZADO 28/01/2022 POR MANUEL FLORIDO

$vueloHoras=array(
    array("Avion" => "Vueling-AE12-Milán","Hora" => mktime(12,0,0,3,15,2022) ),
    array("Avion" => "Vueling-AE12-Roma","Hora" => mktime(12,0,0,3,15,2022) ),
    array("Avion" => "Volotea-EA21-Roma","Hora" => mktime(16,30,20,2,16,2022) ),
    array("Avion" => "Volotea-EA21-Milán","Hora" => mktime(16,30,20,2,16,2022) ),
    array("Avion" => "Iberia-WE44-Estambul","Hora" => mktime(15,45,20,2,16,2022) ),
    array("Avion" => "Iberia-WE44-New York","Hora" => mktime(15,45,20,2,16,2022) ),
    array("Avion" => "Ryanair-EW44-Madrid","Hora" => mktime(18,11,40,2,17,2022) ),
    array("Avion" => "Ryanair-EW44-Tokio","Hora" => mktime(18,11,40,2,17,2022) ),
    array("Avion" => "Vueling-ZK87-Lima","Hora" => mktime(12,50,40,2,17,2022) ),
    array("Avion" => "Vueling-ZK87-Chicago","Hora" => mktime(12,50,40,2,17,2022) ),
    array("Avion" => "Volotea-UA21-Milán","Hora" => mktime(10,45,30,2,18,2022) ),
    array("Avion" => "Volotea-UA21-París","Hora" => mktime(10,45,30,2,18,2022) ),
    array("Avion" => "Iberia-WH44-Roma","Hora" => mktime(11,20,0,2,19,2022) ),
    array("Avion" => "Iberia-WH44-Oporto","Hora" => mktime(11,20,0,2,19,2022) ),
    array("Avion" => "Ryanair-EL00-Madrid","Hora" => mktime(13,57,0,2,20,2022) ),
    array("Avion" => "Ryanair-EL00-Los Ángeles","Hora" => mktime(13,57,0,2,20,2022) )
);

$vueloAeropuerto=array(
    array("Ciudad" => "Milán","Aeropuerto" => "Aeropuerto Milán-Malpensa" ),
    array("Ciudad" => "Roma","Aeropuerto" => "Aeropuerto Roma-Fiumicino" ),
    array("Ciudad" => "Estambul","Aeropuerto" => "Aeropuerto de Estambul" ),
    array("Ciudad" => "Madrid","Aeropuerto" => "Aeropuerto Adolfo Suárez Madrid-Barajas" ),
    array("Ciudad" => "Lima","Aeropuerto" => "Aeropuerto Internacional Jorge Chávez" ),
    array("Ciudad" => "Bilbao","Aeropuerto" => "Aeropuerto Internacional Bilbao" ),
    array("Ciudad" => "New York","Aeropuerto" => "Aeropuerto Internacional John F. Kennedy" ),
    array("Ciudad" => "Tokio","Aeropuerto" => "Aeropuerto Internacional de Haneda" ),
    array("Ciudad" => "Chicago","Aeropuerto" => "Aeropuerto Internacional O'Hare" ),
    array("Ciudad" => "Paris","Aeropuerto" => "Aeropuerto Internacional de Paris-Charles de Gaulle" ),
    array("Ciudad" => "Oporto","Aeropuerto" => "Aeropuerto Francisco Sá Carneiro" ),
    array("Ciudad" => "Los Ángeles","Aeropuerto" => "Aeropuerto Internacional de Los Ángeles" )
);

$vueloPrecio=array(
    array("Avion" => "Vueling-AE12-Milán","Precio" => "120","Destino" => "Milán","Pasajeros" => "90"),
    array("Avion" => "Volotea-EA21-Roma","Precio" => "90","Destino" => "Roma","Pasajeros" => "75"),
    array("Avion" => "Iberia-WE44-Estambul","Precio" => "200","Destino" => "Estambul","Pasajeros" => "100"),
    array("Avion" => "Ryanair-EW44-Madrid","Precio" => "50","Destino" => "Madrid","Pasajeros" => "60"),
    array("Avion" => "Vueling-ZK87-Lima","Precio" => "1000","Destino" => "Lima","Pasajeros" => "77"),
    array("Avion" => "Volotea-UA21-Milán","Precio" => "70","Destino" => "Bilbao","Pasajeros" => "93"),
    array("Avion" => "Iberia-WH44-Roma","Precio" => "95","Destino" => "Roma","Pasajeros" => "86"),
    array("Avion" => "Ryanair-EL00-Madrid","Precio" => "80","Destino" => "Madrid","Pasajeros" => "75"),
    array("Avion" => "Vueling-AE12-Roma","Precio" => "65","Destino" => "Roma","Pasajeros" => "87"),
    array("Avion" => "Volotea-EA21-Milán","Precio" => "77","Destino" => "Milán","Pasajeros" => "97"),
    array("Avion" => "Iberia-WE44-New York","Precio" => "1200","Destino" => "New York","Pasajeros" => "97"),
    array("Avion" => "Ryanair-EW44-Tokio","Precio" => "1100","Destino" => "Tokio","Pasajeros" => "75"),
    array("Avion" => "Vueling-ZK87-Chicago","Precio" => "1500","Destino" => "Chicago","Pasajeros" => "87"),
    array("Avion" => "Volotea-UA21-París","Precio" => "200","Destino" => "París","Pasajeros" => "90"),
    array("Avion" => "Iberia-WH44-Oporto","Precio" => "45","Destino" => "Oporto","Pasajeros" => "84"),
    array("Avion" => "Ryanair-EL00-Los Ángeles","Precio" => "1700","Destino" => "Los Ángeles","Pasajeros" => "67")
);

?>