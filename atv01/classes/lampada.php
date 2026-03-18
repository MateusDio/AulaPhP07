<?php

class Lampada
{
    public $status;

    public function ligar()
    {
        $status = 'Ligada';
        echo 'Ela está: ' . $status . '<br>';


    }

    public function desligar()
    {
        $status = 'Desligada';
        echo 'Ela está: ' . $status . '<br>';


    }
}




?>