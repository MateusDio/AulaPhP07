<?php 

class Carro{

public $marca;
public $velocidade;

public function acelerar($marca,$velocidade){
echo 'A marca do carro é: ' . $marca . " ";

$velocidadeMais =  $velocidade + 10;

echo ' A Velocidade atual é: ' . $velocidadeMais;


}



}





?>