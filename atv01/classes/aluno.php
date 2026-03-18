<?php 
class Aluno{

private $nome;
private $nota;

public function getNome(){
    return $this->nome;
}

public function setNome($nome){

return $this->nome = $nome;
return $this;   

}


public function getnota(){
    return $this->nota;
}



public function setnota($nota){
    return $this->nota = $nota;
    return $this;
}


public function verificar($nota,$nome){
if ($nota >= 7){
    echo 'O aluno ' . $nome . ' Está Aprovado!';

} else{
     echo 'O aluno ' . $nome . ' Está Reprovado!';

} 


}

}
?>