<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calcuadora</title>
<body>
    <form action="calculadora.php" method="get">
        <h1>Introduzca 2 numeros</h1>
        <label for="num1">Numero 1: </label>
        <input type="number" name="num1" id="">
        <br><br>
        <label for="num2">Numero 2: </label>
        <input type="number" name="num2" id="">
        <br><br>
        <input type="submit" value="Enviar">
        <a href="http://localhost/proyectos/phpMaster/10-practicas/calculadora.php">reset</a>
        <hr>
    </form>
</body>
</html>


<?php

/*
    Ejercicio 4. Regojer dos numeros por la URL(GET) y hacer todas las operaciones basicas 
    de una calculadora (suma, resta, multiplicacion y division) de esos dos numeros.
*/

$a = $_GET['num1'];
$b = $_GET['num2'];

if($a != 0 && $b != 0) {
    echo 'El resulatado de la suma es: '.($a+$b).'<br>';
    echo 'El resulatado de la resta es: '.($a-$b).'<br>';
    echo 'El resulatado de la multiplicacion es: '.($a*$b).'<br>';
    echo 'El resulatado de la division es: '.($a/$b).'<hr>';
} else {
    echo 'Esperando...';
}


?>