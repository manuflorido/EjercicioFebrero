<?php
require 'arrayDB.php';

//FUNCION PARA LA COMPAÑIA DE LOS AVIONES
function compania($vueloCompania, $id){
foreach ($vueloCompania as $compania) {
    $avion=$compania["Avion"];
    
    if ($avion==$id) {
        $comp=$compania["Compania"];
        echo "Compañía: " . $comp . "<br>";
    }
}
    
}

//FUNCION PARA EL MEDIA DE PASAJEROS
function mediaPasajeros($vueloPasajeros, $id){
$numero=0;
$contador=0;
foreach ($vueloPasajeros as $pasajeros) {
    $vuelesito=$pasajeros["Avion"];
    $pasajerito=$pasajeros["Pasajeros"];
    
    if ($vuelesito==$id) {
        $numero=$numero+$pasajerito;
        $contador++;

    }

}
$numero=$numero/$contador;
echo "Media de pasajeros: " . $numero . "<br>";
}

//FUNCION PARA EL FABRICANTE DE LOS AVIONES
function fabricante($vueloFabricante, $id){
foreach ($vueloFabricante as $fabricante) {
    $avion=$fabricante["Avion"];

    if ($avion==$id) {
        $fabr=$fabricante["Fabricante"];
        echo "Fabricante: " . $fabr . "<br>";
    }
}
}

//FUNCION PARA ULTIMOS DESTINOS DE LOS AVIONES
function destinos($vueloDestino, $id){
foreach ($vueloDestino as $destino) {
    $avion=$destino["Avion"];
    
    if ($avion==$id) {
        $dest=$destino["Destino"];
        echo $dest . "//";
    }
}
echo "<br>";
}

//FUNCION PARA MINUTOS TOTALES DE VUELO
function minTot($vueloDuracion, $id){
    $numero=0;
foreach ($vueloDuracion as $duracion) {
$avion=$duracion["Avion"];

    if ($avion==$id) {
        $dur=$duracion["Minutos"];
        $numero=$numero+$dur;
    }
}
echo "Minutos totales de vuelo: " . $numero . " minutos <br>";
}

//FUNCION NUMERO TOTAL DE CIUDADES
function ciuTot($vueloDestino){
//Crea un array sin que se repitan los campos de la columna 'Destino'
$arrayUnique=array_unique(array_column($vueloDestino, 'Destino'));
//Hace intersección entre el array de arriba y el original.
$arrayLimpio=array_intersect_key($vueloDestino,$arrayUnique);
echo "Número de ciudades a las que se ha viajado: " . count($arrayLimpio) . "<br>";
}

//FUNCION VECES QUE SE HA IDO A UNA CIUDAD, LA CIUDAD MAX Y MIN
function sumCiu($vueloDestino){
    $cuentaRoma=0;
    $cuentaMilan=0;
    $cuentaMad=0;
    $cuentaLim=0;
    $cuentaEsta=0;
    $cuentaBil=0;
    $cuentaNY=0;
    $cuentaTokio=0;
    $cuentaChic=0;
    $cuentaPar=0;
    $cuentaOpo=0;
    $cuentaLA=0;
foreach ($vueloDestino as $destino) {
    $ciudad=$destino["Destino"];
    if ($ciudad=='Roma') {
        $cuentaRoma++;
    }
    if ($ciudad=='Milán') {
        $cuentaMilan++;
    }
    if ($ciudad=='Estambul') {
        $cuentaEsta++;
    }
    if ($ciudad=='Madrid') {
        $cuentaMad++;
    }
    if ($ciudad=='Lima') {
        $cuentaLim++;
    }
    if ($ciudad=='Bilbao') {
        $cuentaBil++;
    }
    if ($ciudad=='New York') {
        $cuentaNY++;
    }
    if ($ciudad=='Tokio') {
        $cuentaTokio++;
    }
    if ($ciudad=='Chicago') {
        $cuentaChic++;
    }
    if ($ciudad=='París') {
        $cuentaPar++;
    }
    if ($ciudad=='Oporto') {
        $cuentaOpo++;
    }
    if ($ciudad=='Los Ángeles') {
        $cuentaLA++;
    }
}
echo "Veces visitadas cada ciudad: " . "<br>";
    echo "Roma: " . $cuentaRoma . "<br>";
    echo "Milán: " . $cuentaMilan . "<br>";
    echo "Estambul: " . $cuentaEsta . "<br>";
    echo "Madrid: " . $cuentaMad . "<br>";
    echo "Lima: " . $cuentaLim . "<br>";
    echo "Bilbao: " . $cuentaBil . "<br>";
    echo "New York: " . $cuentaNY . "<br>";
    echo "Tokio: " . $cuentaTokio . "<br>";
    echo "Chicago: " . $cuentaChic . "<br>";
    echo "París: " . $cuentaPar . "<br>";
    echo "Oporto: " . $cuentaOpo . "<br>";
    echo "Los Ángeles: " . $cuentaLA . "<br>";

//He tenido que juntar estas dos para poder usar las variables $cuenta

//Array creado para el número de veces que se ha ido a una ciudad
$ciudades=array(
    array("Numero" => $cuentaRoma, "Ciudad" => "Roma" ),
    array("Numero" => $cuentaMilan, "Ciudad" => "Milán" ),
    array("Numero" => $cuentaEsta, "Ciudad" => "Estambul" ),
    array("Numero" => $cuentaMad, "Ciudad" => "Madrid" ),
    array("Numero" => $cuentaLim, "Ciudad" => "Lima" ),
    array("Numero" => $cuentaBil, "Ciudad" => "Bilbao" ),
    array("Numero" => $cuentaNY, "Ciudad" => "New York" ),
    array("Numero" => $cuentaTokio, "Ciudad" => "Tokio" ),
    array("Numero" => $cuentaChic, "Ciudad" => "Chicago" ),
    array("Numero" => $cuentaPar, "Ciudad" => "París" ),
    array("Numero" => $cuentaOpo, "Ciudad" => "Oporto" ),
    array("Numero" => $cuentaLA, "Ciudad" => "Los Ángeles" )
);

//Ordenas el array según el número de veces que se ha ido
rsort($ciudades);

//Seleccionas la ciudad que está en la posición 0 del array
echo "La ciudad más visitada es: ";
$arrayMax=(array_column($ciudades, 'Ciudad'));
$maxVisit = $arrayMax[0];
echo $maxVisit . "<br>";

//Divides el array para mostrar las últimas 3 ciudades
echo "Las ciudades menos visitadas son: ";
$minVisit = array_slice($ciudades,9);
foreach ($minVisit as $minimo) {
    $minCiu=$minimo["Ciudad"];
    echo $minCiu . "//";
}

}

//FUNCION PARA EL MEDIA DE HORAS VOLADAS TOTALES
function mediaHoras($vueloDuracion){
    $numero=0;
    $contador=0;
    foreach ($vueloDuracion as $duracion) {
        $minutos=$duracion["Minutos"];
        $numero=$numero+$minutos;
        $contador++;
    
    }
    $numero=$numero/$contador/60;
    echo "Media de horas voladas: " . $numero . " horas<br>";
}

//FUNCION TOTAL PASAJEROS
function totalPasajeros($vueloPasajeros){
    $numero=0;
    foreach ($vueloPasajeros as $pasajerito) {
        $suma=$pasajerito["Pasajeros"];
        $numero=$numero+$suma;
    
    }
    echo "Total de pasajeros de todos los vuelos: " . $numero . " personas.<br>";
}

//FUNCION NUMERO DE AVIONES POR FABRICANTE
function avionFab($vueloFabricante){
    $cuentaBoeing=0;
    $cuentaAirbus=0;
foreach ($vueloFabricante as $fabricante) {
    $avion=$fabricante["Fabricante"];
    if ($avion=='Boeing') {
        $cuentaBoeing++;
    }
    if ($avion=='Airbus') {
        $cuentaAirbus++;
    }
}
echo "Aviones fabricados por Boeing: " . $cuentaBoeing . "<br>" . "Aviones fabricados por Airbus: " . $cuentaAirbus . "<br>";
}

//FUNCION MAX CONEXIONES Y MIN
function maxCiu($vueloDestino){
    $cuentaRoma=0;
    $cuentaMilan=0;
    $cuentaMad=0;
    $cuentaLim=0;
    $cuentaEsta=0;
    $cuentaBil=0;
    $cuentaNY=0;
    $cuentaTokio=0;
    $cuentaChic=0;
    $cuentaPar=0;
    $cuentaOpo=0;
    $cuentaLA=0;
foreach ($vueloDestino as $destino) {
    $ciudad=$destino["Destino"];
    if ($ciudad=='Roma') {
        $cuentaRoma++;
    }
    if ($ciudad=='Milán') {
        $cuentaMilan++;
    }
    if ($ciudad=='Estambul') {
        $cuentaEsta++;
    }
    if ($ciudad=='Madrid') {
        $cuentaMad++;
    }
    if ($ciudad=='Lima') {
        $cuentaLim++;
    }
    if ($ciudad=='Bilbao') {
        $cuentaBil++;
    }
    if ($ciudad=='New York') {
        $cuentaNY++;
    }
    if ($ciudad=='Tokio') {
        $cuentaTokio++;
    }
    if ($ciudad=='Chicago') {
        $cuentaChic++;
    }
    if ($ciudad=='París') {
        $cuentaPar++;
    }
    if ($ciudad=='Oporto') {
        $cuentaOpo++;
    }
    if ($ciudad=='Los Ángeles') {
        $cuentaLA++;
    }
}

$ciudades=array(
    array("Numero" => $cuentaRoma, "Ciudad" => "Roma" ),
    array("Numero" => $cuentaMilan, "Ciudad" => "Milán" ),
    array("Numero" => $cuentaEsta, "Ciudad" => "Estambul" ),
    array("Numero" => $cuentaMad, "Ciudad" => "Madrid" ),
    array("Numero" => $cuentaLim, "Ciudad" => "Lima" ),
    array("Numero" => $cuentaBil, "Ciudad" => "Bilbao" ),
    array("Numero" => $cuentaNY, "Ciudad" => "New York" ),
    array("Numero" => $cuentaTokio, "Ciudad" => "Tokio" ),
    array("Numero" => $cuentaChic, "Ciudad" => "Chicago" ),
    array("Numero" => $cuentaPar, "Ciudad" => "París" ),
    array("Numero" => $cuentaOpo, "Ciudad" => "Oporto" ),
    array("Numero" => $cuentaLA, "Ciudad" => "Los Ángeles" )
);

rsort($ciudades);
echo "Destino con más conexiones : ";
$arrayMax=(array_column($ciudades, 'Ciudad'));
$maxVisit = $arrayMax[0];
echo $maxVisit . "<br>";

asort($ciudades);
echo "Destino con menos conexiones : ";
$arrayMax=(array_column($ciudades, 'Ciudad'));
$maxVisit = $arrayMax[0];
echo $maxVisit . "<br>";
}

//FUNCION PARA EL MEDIA DE HORAS VOLADAS
function mediaHorasAvion($vueloDuracion,$id){
    $numero=0;
    $contador=0;
    foreach ($vueloDuracion as $duracion) {
        $minutos=$duracion["Minutos"];
        $avion=$duracion["Avion"];
        if ($avion==$id) {
            $numero=$numero+$minutos;
            $contador++;
        }
    }
    $numero=$numero/$contador/60;
    echo "Media de horas voladas: " . $numero . " horas<br>";
}

function mediaPasajerosAvion($vueloPasajeros, $id){
    $numero=0;
    $contador=0;
    foreach ($vueloPasajeros as $pasajeros) {
        $vuelesito=$pasajeros["Avion"];
        $pasajerito=$pasajeros["Pasajeros"];
        
        if ($vuelesito==$id) {
            $numero=$numero+$pasajerito;
            $contador++;    
        }
    
    }
    $numero=$numero/$contador;
    echo "Media de pasajeros: " . $numero . " pasajeros <br>";
    }

function totalPasajerosAvion($vueloPasajeros, $id){
    $numero=0;
    foreach ($vueloPasajeros as $pasajeros) {
        $vuelesito=$pasajeros["Avion"];
        $pasajerito=$pasajeros["Pasajeros"];
        
        if ($vuelesito==$id) {
            $numero=$numero+$pasajerito;    
        }
    
    }
    echo "Total de pasajeros: " . $numero . " pasajeros <br>";
    }
//TRABAJO FINALIZADO 28/01/2022 POR MANUEL FLORIDO

//Empiezo trabajo Febrero
//CREAR NÚMERO DEL TICKET
function numID($maleta){
    if ($maleta == "Si") {
        $a=rand(0,9);
        $b=rand(0,9);
        $c=rand(0,9);
        $d=rand(0,9);
        echo "Número de maleta: " . $a . $b . $c . $d . "<br>";
    }
}
//$numMaleta=numID($maleta);

//FUNCIÓN PARA VALIDAR EL PRECIO
function validaPrecio($vueloPrecio, $dinero, $id, $maleta, $codigo, $teladedivisa){
    foreach ($vueloPrecio as $preciovuelo) {
        $avion=$preciovuelo["Avion"];
        $precio=$preciovuelo["Precio"];
//Añadimos el IVA al precio del Vuelo
        $precio=$precio*1.21;
//COMPARA EL AVION
        if ($avion==$id){
//COMPARA SI EL DINERO ES EXACTO
                if ($precio==$dinero) {
                    echo "El dinero introducido es exacto" . "<br>";
//SUMAR EL VALOR DE LA MALETA AL TOTAL
                    if ($maleta == "Si") {
                        $fin=$precio+40;
//CÓDIGO DE DESCUENTO
                        if ($codigo=="CESURHAZTEPRO") {
                            $fin=$fin/1.15;
                            echo "Código de Descuento activado <br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";             
                            
                        }elseif (empty($codigo)) {
                            echo "No ha introducido ningún código de descuento" . "<br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";     
                        }else {
                            echo "Código no válido" . "<br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";
                        }
                        echo "Se le han sumado 40€ al importe del billete por facturar su maleta" . "<br>";
                        numID($maleta);
                    } else {
                        echo "No se le aplicará ningún cargo por maleta" . "<br>";
                    }
                }
//SI SOBRA DINERO
                if ($precio<$dinero) {
                    $sobra=$dinero-$precio;
                    echo "El dinero introducido es mayor al precio del vuelo, se devolverán " . $sobra . "€ a su cuenta<br>";
//SUMAR EL VALOR DE LA MALETA AL TOTAL
                    if ($maleta == "Si") {
                        $fin=$precio+40;
//CÓDIGO DE DESCUENTO
                        if ($codigo=="CESURHAZTEPRO") {
                            $fin=$fin/1.15;
                            echo "Código de Descuento activado <br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";
                        }elseif (empty($codigo)) {
                            echo "No ha introducido ningún código de descuento" . "<br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";
                        }else {
                            echo "Código no válido" . "<br>";
                            echo "Se aplicará un cargo de " . number_format($fin, 2) . "€ a su cuenta bancaria" . "<br>";
                        }
                        echo "Se le han sumado 40€ al importe del billete por facturar su maleta" . "<br>";
                        numID($maleta);
                    } else {
                        echo "No se le aplicará ningún cargo por maleta" . "<br>";
                    }
                }
//SI FALTA DINERO
                elseif ($precio>$dinero) {
                    $falta=$precio-$dinero;
                    echo "El dinero no es suficiente, faltan: " . $falta . "€<br>";
                    echo "Inténtelo de nuevo con un importe mayor.";
                    exit;
                }
//ETO DEBERÍA IR PERO ME ESTOY DANDO CHOCAZOS
                /*foreach ($vueloDivisa as $divisita) {
                    $div=$divisita["Divisa"];
                    $valor=$divisita["Valor"];
                }
                if ($div==$divisa) {
                    echo "El precio en " . $divisa . " es igual a " . $precio/$valor . " " . $divisa;
                }*/
//SELECCIONAR LA DIVISA Y CAMBIAR EL PRECIO
                if ($teladedivisa == "Euro") {
                    $fin=$fin/1;
                    return "El total en Euros es: " . number_format($fin, 2) . "€";
                }elseif ($teladedivisa == "Yen") {
                    $fin=$fin/0.007576;
                    return "El total en Yenes es: " . number_format($fin, 2) . "¥";
                }elseif ($teladedivisa == "USD") {
                    $fin=$fin/0.877732;
                    return "El total en Dólares es: " . number_format($fin, 2) . "$";
                }elseif ($teladedivisa == "Sol") {
                    $fin=$fin/0.24;
                    return "El total en Soles Peruanos es: S/" . number_format($fin, 2);
                }elseif ($teladedivisa == "Lira") {
                    $fin=$fin/0.065;
                    return "El total en Liras Turcas: " . number_format($fin, 2) . "₺";
                }
          }
          

        }
       
    }

//NOMBRE DEL AEROPUERTO DE DESTINO Y CIUDAD
function aeroDesti($vueloAeropuerto, $vueloPrecio, $id){
    foreach ($vueloPrecio as $preciovuelo) {
        $avion=$preciovuelo["Avion"];
        if ($avion==$id){
            $desti=$preciovuelo["Destino"];
            foreach ($vueloAeropuerto as $airport) {
                $destinito=$airport["Ciudad"];
                if ($destinito==$desti) {
                    $aeropuerto=$airport["Aeropuerto"];
                    return "Destino: " . $destinito . ", " . $aeropuerto;
                    
                }
            }
        }
    }
}

//CIUDAD DESTINO
function ciuDesti($vueloAeropuerto, $vueloPrecio, $id){
    foreach ($vueloPrecio as $preciovuelo) {
        $avion=$preciovuelo["Avion"];
        if ($avion==$id){
            $desti=$preciovuelo["Destino"];
            foreach ($vueloAeropuerto as $airport) {
                $destinito=$airport["Ciudad"];
                if ($destinito==$desti) {
                    return "Ciudad Destino: " . $destinito;
                    
                }
            }
        }
    }
}


//FECHA DE SALIDA DE VUELO
function fechaSalida($vueloHoras, $id){
    foreach ($vueloHoras as $horas) {
        $avion=$horas["Avion"];
        if ($avion==$id){
            $salida=$horas["Hora"];
            return "La hora y fecha de salida es: " . date("d/m/Y H:i:s",$salida);
        }
    }
}

//TIEMPO HASTA DESPEGAR
function tiempoDespegue($vueloHoras, $id, $fechita){
    foreach ($vueloHoras as $horas) {
        $avion=$horas["Avion"];
        if ($avion==$id){
            $tiempo=$horas["Hora"];
            $final=($tiempo-$fechita)/3600;
            return "Quedan " . number_format($final,2) . " horas";
        }
    }
}
//VIAJEROS EN EL VUELO
function pasajRes($vueloPrecio, $id){
    foreach ($vueloPrecio as $preciovuelo) {
        $avion=$preciovuelo["Avion"];
        if ($avion==$id){
            $pasaj=$preciovuelo["Pasajeros"];
            if ($pasaj>0){
                $pasaj=$pasaj-1;
                return "Quedan " . $pasaj. " pasajeros";
                /*NO FUNCIONA Xd
                //Esto es para borrar "Pasajeros del array"
                array_reverse($vueloPrecio);
                array_shift($vueloPrecio);
                array_reverse($vueloPrecio);
                //Esto es para Añadir los pasajeros menos 1
                array_push($vueloPrecio,$vueloPrecio['Pasajeros']=>$pasaj);
                */
            }
        }
    }
}


    


