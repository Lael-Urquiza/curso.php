<?php
/*utilizar las sentencias de flujo if y else en su metodo alternativo
  utilizar constantes, variables, operadores aritmeticos, logicos y de relacion 
  El ejercicio : Calcular la edad con años, meses, dias y horas utilizando un año de nacimiento e indicando si es mayor o menor de edad imprimiendo los
  datos como años, meses, dias y horas
*/
define('Tope', 2022);
define('Meses', 12);
define('Dias', 365);
define('Horas', 24);
$Nacimiento = "2009";
$Mayoria = 18;
$Edad = Tope - $Nacimiento;
$Meses = $Edad * Meses;
$Dias = $Edad * Dias;
$Horas = Dias * Horas * $Edad;
if(is_numeric($Nacimiento) && is_numeric($Mayoria) && is_numeric($Edad) && is_numeric($Meses) && is_numeric($Dias) && is_numeric($Horas)):
    if($Edad >= $Mayoria):
        echo "Eres mayor de edad por que ";
        echo "tienes: ".$Edad." años de vida</br>";
        echo "Son: ".$Meses." meses de vida</br>";
        echo "Son: ".$Dias." dias de vida</br>";
        echo "Son: ".$Horas." horas de vida</br>";   
    else:
        echo "Eres menor de edad por que ";
        echo "tienes: ".$Edad." años de vida</br>";
        echo "Son: ".$Meses." meses de vida</br>";
        echo "Son: ".$Dias." dias de vida</br>";
        echo "Son: ".$Horas." horas de vida</br>";   
    endif;
else:
    echo "¿Alguno de los valores asignados en las variables no son variables numericos?";

endif;
?>