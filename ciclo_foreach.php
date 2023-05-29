<?php
/*
foreach(expresion as $variable){
    acciones que se tendran dentro del bucle
}
*/
$Mejora = ["abcdefghijk", 54, 'e', 14.5, true, false, 10];
echo "<pre>\n";
var_dump($Mejora);
echo "</pre>\n";
foreach($Mejora as $Proceso){
    echo "<p>$Proceso</p>\n";
}
echo "Termina el ciclo <br>";
?>