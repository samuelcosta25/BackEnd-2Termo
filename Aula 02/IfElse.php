<?php
/*  Exercicio 4: Crie um algoritmo que calcule a média entre 2 notas e fale se o aluno foi aprovado ou reprovado. Considere a média 7 como nota de corte. */

$nome = "Enzo Enrico";
$nota1 = 2;
$nota2 = 4;
$presenca = 20; // Presença em porcentagem
$media = ($nota1 + $nota2) / 2;

if (($media >= 7 && $presenca >= 75) || $nome == "Enzo Enrico") {
    echo "Aluno aprovado com média: $media e presença: $presenca%";
} else {
    echo "Aluno reprovado com média: $media";
}

// Caso o aluno tenha o nome "Enzo Enrico", ele será aprovado independente da média e presença. Crie uma variavel $nome.

?>
