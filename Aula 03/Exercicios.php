<?php


## **1. Verificação de Idade**

// Para tornar alguma frase em comentário: Ctrl + ;

$idade = (int) readline("Digite sua idade: ");

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}



//  Uso direto de `if...else` para separar dois casos possíveis.



## **2. Classificação de Nota**



$nota = (float) readline("Digite a nota (0 a 10): ");

if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Bom";
} else {
    echo "Reprovado";
}



//  `elseif` permite múltiplas verificações sem repetir `if`.



## **3. Dia da Semana**



$numero = (int) readline("Digite um número de 1 a 7: ");

switch ($numero) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Número inválido";
}



//  `switch...case` evita vários `if` para comparar valores fixos.



## **4. Calculadora Simples**



$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");
$op = readline("Digite a operação (+, -, *, /): ");

switch ($op) {
    case '+':
        echo "Resultado: " . ($num1 + $num2);
        break;
    case '-':
        echo "Resultado: " . ($num1 - $num2);
        break;
    case '*':
        echo "Resultado: " . ($num1 * $num2);
        break;
    case '/':
        if ($num2 != 0) {
            echo "Resultado: " . ($num1 / $num2);
        } else {
            echo "Erro: divisão por zero.";
        }
        break;
    default:
        echo "Operação inválida.";
}



//  Sempre tratar divisão por zero para evitar erros.



## **5. Contagem Progressiva**



for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}



//  `for` simples contando de 1 até 10.



## **6. Contagem Regressiva**



$inicio = (int) readline("Digite o número inicial: ");

for ($i = $inicio; $i >= 1; $i--) {
    echo $i . "\n";
}



//  A inicialização e o decremento controlam a contagem decrescente.



## **7. Números Pares**



$final = (int) readline("Digite o número final: ");

for ($i = 0; $i <= $final; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}



//  Uso do operador `%` para verificar se o número é par.



## **8. Tabuada**



$num = (int) readline("Digite um número para a tabuada: ");

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "\n";
}



//  Loop multiplicando `num` de 1 a 10.



## **9. Classificação de Temperatura**



$temp = (float) readline("Digite a temperatura em °C: ");

if ($temp < 15) {
    echo "Frio";
} elseif ($temp <= 25) {
    echo "Agradável";
} else {
    echo "Quente";
}



//  Intervalos definidos usando `<=` para evitar sobreposição.



## **10. Menu Interativo**



for ($i = 1; $i <= 5; $i++) {
    echo "\n--- Menu ---\n";
    echo "1 - Olá\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Olá, usuário!\n";
            break;
        case 2:
            echo "Data atual: " . date("d/m/Y") . "\n";
            break;
        case 3:
            echo "Saindo...\n";
            exit; // encerra o script
        default:
            echo "Opção inválida.\n";
    }
}

// 

// // 

// // * `exit` encerra imediatamente o programa quando a opção 3 é escolhida.
// // * O `for` limita a execução a 5 tentativas.

// ---
?>