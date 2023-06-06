<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Punto 10</h1>
<form method="POST" action="ejercicio10ByYisus.php">
<label for="numero">ingrese un numero:</label>
<input type="number" id="numero" name="numero">
<input type="submit" name="ejecutar" value="Agregar numero"><br><br>
<label>mostrar resultados de numeros enviados</label>
<input type="submit" name="ejecutar" value="Mostrar resultados"><br><br>
<label>limpiar datos:</label>
<button>
<a href="./archivo11.php">limpiar datos</a>
</button>
</form>

</body>
</html>

<?php

session_start();

if(isset($_POST["ejecutar"])) {
    if($_POST["ejecutar"] == "Agregar numero"){
        $numero = $_POST["numero"];
        if($numero != 0){
            array_push($_SESSION["numeros"],$numero);
        }
    }
    else if ($_POST["ejecutar"] == "Mostrar resultados"){
        $numeros = $_SESSION["numeros"];
        $suma = array_sum($numeros);
        $promedio = count($numeros) > 0 ? $suma / count($numeros) : 0;
        $mayor = max($numeros);
        $menor = min($numeros);
        $contador = count($numeros);


        echo"<h2>resultados:</h2>";
        echo"<p>La sumatoria de los valores es: {$suma}</p>";
        echo"<p>El valor del promedio es: {$promedio}</p>";
        echo"<p>Se ingresaron {$contador} valores</p>";
        echo"<p>El mayor valor es: {$mayor}</p>";
        echo"<p>El menor valor es: {$menor}</p>";
    }
    
}
else{
    $_SESSION["numeros"] = [];
}








?>