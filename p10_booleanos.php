<?php

/*caso 1 */
$luzEncendida=false;
if($luzEncendida)
   echo "La luz esta encendida";
else
   echo "La luz esta apagada";


//caso 2
 $sintomas_covid=[
    "tos"=>true,
    "fiebre"=>false,
    "dolor"=>false,
    "perdida_olfato"=>false];

if($sintomas_covid["tos"] &&
    $sintomas_covid["fiebre"]) {
        echo "\nEstas enfermo tienes covida. Ve a centro de salud. ";
    }
else{
    echo "\nAun no estas con covid.";
}


/*caso 3*/
$saldo = 1000;
if(!($saldo < 0)) {
    echo "\ntiene saldo insufisiente";
}
else {
    echo "\ntiene saldo";
}