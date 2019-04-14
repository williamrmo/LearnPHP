<?php
// Una var es un contenedor de informacion
$mi_primer_var = "Hola Mundo desde una variable";
$numero = 44;
$verdadero = true;

// Up Down
$numero = 77;

echo '<h1>'.$mi_primer_var.'</h1>';
echo $numero.'<br>';

// Sepuede redefinir el codigo segun avanza

$numero = 120;
echo $numero.'<br>';

// permite crearla pero luego se tiene que definir
$null;

/*
    Tipos de datos:
    Entero (int / integer) = 99
    Coma flotante / decimal / real (float / double) = 3.45
    Cadenas (string) = 'texto o cadena de texto'
    Boleano (bool) = true / false
    null
    Array / vectores (coleccion de datos)
    Objetos
*/

// conocer tipo de variable
echo gettype($numero);

echo '<br><br>';

$mi_nombre[] = 'William Romero M.';
$mi_nombre[] = 'Victor Robles';
//Debugear
var_dump($mi_nombre); 

echo '<br><br>';

// concatenar con comillas dobles pero es leto 
$concat2 = "Hola Mundo desde una variable $numero";
echo $concat2;

// constantes
// variables que no pueden cambiar

?>