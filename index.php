<?php 
class Persona{
    public $nombre = "carlos";

    public  function Saludar($nombre){
        $this->nombre = $nombre;
        echo "Hola ".$this->nombre;
    }

}

class Persononita extends Persona{
    public function __construct(){
            Persona::Saludar("juan");
    }
    
}

$a = new Persononita();
?>