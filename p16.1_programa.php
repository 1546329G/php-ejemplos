<?php

include("p16_encapsulamiento.php");

$guitarra = new Instrumento("gibson", "acustica"); 
$guitarra->setearModelos("nylon, alambre");
echo "Datos de Guitarra\n";
echo "nombre: ".$guitarra->nombre."\n";
echo "categoria : ".$guitarra->categoria;
echo "modelos: ".$guitarra->mostrarModelos();


$guitarra->nombre = "yamaha";
$guitarra->categoria = "electronica";
$guitarra->setearModelos("nylom , ala,bre , otros");
echo "\nDatos de Guitarra\n";
echo "nombre: ".$guitarra->nombre."\n";
echo "categoria : ".$guitarra->categoria;
echo "modelos: ".$guitarra->mostrarModelos();


?>