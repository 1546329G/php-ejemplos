<?php 

include 'p9.1_iclu.php';
echo "ingrese el primer numero  :";
$numero1=fgets(STDIN);
echo "ingrese el segundo numero  :";
$numero2=fgets(STDIN);

$resultado = multuplicar($numero1,$numero2);
echo "el producto de $numero1 x $numero2 es $resultado \n";


$resultado = dividir($numero1,$numero2);
echo " la division de".$numero1." / ".$numero2." es ".$resultado;
