<?php

class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        if ($quantidade > 0) {
            $this->quantidade = $quantidade;
        } else {
            $this->quantidade = 0;
        }
    }

    public function getPrecoPorItem() {
        return $this->precoPorItem;
    }

    public function setPrecoPorItem($precoPorItem) {
        if ($precoPorItem > 0) {
            $this->precoPorItem = $precoPorItem;
        } else {
            $this->precoPorItem = 0.0;
        }
    }

    public function getTotalFatura() {
        $total = $this->quantidade * $this->precoPorItem;
        return $total > 0 ? $total : 0;
    }
}

// Demonstração da classe Fatura
$fatura = new Fatura();
$fatura->setNumero("001");
$fatura->setDescricao("Teclado mecânico");
$fatura->setQuantidade(2);
$fatura->setPrecoPorItem(50.99);

echo "Número da fatura: " . $fatura->getNumero() . "\n";
echo "Descrição: " . $fatura->getDescricao() . "\n";
echo "Quantidade: " . $fatura->getQuantidade() . "\n";
echo "Preço por item: $" . $fatura->getPrecoPorItem() . "\n";
echo "Total da fatura: $" . $fatura->getTotalFatura();
?>