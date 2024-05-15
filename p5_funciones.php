<?php
 
function obtenersaludo($parametro){
    return "hola como estas " .$parametro;
}
function mostrardatos($nombre,$apellido,$curso,$semestre){
    $mensaje = "hola soy ".$nombre." ".$apellido." del curso de ".$curso." en el ".$semestre;
    return $mensaje;
}
 
echo obtenersaludo("gandy")."\n";
echo mostrardatos("gandy","lizandro","backed developper web","3er semestre");
 

function calcular ($operador, $numero1, $numero2) {
    if($operador=="+")
         return $numero1+$numero2;
    if($operador=="-")
          return $numero1-$numero2;
    if($operador=="*")
        return $numero1*$numero2;
    if($operador=="/")
        return $numero1/$numero2;
}

echo obtenerSaludo ("GANDY")."\n";
echo mostrarDatos ("GANDY", "HUMIRI",
"backend developer web", "tercer semestre")."\n";
echo "El total de la suma es : ".calcular("+", 10,34);
?>