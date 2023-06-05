<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="IF-SWITCH-LOOPS-ARRAYS.php" method="POST">
        <label for="">digite el limite del contador</label>
        <input type="number" name="counter">
        <input type="submit" value="generador">
        </form>

    <?php

    $salario = 900000;
    $noSubsidioMsg = "Usted (NO) tiene derecho a subsidio";
    $siSubsidioMsg = "Usted (SI) tiene derecho a subsidio";
    
    if ($salario >= 3000000){
        echo $noSubsidioMsg;
    }
    
    elseif($salario >= 1000000){
        echo $siSubsidioMsg;
    }
    else{
        echo "Usted tiene derecho a un subcidio de vivivenda <br>";
    }


    $temperatura = 15;
    
    
    if ($temperatura < 0 || $temperatura > 30){
        echo "El clima no esta bonito hoy";
    }
    else{
        echo "el clima esta bonito hoy<br>";

    }

    $hora = "03:00 P.M";

        switch($hora){
            case "06:00 A.M";
            echo "Camper, Tienes Software skill";
            break;
            case "08:00 A.M";
            echo "Camper, Tienes Break";
            break;
            case "10:00 A.M";
            echo "Camper, Tienes clase de inglés";
            break;
            case "12:00 A.M";
            echo "Camper, Tienes que comerrrr";
            break;
            case "02:00 P.M";
            echo "Camper, Tienes Software review";
            break;
            default:
            echo "camper, a mimir";
            break;
        
        }

        if($_POST){
            $counter = $_POST["counter"];
            for($i=1; $i<= $counter;$i++){
            
            echo $i . "<br>";
            }
        }


        $contador = 0;

        
        while ($contador < 10){
            $contador ++;
            echo $contador . "<br>";
        }
        
        $comida = array("hola", "mundo", "como", "estan", "yo","bien");

        echo $comida[0] . "<br>";
        echo $comida[1] . "<br>";
        echo $comida[2] . "<br>";
        echo $comida[3] . "<br>";
        echo $comida[4] . "<br>";
        echo $comida[5] . "<br>";

        echo "<br>";

       array_push ($comida, "julian");
       array_pop($comida);
       array_shift($comida);

       foreach($comida as $bocado){
        echo $bocado . "<br>";
    }
   


    ?>


</body>
</html>