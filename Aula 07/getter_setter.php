<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    // Crie o construtor para a classe Pessoa.
    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }

    //Getter e Setter para $nome
    public function setNome($nome){ // Setter Nome
        $this->nome= ucwords(strtolower($nome));
    }

    public function getNome(){ // Getter Nome
        return $this->nome;
    }

    //Getter e Setter para $cpf
    public function setCpf($cpf){ // Setter CPF
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    // Getter
    public function getCpf(){
        return $this->cpf;
    }

    //Getter e Setter para $telefone
    public function setTelefone($telefone){ // Setter telefone
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }

    public function getTelefone(){
        return $this->telefone;
    }

    //Getter e Setter para idade
    public function setIdade($idade){ // Setter idade 
        $this->idade = abs((int)$idade);
    }

    public function getIdade(){
        return $this->idade;
    }

    public function exibirInfo(){
        return " Nome do aluno: $this->nome\n CPF: $this->cpf\n Telefone: $this->telefone\n Idade: $this->idade\n Email: $this->email\n Senha: $this->senha";
    }
}


$aluno1 = new Pessoa("sAmUEl cOSta SAntoS", "123.456.789-10", "(19)98813-1234", -25, "teste@teste.com", "teste123");

echo $aluno1 -> exibirInfo();