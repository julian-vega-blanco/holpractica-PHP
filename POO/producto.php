<?php

class celulares{

private $procesador;
private $memoria;
private $ram;
private $camara;
private $material;


public function getProcesador()
{
    return $this ->procesador;
}
public function getMemoria()
{
    return $this ->memoria;
}
public function getRam()
{
    return $this ->ram;
}
public function getCamara()
{
    return $this ->camara;
}
public function getMaterial()
{
    return $this ->material;
}


public function setProcesador($procesador){ 
    $this->procesador = $procesador;
}
public function setMemoria($memoria){ 
    $this->memoria = $memoria;
}
public function setRam($ram){ 
    $this->ram = $ram;
}
public function setCamara($camara){ 
    $this->camara = $camara;
}
public function setMaterial($material){ 
    $this->material = $material;
}


}

$celulares = new Celulares();


$celulares ->setProcesador("M2");
$celulares ->setMemoria("16gb");
$celulares ->setRam("2gb");
$celulares ->setCamara("5mpx");
$celulares ->setMaterial("plastico");

echo "Class <br> Celulares <br><br> ";
echo $celulares -> getProcesador() . "<br>";
echo $celulares -> getMemoria() . "<br>";
echo $celulares -> getRam() . "<br>";
echo $celulares -> getCamara() . "<br>";
echo $celulares -> getMaterial() . "<br>";

?>