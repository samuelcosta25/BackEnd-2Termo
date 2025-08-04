<?php
/*Desenvolva um código com a mesma estrutura que o
abaixo, porem com os seus dados.*/

    echo"Olá! \n";
    $nome ="Samuel! \n";
    $idade ="25";
    $ano_atual = "2025";

    $data_nasc= $ano_atual-$idade;
    echo $nome, "você nasceu em:", $data_nasc;

/* 2. Dado uma frase “Programação em php.” transformá‐la em maiúscula, imprima, 
depois em minúscula e imprima de novo. */
    $exerc2= "Programação em php";
    echo "\nMinúsculo: ", $exerc2;
    $exerc2= strtoupper($exerc2);
    echo "\nMaiúsculo: ", $exerc2;
    $exerc2= strtolower($exerc2);
    echo "\nMinúsculo novamente: ", $exerc2;

/* 3. Numa dada frase “O PHP foi criado em mil novecentos e noventa e cinco”.
- Trocar o “O” (letra) por “0”(zero), o “a” por “4” e o “i” por “1”. */
    $exerc3 = "O PHP foi criado em mil novecentos e noventa e cinco";
    echo "\nAntes do comando replace: \n", $exerc3;
    $exerc3 = str_replace(['o','a','i'], ['0','4','1'], $exerc3);
    echo "\nApós o comando replace: \n", $exerc3;
?>