<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$cliente = "juan sabe hacer los platillos llamados,";
$platillos = " huevo cosido, huevo escalfado, huevo frito,";
$separacion = " ademas de esos le quedan";
$sabor = " MUYYY RICOSSSS.";


echo "{$cliente}{$platillos}{$separacion}{$sabor}";

$estado = true;

echo"<br>{$cliente} le gusta la mandarina eso es {$estado}";

$tipoData = "el tipo de dato es " . gettype($estado);


echo "<br>{$tipoData}<br>";


$cositas = array ("hola", "me", "duele", "la", "cabeza");

var_dump($cositas);

?>



</body>    
</html>