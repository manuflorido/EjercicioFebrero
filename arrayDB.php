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
    array("Avion" => "Iberia-WE44","Pasajeros" => "81" ),
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
    array("Avion" => "Vueling-AE12","Hora" => "15/03/2022 12:00:00" ),
    array("Avion" => "Volotea-EA21","Hora" => "16/02/2022 16:30:20" ),
    array("Avion" => "Iberia-WE44","Hora" => "16/02/2022 15:45:00" ),
    array("Avion" => "Ryanair-EW44","Hora" => "17/02/2022 18:11:40" ),
    array("Avion" => "Vueling-ZK87","Hora" => "17/02/2022 12:50:00" ),
    array("Avion" => "Volotea-UA21","Hora" => "18/02/2022 10:45:30" ),
    array("Avion" => "Iberia-WH44","Hora" => "19/02/2022 11:20:00" ),
    array("Avion" => "Ryanair-EL00","Hora" => "20/02/2022 13:57:00" )
);

$vueloDivisa=array(
    array("Divisa" => "Yen","Valor" => "0,007576" ),
    array("Divisa" => "USD","Valor" => "0,877732" ),
    array("Divisa" => "Sol","Valor" => "0,24" ),
    array("Divisa" => "Lira","Valor" => "0,065" ),
    array("Divisa" => "Euro","Valor" => "1" )
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
    array("Avion" => "Vueling-AE12-Milán","Precio" => "120","Destino" => "Milán", "Divisa" => "Euro"),
    array("Avion" => "Volotea-EA21-Roma","Precio" => "90","Destino" => "Roma", "Divisa" => "Euro"),
    array("Avion" => "Iberia-WE44-Estambul","Precio" => "200","Destino" => "Estambul", "Divisa" => "Lira"),
    array("Avion" => "Ryanair-EW44-Madrid","Precio" => "50","Destino" => "Madrid", "Divisa" => "Euro"),
    array("Avion" => "Vueling-ZK87-Lima","Precio" => "1000","Destino" => "Lima", "Divisa" => "Sol"),
    array("Avion" => "Volotea-UA21-Milán","Precio" => "70","Destino" => "Bilbao", "Divisa" => "Euro"),
    array("Avion" => "Iberia-WH44-Roma","Precio" => "95","Destino" => "Roma", "Divisa" => "Euro"),
    array("Avion" => "Ryanair-EL00-Madrid","Precio" => "80","Destino" => "Madrid", "Divisa" => "Euro"),
    array("Avion" => "Vueling-AE12-Roma","Precio" => "65","Destino" => "Roma", "Divisa" => "Euro"),
    array("Avion" => "Volotea-EA21-Milán","Precio" => "77","Destino" => "Milán", "Divisa" => "Euro"),
    array("Avion" => "Iberia-WE44-New York","Precio" => "1200","Destino" => "New York","Divisa" => "USD" ),
    array("Avion" => "Ryanair-EW44-Tokio","Precio" => "1100","Destino" => "Tokio", "Divisa" => "Yen"),
    array("Avion" => "Vueling-ZK87-Chicago","Precio" => "1500","Destino" => "Chicago","Divisa" => "USD" ),
    array("Avion" => "Volotea-UA21-París","Precio" => "200","Destino" => "París", "Divisa" => "Euro"),
    array("Avion" => "Iberia-WH44-Oporto","Precio" => "45","Destino" => "Oporto","Divisa" => "Euro" ),
    array("Avion" => "Ryanair-EL00-Los Ángeles","Precio" => "1700","Destino" => "Los Ángeles","Divisa" => "USD" )
);

?>