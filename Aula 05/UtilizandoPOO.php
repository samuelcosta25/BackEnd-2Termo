<?php
class Carro { // Criando classe (molde para criação de objetos)
    public $marca; // Criando atributo marca
    public $modelo; // Criando atributo modelo
    public $ano; // Criando atributo ano
    public $revisao; // Criando atributo revisao
    public $N_Donos; // Criando atributo N° de donos

    // Criando construtor da classe, para associação dos atributos corretamente de cada objeto
    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
    }   

     // Método para exibir as informações do carro
    public function exibirInfo() {
        echo "Marca: $this->marca - Modelo: $this->modelo - Ano: $this->ano\n";
    }

    // Método para ligar o carro
    public function ligar() {
        echo "O carro $this->modelo está ligado!\n";
    }
}

$carro1 = new Carro("Porsche", "911", 2020, false, 3); // Criando objeto 1
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1); // Criando objeto 2

// Exercicio: Crie mais 4 novos objetos para a classe Carro.
$carro3 = new Carro ("Chevrolet", "Impala", 1967, true, 2);// Criando objeto 3
$carro4 = new Carro ("Ford", "Mustang", 1970, false, 6);// Criando objeto 4
$carro5 = new Carro ("Mazda", "RX8", 2005, true, 2);// Criando objeto 5
$carro6 = new Carro ("CAOA Cherry", "Tiggo", "2022", true, 1);// Criando objeto 6

?>