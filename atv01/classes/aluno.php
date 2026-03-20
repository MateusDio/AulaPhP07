<?php 
class Aluno{

private $nome;
private $nota;
private $nota2;

public function getNome(){
    return $this->nome;
}

public function setNome($nome){

return $this->nome = $nome;


}


public function getnota(){
    return $this->nota;
}



public function setnota($nota){
    return $this->nota = $nota;

}

public function __construct($nome, $nota,$nota2){
    $this->nome = $nome;
    $this->nota = $nota;
    $this->nota2 = $nota2;
}

function media (){
    return ($this->nota + $this->nota2) / 2;
}

  

public function verificar(){
if ($this->media() >= 7){
    echo 'O aluno ' . $this->nome . ' Está Aprovado!';

} else{
     echo 'O aluno ' . $this->nome . ' Está Reprovado!';

} 


}

}
?>