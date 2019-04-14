<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>tabla de multiplicar</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    
</body>
</html>
<?php

$cont = 1;

do {
    for ($i=1; $i <= 200; $i++) { 
        for ($j=1; $j <= 200; $j++) { 
            echo "<table>
                    <tr>
                        <td>$i</td>
                        <td>$j</td>
                        <td>".($i*$j)."</td>
                    </tr>
                </table>";
        }
        echo '<br>';
    }
    echo '<br>';
    $cont = $cont + 1;
} while ($cont == 200);