<?php

// Bucle While
// Estructura de control que repite una intruccion

/*
mientras la condicion se cumpla

While(condicion) {
    Bloque de intrucciones
}
*/

echo 'While<br>';

$num = 0;

while($num <= 100) {

    if ($num != 100) {
        echo "$num, ";
    } elseif($num = 100) {
        echo $num;
    }
    $num++;
}

echo '<hr>';

// eje 2 while
if(isset($_get['num'])) {
    // Para cambiar numero pero no sirve
    $num = (int)$_get['num'];
} else {
    $num = 33;
}

// var_dump($numero);
echo "<h1>Tabla de multiplicar de numero $num</h1>";

$cont = 1;
while($cont <= 10) {
    echo "<p>$num x $cont = ".($num*$cont).'<br>';
    $cont++;
}

echo '<hr>';

/* DO WHILE
do{
    // Bloque de instrucciones
}while(condicion);
*/

$edad = 21;
$cont = 1;
do {
    echo "Tienes acceso al local privado $cont<br>";
    $cont++;
} while($edad >= 18 && $cont <= 10);

echo '<hr>';