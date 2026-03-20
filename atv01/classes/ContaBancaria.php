<?php

class ContaBancaria
{
    private $titular;
    private $saldo;


    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    function depositar($valor)
    {
        echo 'Saldo atual: ' . $this->saldo . ' R$';
        echo 'Você depositou: ' . $valor . " R$";
        return $this->saldo + $valor;
    }

    function sacar($valor)
    {
        if ($valor < $this->saldo) {
            echo 'Saldo atual: ' . $this->saldo . ' R$';
            echo 'Você sacou: ' . $valor . " R$";
            return $this->saldo - $valor;
        } else {
        
        echo "Saque inválido, saldo insuficiente.";
        
        }
    }
}




?>