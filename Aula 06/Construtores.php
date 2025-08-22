<?php
class Produtos{
    // Atributos
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    // Criando construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }
// Métodos
    public function produto_vendido($qtde_vendida){
        $this->qtde_estoque -= $qtde_vendida;
        return $this->qtde_estoque;
    }
}

// Criando objetos sem a existencia de um construtor
$bolacha1 = new Produtos();
$bolacha1 -> nome = "Nikito";
$bolacha1 -> categoria = "Doces";
$bolacha1 -> fornecedor = "Vitarella";
$bolacha1 -> qtde_estoque = 220;

$feijao1 = new Produtos();
$feijao1 -> nome = "Oliron";
$feijao1 -> categoria = "Mantimentos";
$feijao1 -> fornecedor = "Reserva nobre";
$feijao1 -> qtde_estoque = 123;

// Criando objetos com a existencia de um construtor
$bolacha1 = new Produtos("Nikito", "Doces", "Vitarella", 220);

$feijao1 = new Produtos("Oliron", "Mantimentos", "Reserva nobre", 123);