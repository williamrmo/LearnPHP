<?php

/*
// Condicional

if(condicional) {
    instrucciones
} else {
    otras instrucciones
}

// OPERADORES DE COMPARACION

== es =
=== es identico
!= distinto de
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

// OPERADORES LOGICOS
&& and y
|| or o
! not no
*/

// Eje 1
$color = 'verde';

if($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color NO es rojo';
}

echo '<br><hr>';

// Eje 2
$year = 2020;
if ($year < 2019) {
    echo 'Es un a&ntilde;o anterior a 2019';
} else {
    echo 'Es un a&ntilde;o posterior a 2019';
}

echo '<br><hr>';

// Eje 3
$name = "William Romero";
$city = 'Cartago';
$continente = 'Latan';
$age = 21;

$adult = 18;

if ($age >= $adult) {
    echo "<h1>$name es mayor de edad</h1>";
    if($continente == "Europa") {
        echo "<h2>Y es de $city</h2>";
    } else {
        echo 'NO es de europeo';
    }
    
} else {
    echo "<h2>$name No es mayor de edad</h2>";
}

echo '<br><hr>';

// Eje 4
$dia = 4;
/*
if($dia == 1) {
    echo 'Es lunes';
} else {
    if($dia == 2) {
        echo 'Es martes';
    } else {
        if($dia == 3) {
            echo 'Es miercoles';
        } else {
            if ($dia == 4) {
                echo 'Es jueves';
            } else {
                if($dia == 5) {
                    echo 'Es viernes';
                } else {
                    if ($dia == 6) {
                        echo 'Es sabado';
                    } else{
                        echo 'Es domingo';
                    }
                }
            }
        }
    }
}
*/

if ($dia == 1) {
    echo 'Es lunes';
} elseif ($dia == 2) {
    echo 'Es martes';
} elseif ($dia == 3) {
    echo 'Es miercoles';
} elseif ($dia == 4) {
    echo 'Es jueves';
} elseif ($dia == 5) {
    echo 'Es viernes';
} elseif ($dia == 6) {
    echo 'Es sabado';
} else{
    echo 'Es domingo';
}

echo '<br><hr>';

$dia = 6;
switch ($dia) {
    case 1:
        echo 'Es lunes';
        break;
    case 2:
        echo 'Es martes';
        break;
    case 3:
        echo 'Es miercoles';
        break;
    case 4:
        echo 'Es jueves';
        break;
    case 5:
        echo 'Es viernes';
        break;
    default:
    echo 'Es fin de semana';
}

echo '<br><hr>';

// Eje 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 31;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo 'Esta en edad de trabajar';
} else {
    echo 'NO puede trabajar';
}

echo '<br><hr>';

// Eje 6
$pais = 'Colombia';

if($pais == 'Mexico' || $pais == 'Colombia' || $pais == 'Costa Rica'){
    echo "En este pa&iacute;s se habla espa&ntilde;ol.";
} else {
    echo 'No se habla espa&ntilde;ol.';
}

echo '<br><hr>';

// GOTO
goto marca;
echo "<h1>Instruccion 1</h1>";
echo "<h1>Instruccion 2</h1>";
echo "<h1>Instruccion 3</h1>";
echo "<h1>Instruccion 4</h1>";

marca:
echo "<h3>Me he saltado 4 echos con goto</h3>";
echo '<hr>';
