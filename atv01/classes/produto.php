<?php 

class Produto{

public $nome;
public $preco;


public function exibir( $nome, $preco ){
    echo "Produto: " . $nome;
    echo " - R$ " . $preco;

}



}

?>