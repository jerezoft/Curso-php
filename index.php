<?php 
class Pagina{
    public $nombre = "Codigo Facilito";
    public static $url="www.Codigo.facilito";


    //Metodos
public function bienvenida(){
    echo "bienvenidos a ".$this->nombre." url ".$this->url."<br>";
}
}

$pa = new Pagina();
$pa->bienvenida();
?>