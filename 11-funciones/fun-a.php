<?php
/*
function nombreDeLaFuncion($parametros){
    bloque de instrucciones
}

nombreDeLaFuncion($mi_parametro);
*/

function muestrameNombre () {
    echo "Luis Miguel<br>";
    echo "Mario Ruiz<br>";
    echo "Carmen de Mairen<br>";
    echo "Wilfred Bony<br>";

}

muestrameNombre();
echo '<hr>';
muestrameNombre();
echo '<hr>';
muestrameNombre();
echo '<hr>';

function tabla($num) {
    // var_dump($num);
    echo "Tabla de multiplicar del numero: $num";
    for($i=1;$i<=10;$i++) {
        echo "<p>$num x $i = ".($num*$i)."</p>";
    }
}

//tabla(55);

if(isset($_GET['num'])) {
    tabla($_GET['num']);
    echo "<hr>";
} else {
    echo "No hay numero";
}


/*
for($i=1;$i<=10;$i++) {
    tabla($i);
}
echo "<hr>";
*/
function calc($a, $b) {
    $sum = $a + $b;
    $res = $a - $b;
    $div = $a / $b;
    $mult = $a * $b;

    echo "Suma: $sum<br>";
    echo "Resta: $res<br>";
    echo "Divicion: $div<br>";
    echo "Multiplicacion: $mult<br>";
    echo "<hr>";
}

calc(5,5);