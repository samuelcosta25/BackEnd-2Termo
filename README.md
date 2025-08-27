# BackEnd-2Termo


<?php
// Classe Carro com atributos e métodos
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    // Construtor para inicializar o objeto
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
   

    // Método para exibir as informações do carro
    public function exibirInfo() {
        echo "Marca: $this->marca - Modelo: $this->modelo - Ano: $this->ano\n";
    }

    // Método para ligar o carro
    public function ligar() {
        echo "O carro $this->modelo está ligado!\n";
    }

    // Criando objetos (instâncias da classe Carro)
$carro1 = new Carro("Toyota", "Corolla", 2020);
$carro2 = new Carro("Honda", "Civic", 2019);

// Usando os métodos
$carro1->exibirInfo();
$carro1->ligar();

$carro2->exibirInfo();
$carro2->ligar();
?>
}
