<?php

// Modificadores de acesso:
// Existem 3 tipos: Public, Private e Protected
// Public NomeDoAtributo: métodos e atributos públicos

// Private NomeDoAtributo: métodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

// Protected NomeDoAtributo: métodos e atributos protegidos para acesso somente da classes e de suas classes filhas.

// Pacotes: sintaxe logo no início do código, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido. Exemplo:

// namespace Aula 09;

//Caso tenham mais arquivos que formam o BackEnd de uma página WEB e possuem a mesma raiz, o namespace será o mesmo.

namespace Aula_09;

interface Pagamento { // Interface de contrato de pagamento
    public function pagar($valor);
}
class CartaoDeCredito implements Pagamento {
    public function pagar($valor){
        echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
    }
}

class PIX implements Pagamento {
    public function pagar($valor){
        echo "Pagamento realizado via PIX, valor: $valor\n";
    }
}

// 1. Criando uma interface simples

// Crie uma interface chamada Forma que obrigue qualquer classe a ter um método calcularArea().
// Depois, crie as classes Quadrado e Circulo que implementam a interface.
interface Forma {
    public function CalcularArea($valor, $valor2);
}
// Quadrado deve receber o lado e calcular a área.
class Quadrado implements Forma{
    public function CalcularArea($lado, $a){
        $area = $lado*$lado;
        return $area;
    }
}
// Circulo deve receber o raio e calcular a área.
class Circulo implements Forma {
    public function CalcularArea($raio, $a){
        $area = pi()*($raio*$raio);
        return $area;
    }
}
$square = new Quadrado ();
$circle = new Circulo();

echo "\nÁrea do Quadrado: ".$square->CalcularArea(readline("\nDigite a medida do lado do quadrado: "));

echo "\nÁrea do Círculo: ".$circle->CalcularArea(readline("\nDigite a medida do raio do círculo: "));

// Crie a classe Pentagono, e calcule a área do mesmo.

class Pentagono implements Forma {
    public function CalcularArea($lado, $apotema){
        $area = (($lado*5)*$apotema)/2;
    }
}

$pent = new Pentagono();

echo "\nÁrea do Pentágono: ".$pent->CalcularArea(readline("\nDigite a medida do lado do pentágono: "), readline("\nDigite a medida da apotema do pentágono: "));