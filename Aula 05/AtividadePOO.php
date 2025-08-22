<?php
// Exercicio 1: Crie uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, idade, raça, castrado e sexo.
class Cachorro {
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->raca=$raca;
        $this->castrado=$castrado;
        $this->sexo=$sexo;
    }

}

// Exercicio 2: Após a criação da classe, crie 10 cachorros (10 objetos)
$cachorro1 = new Cachorro("Rex", 5, "Show-show", true, "Macho");
$cachorro2 = new Cachorro("Bob", 7, "Caramelo", false, "Macho");
$cachorro3 = new Cachorro("Valentina", 1, "Poodle", true, "Femea");
$cachorro4 = new Cachorro("Rafael", 12, "Yorkshire", false, "Macho");
$cachorro5 = new Cachorro("Gloria", 9, "Boxer", false, "Femea");
$cachorro6 = new Cachorro("Amora", 12, "Shitzu", false, "Femea");
$cachorro7 = new Cachorro("Luke", 1, "Fox", true, "Macho");
$cachorro8 = new Cachorro("Kiara", 5, "Shitzu", false, "Femea");
$cachorro9 = new Cachorro("Jake", 5, "Lhasa", true, "Macho");
$cachorro10 = new Cachorro("Ana lucia", 11, "Pinscher", false, "Femea");

// Exercício 3:
// Após a conclusão dos exercícios 1 e 2, crie uma classe chamada 'Usuario' com os
// atributos: Nome, CPF, Sexo, Email, Estado civil, Cidade, Estado, Endereco e CEP.

class Usuarios{
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

    public function __construct($nome, $cpf, $sexo, $email, $estado_civil, $cidade, $estado, $endereco, $cep){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estado_civil = $estado_civil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
}

// Exercício 4:
// Crie 3 objetos utilizando a classe do exercício 3, seguindo as seguintes
// informações:
// Usuário 1:
// - Nome: Josenildo Afonso Souza
// - CPF: 100.200.300-40
// - Sexo: Masculino
// - Email: josenewdo.souza@gmail.com
// - Estado civil: Casado
// - Cidade: Xique-Xique
// - Estado: Bahia
// - Endereço: Rua da amizade, 99
// - CEP: 40123-98

// Usuário 2:
// - Nome: Valentina Passos Scherrer
// - CPF: 070.070.060-70
// - Sexo: Feminino
// - Email: scherrer.valen@outlook.com
// - Estado civil: Divorciada
// - Cidade: Iracemápolis
// - Estado: São Paulo
// - Endereço: Avenida da saudade, 1942
// - CEP: 23456-24

// Usuário 3:
// - Nome: Claudio Braz Nepomuceno
// - CPF: 575.575.242-32
// - Sexo: Masculino
// - Email: Clauclau.nepomuceno@gmail.com
// - Estado civil: Solteiro
// - Cidade: Piripiri
// - Estado: Piauí
// - Endereço: Estrada 3, 33
// - CEP: 12345-99

$usuario1 = new Usuarios( "Josenildo Afonso Souza", "100.200.300-40", "Masculino", "josenewdo.souza@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-98");

$usuario2 = new Usuarios( "Valentina Passos Scherrer", "070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24");

$usuario3 = new Usuarios( "Claudio Braz Nepomuceno", "575.575.242-32", "Masculino", "Clauclau.nepomuceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99");

// Exercicio 5:
// Crie um método para a classe 'Cachorro' chamado de 'latir', no qual exibe uma mensagem "O cachorro $nome está latindo!"

// Exercicio 6:
// Crie outro método para a classe 'Cachorro' chamado de 'marcar território', no qual exibe uma mensagem "O cachorro $nome da raça $raca está marcando território".

// Exercicio 7:
// Crie um metodo para a classe 'Usuarios' chamado de 'Testando Reservista' no qual testa se o usuario é homem e caso sim exiba uma mensagem "Apresente seu certificado de reservista do tiro de guerra!", caso não, exiba uma mensagem "Tudo certo".

// Exercicio 8
// Crie um metodo para a classe 'Usuarios' chamado de 'Casamento' que teste se o estado civil é igual a 'Casado' e caso sim exiba a mensagem "Parabens pelo seu casamento de $anos_casado anos!" e caso não, exiba uma mensagem de "Oloco". O valor de anos de casamento será informado na hora de chamar o método para o objeto em específico.