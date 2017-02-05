<?php
class Loteria
{
    public $intentos;
    public $numero;
    public $resultado=false;

    public function __construct($intentos,$numero)
    {
        $this->intentos = $intentos;
        $this->numero = $numero;
    }

    public function sorteo(){
        $minimo = $this->numero/2;
        $maximo = $this->numero*2;
        $valorsorteo = rand($minimo,$maximo);

        for($i=0;$i<$this->intentos;$i++){
            $valorsorteo = rand($minimo,$maximo);
            self::jugar($valorsorteo);
            if($this->resultado){
                $this->intentos = $i;
                break;
            }
        }

    }
    private function jugar($valor){
    if($this->numero == $valor){
            echo "Felisidades ganaste<br>";
                $this->resultado = true;
    }else{}
        echo "lo siento perdiste<br>";
            ;
   }

public function __destruct(){
    if($this->resultado ==true){
    echo  "Hola ganaste ne el intento ".$this->intentos;}else{
        echo "Perdiste en todos los intentos";
    }
}}
$juego = new Loteria(5,10);
$juego->sorteo();
?>
