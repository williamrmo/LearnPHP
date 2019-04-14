<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contador</title>
<body>
    <form action="contador.php" method="get">
        <h1>Introduzca 2 numeros</h1>
        <label for="num1">Numero 1: </label>
        <input type="number" name="num1" id="">
        <br><br>
        <label for="num2">Numero 2: </label>
        <input type="number" name="num2" id="">
        <br><br>
        <input type="submit" value="Enviar">
        <a href="http://localhost/proyectos/phpMaster/10-practicas/contador.php">reset</a>
        <hr>
    </form>
</body>
</html>

<?php
/*
$a = $_GET['num1'];
$b = $_GET['num2'];

if($a < $b ){
    for ($i=$a; $i <= $b ; $i++) { 
        echo $i.'<br>';
    }
} elseif($b <$a) {
    for ($i=$b; $i <= $a ; $i++) { 
        echo $i.'<br>';
    }
} else {
    echo 'Esperando...';
}*/



if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    if($a < $b ){
        for ($i=$a; $i <= $b ; $i++) { 
            echo $i.'<br>';
        }
    }else {
        for ($i=$b; $i <= $a ; $i++) { 
            echo $i.'<br>';
        }
    } 
    
} else {
    echo 'Esperando...';
}