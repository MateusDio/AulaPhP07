<?php

include 'classes/pessoa.php';
include 'classes/produto.php';
include 'classes/conta.php';
include 'classes/carro.php';
include 'classes/calculadora.php';
include 'classes/lampada.php';
include 'classes/aluno.php';
include 'classes/pessoa2.php';
include 'classes/ContaBancaria.php';
include 'classes/carrinho.php';
include 'classes/usuario.php';
include 'classes/cliente2.php';
include 'classes/produto2.php';
include 'classes/pedido2.php';


$pessoa1 = new Pessoa();
$produto1 = new Produto('Celular', 189);
$produto2 = new Produto('Videogame', 900);
$carrinho1 = new Carrinho();
$conta1 = new Conta();
$carro1 = new Carro();
$calculadora1 = new Calculadora();
$lampada1 = new Lampada();
$aluno1 = new Aluno('Marcos', 4, 5);
$pessoa2 = new Pessoa1('Matt', 12);
$contaBancaria1 = new ContaBancaria('Mate', 1000);
$usuario1 = new Usuario('Diolinda', 12345);
$cliente = new Cliente2("João Silva");
$p1 = new Produto2("Camiseta", 50);
$p2 = new Produto2("Calça Jeans", 120);
$p3 = new Produto2("Tênis", 200);
$pedido = new Pedido2($cliente);


$pessoa1->apresentar('Mateus Diolinda');
$produto1->exibir('Celular', '7.90');
$conta1->verSaldo('R$ 1.00');
$carro1->acelerar('Azul', 10);
$calculadora1->Somar(20,10);
$lampada1->ligar();
$lampada1->desligar();
$usuario1->login('Diolinda',12345);
$aluno1->verificar();
$produto1->desconto(100,40);
$contaBancaria1->sacar(200);
$contaBancaria1->depositar(220);
$carrinho1->adicionar($produto1);
$carrinho1->adicionar($produto2);
$pedido2->adicionarProduto($p1);
$pedido2->adicionarProduto($p2);
$pedido2->adicionarProduto($p3);
$pedid02->exibirResumo();



echo 'Total R$ ' . $carrinho1->calcularTotal();
echo $pessoa2->nome;
echo $pessoa2->idade;

?>