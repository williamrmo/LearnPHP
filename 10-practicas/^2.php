<?php 

 
// Imprimir los ^2 (un num * por el mismo) de los 40 primeros numeros naturales con while.

/*
for($i = 1; $i <= 40; $i++) {
    echo "$i^2 = ".($i * $i).'<br>';
}
*/

$num = 0;
while ($num <= 40) {
    echo "$num^2 = ".($num*$num).'<br>';
    $num++;
}