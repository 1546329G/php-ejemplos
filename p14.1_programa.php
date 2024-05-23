<?php
    include("p14_herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES\n";

    $perro = new Perro("Coimita","Verde",false,"sound-dog.mp3");
    
    echo $perro->obtenerInformacion()."\n";
    echo $perro->hacerSonido("Guauu");
?>