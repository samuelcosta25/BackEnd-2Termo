<?php

require_once "CRUD.php";
require_once "AlunoDAO.php";

$dao = new AlunoDAO(); // Objeto da classe Aluno DAO para testar métodos CRUD

// CREATE
$dao -> criarAlunos(new Aluno(1, "Josias", "Panificação"));
$dao -> criarAlunos(new Aluno(2, "Victor Hugo", "Manicure"));
$dao -> criarAlunos(new Aluno(3,"Beatriz", "Eletricista"));

// Crie mais 6 objetos:
// Id - Nome -  Curso
// 4 - Aurora - Arquitetura
// 5 - Oliver - Gestão
// 6 - Amanda - Luta
// 7 - Geysa - Engenharia
// 8 - Joab - Eletrica
// 9 - Miguel - Streamer 

// READ
echo "\nListagem inicial:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

// UPDATE
$dao->atualizarAlunos(1, "Jozias", "Técnico em Borracharia");
// Faça as seguintes atualizações:
// - Alterar nome da Geysa para Clotilde
// - Alterar nome do Joab para Joana (operou)
// - Alterar curso do Miguel para Designer
// - Alterar curso da Amanda para Logistica
// - Alterar curso do Oliver para Eletrica


echo "\n Após atualização: ";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

// DELETE
$dao->excluirAlunos(1); // Excluindo objeto --> id=1

// Exclua a Clotilde e a Aurora

echo "\n Após exclusão: ";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

// Ao final execute o código e chame o professor.