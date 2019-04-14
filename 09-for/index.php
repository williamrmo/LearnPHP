<?php

/* FOR
for(variable inicial, condicion, incrementador) {
    Bloque de instrucciones
}
*/

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
}

echo "<h2>El resultado es: $resultado</h2><hr>";

// Eje 2
if(isset($_GET['num'])){
    // ruta:
    // http://localhost/proyectos/phpMaster/09-for/?num=10
    $num = (int)$_GET['num'];
} else {
    $num = 5;
}

echo "<h2>Tabla de multiblicar del numero: $num</h2>";

for($cont = 1; $cont <= 10; $cont++) {
    if($num == 45) {
        echo 'Operacion Prohibida';
        // Para evaluar alguan condicion
        break;
    }
    echo "<p>$num x $cont = ".($num*$cont).'<br>';    
}
