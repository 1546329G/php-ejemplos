<?php
 
    include("p15_polimorfismo.php");
 
    echo "area de triangulo\n";
    echo "ingrese la base :";
    $b=fgets(STDIN);
    echo "ingrese la altura :";
    $h=fgets(STDIN);
    $triangulo = new Triangulo($b,$h);
    $area=$triangulo->calcularArea();
    echo "el area del triangulo es ".$area;
 
    echo "\narea de rectangulo\n";
    echo "ingrese la base :";
    $b=fgets(STDIN);
    echo "ingrese la altura :";
    $a=fgets(STDIN);
    $rectangulo = new Rectangulo($b,$a);
    $area=$rectangulo->calcularArea();
    echo "el area del rectangulo es ".$area;
 
?>