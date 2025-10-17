<?php

require_once "CRUD.php";
require_once "AlunoDAO.php";

// Objeto da classe AlunoDAO para gerenciar os métodos do CRUD
$dao = new AlunoDAO();

// CREATE
$dao-> criarAluno(new Aluno(1, "Maria", "Design"));
$dao->criarAluno(new Aluno(2, "Gabriel", "Moda"));
$dao->criarAluno(new Aluno(3, "Eduardo", "Manicure"));
// Crie mais 6 objetos obedecendo a seguinte lista:
// Id - Nome -  Curso
// 4 - Aurora - Arquitetura
// 5 - Oliver - CEO
// 6 - Amanda - Luta
// 7 - Geysa - Engenharia
// 8 - Joab - Eletrica
// 9 - Bernardo - Streamer

// READ
echo "Listagem Inicial:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// UPDATE
$dao->atualizarAluno(3, "Viviane", "Eletricista");
// Faça as seguintes atualizações:
// - Alterar nome da Geysa para Clotilde
// - Alterar nome do Joab para Joana
// - Alterar curso do Bernardo para Dev
// - Alterar curso da Amanda para Logistica
// - Alterar curso do Oliver para Eletrica

echo "\nApós Atualização:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// DELETE
$dao->excluirAluno(2);
// Exclua a Clotilde e a Aurora

echo "\nApós exclusão:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}
