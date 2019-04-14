<!Doctype HTML>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Imprimir por pantalla - Master en PHP</title>
    <style>
        * {
            color: #fff;
            background: red;
        }
    </style>
</head>
<body>
    <h1>Master en PHP - <a href="http://victorroblesweb.es">victorroblesweb.es</a></h1>
    <?='<p>Esto funciona como un atajo de un echo</p>'?>
    
    <?php
    // comentario
    /*
        otro comentario
    */
        echo '<h3>Listado de video juegos<h3>';
        echo '<ul>' 
            . '<li>Fifa 19</li>'
            . '<li>GTA</li>' 
            . '<li>Mario Bros</li>'
            . '</ul>';
        echo '<p>Esto es una pr&aacute;ctica</p>';
    ?>
</body>
</html>