<?php
 require __DIR__ . "/../../vendor/autoload.php";
use App\Enums\TipoEquipo;

 if($_SERVER["REQUEST_METHOD"] == "POST"){

 $carnet = $_POST["carnet"];
 $codigo = $_POST["codigo"];
 $nombre = $_POST["Nombre"];
 $tipo = $_POST["tipo"];


 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "POST">
        <label for=""> carnet</label>
        <input type="text" name="carnet">
        <br><br>
        <label for="">Codigo de equipo</label>
        <input type="text" name="codigo">
        <br><br>
        <label for="">Nombre del equipo</label>
        <input type="text" name="Nombre">
        <br><br>
        <label for="">Tipo</label>
        <input type="text" name="tipo">
        <br><br>
        <button>enviar</button>
    </form>
</body>
</html>