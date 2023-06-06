<?php
class Persona
{
    //1. atributes with modifiers of access.
    // private, public and protected
    
    private $nombre;
    private $email; 
    private $celular;


    //2. constructor (method magic)
    //sometimes it initialize with values parameterized
    //public function __construct($nombre,$email,$celular) // ideal for initialize values of properties
   // {
    //    $this->nombre = $nombre;
    //    $this->email = $email;
   //     $this->celular = $celular;

   // }
    

    //3. methods (getters and setter)
    //GETTER methods
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCelular()
    {
        return $this->celular;
    }



    // get --> optain values of atributes
    // set --> modifier values of atributes


    //methods setters

    public function setNombre($nombre){ 
        $this->nombre = $nombre;
    }
    public function setEmail($email){ 
        $this->email = $email;
    }
    public function setCelular($celular){ 
        $this->celular = $celular;
    }

}
// instance of the class (object) --> variable of instance
//$persona = new Persona("julian", "julianvegablanco510@gmail.com", "3105669299private");
$persona = new Persona();

$persona ->setNombre("julianVega");
$persona ->setEmail("julianvegablanco510@gmail.com");
$persona ->setCelular("3105669299");
echo $persona -> getNombre() . "<br>";
echo $persona -> getEmail() . "<br>";
echo $persona -> getCelular() . "<br>";












?>