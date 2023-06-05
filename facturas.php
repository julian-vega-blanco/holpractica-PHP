<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="facturas.php" method="post">
    <br>

<label for="">CriptoMoneda</label>
<select name="criptomoneda">
    <option value="bitCoin"  name="bitCoin">bitCoin</option>;
    <option value="dogue"  name="dogue">dogue</option>;
    <option value="shiba" name="shiba">shiba</option>;
    <option value="etereum" name="etereum">etereum</option>;
    <option value="peso"  name="peso">peso</option>;

</select> 

<label for="">Precio</label>
 <input type="number" name="numero">

 <label for="">Cantidad</label>
 <input type="number" name="cantidad">



<input type="submit" name="send">
</form>
    
</body>
</html>

<?php

$cripto = $_POST["criptomoneda"];
$h = $_POST["cantidad"];
$precio = $_POST["numero"];

$operacion = $h * $precio;

echo "El nombre de la cripto seleccionada es {$cripto}, la cantidad seleccionada fue {$h} y su precio total es de $ {$operacion} pesos";


?>