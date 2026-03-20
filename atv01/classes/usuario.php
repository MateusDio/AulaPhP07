<?php

class Usuario{
    private $usuario;
    private $senha;

    public function __construct($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    function login($usuario, $senha){
        if($usuario == $this->usuario || $senha == $this->senha){
        echo "Login realizado com sucesso!";
        
        
        } else {
            echo "Usuario ou senha, estão incorretos! ";
        }

}
}






?>