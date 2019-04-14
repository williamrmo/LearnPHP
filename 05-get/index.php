<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP con GET</h1>
    <form action="recibir.php" method="get">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="">
    <br><br>
    <label for="apellido">Apellidos: </label>
    <input type="text" name="apellido" id="">
    <br><br>
    <input type="submit" value="Enviar">
    </form>

    <a href="recibir.php" target="_blank">Ir a ver</a>
</body>
</html>