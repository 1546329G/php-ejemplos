<?php
//caso 1 
//E1 
$numeros = array(1,3,5,2,6);
print_r($numeros);

/*E_2*/
$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros);
print_r($frutas);



//caso 2

$estudinate = array(
    "DNI"=>"0202332",
    "edad"=>"18",
    "fehca_nacimiento"=>"200-02-01",
    "nombres"=>"gandy",
    "apellido"=>"humri",
    "ciclo"=>3,
    "deuda"=>100.5545,
    "nota_final"=>12.6);

  print_r($estudinate);
  foreach($estudinate as $key=>$value) {
    echo $key." -  ".$value."\n";
  }  

  //caso 3



?>

