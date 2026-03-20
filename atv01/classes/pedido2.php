<?php

require_once "Produto.php";
require_once "Cliente2.php";

class Pedido2 {

    private $cliente;
    private $produtos = [];

    public function __construct(Cliente2 $cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarProduto(Produto2 $produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }

        return $total;
    }

    public function exibirResumo() {
        echo "Resumo do Pedido\n";
        echo "Cliente: " . $this->cliente->getNome() . "\n\n";

        echo "Produtos:\n";
        foreach ($this->produtos as $produto) {
            echo "- " . $produto->getNome() . " → R$ " . number_format($produto->getPreco(), 2, ',', '.') . "\n";
        }

        echo "\nTotal: R$ " . number_format($this->calcularTotal(), 2, ',', '.');
    }
}

?>