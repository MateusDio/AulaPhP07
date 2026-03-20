<?php

class Produto2{

private $nome;
private $preco;


public function __construct($nome,$preco){
    $this->nome=$nome;
    $this->preco=$preco;

    }




public function getPreco(){
    return $this->preco;



}


public function getNome(){
    return $this->nome;
}
}
?>