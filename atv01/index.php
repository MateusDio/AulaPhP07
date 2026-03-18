<?php

include 'classes/pessoa.php';
include 'classes/produto.php';
include 'classes/conta.php';
include 'classes/carro.php';
include 'classes/calculadora.php';
include 'classes/lampada.php';
include 'classes/aluno.php';


$pessoa1 = new Pessoa();
$produto1 = new Produto();
$conta1 = new Conta();
$carro1 = new Carro();
$calculadora1 = new Calculadora();
$lampada1 = new Lampada();
$aluno1 = new Aluno();

$pessoa1->apresentar('Mateus Diolinda');
$produto1->exibir('Celular', '7.90');
$conta1->verSaldo('R$ 1.00');
$carro1->acelerar('Azul', 10);
$calculadora1->Somar(20,10);
$lampada1->ligar();
$lampada1->desligar();
$aluno1->verificar(4, 'Marcos');

?>