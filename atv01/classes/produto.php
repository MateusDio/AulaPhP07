<?php

class Produto
{

    public $nome;
    public $preco;


    public function exibir($nome, $preco)
    {
        if ($preco >= 0) {

            echo "Produto: " . $nome;
            echo " - R$ " . $preco;

        } else {

            echo "Preço invalido";
            exit;

        }
    }



    public function __construct($nome, $preco)
    {

        $this->nome = $nome;
        $this->preco = $preco;
    }


    function desconto($preco, $percentual)
    {
        $valorDesconto = $preco * ($percentual / 100);
        return $preco - $valorDesconto;



    }

}

?>