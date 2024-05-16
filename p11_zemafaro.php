<?php

//realizar un programa que me permita imprimir
//los tres colores del semaforo para el auto
//siendo el siguiente enunciado
//Si el semaforo esta en rojo debe decir ¡pare!
//Si el semaforo esta en amarillo debe decir ¡espera!
//Si el semaforo esta en verde debe decir ¡Avanza!
//para ello el programa debe pedir al usuario que ingrese
//un numero o una letra para luego evaluar que color
//esta eligiendo
/*-----------------------------------------------------------------------------------------------------------------------------------------------*/




/*
echo "Ingrese un número o una letra para elegir un color del semáforo (1 para Rojo, 2 para Amarillo, 3 para Verde): ";
$input = trim(fgets(STDIN));
// Evaluar el color elegido
switch ($input) {
    case '1':
    case 'R':
    
        echo "Pare\n";
        break;
    case '2':
    case 'A':
 
        echo "Espera\n";
        break;
    case '3':
    case 'V':
   
        echo "Avanza\n";
        break;
  
}*/


echo "Ingrese un número o una letra para elegir un color del semáforo (1 para Rojo, 2 para Amarillo, 3 para Verde): ";
$input = trim(fgets(STDIN));

if ($input == '1' || $input == 'R') {
    echo "Pare\n";
} elseif ($input == '2' || $input == 'A') {
    echo "Espera\n";
} elseif ($input == '3' || $input == 'V') 
    echo "Avanza\n";

?>
