<?php
// ================== Variáveis ==================
$modelo_carro1 = "Versa";
$marca_carro1 = "Nissan";
$ano_carro1 = 2020;
$revisao_carro1 = true;
$Ndonos_carro1 = 2;

$modelo_carro2 = "M5";
$marca_carro2 = "BMW";
$ano_carro2 = 2018;
$revisao_carro2 = false;
$Ndonos_carro2 = 2;

$modelo_carro3 = "911";
$marca_carro3 = "Porsche";
$ano_carro3 = 2026;
$revisao_carro3 = false;
$Ndonos_carro3 = 1;

$modelo_carro4 = "Dolphin";
$marca_carro4 = "BYD";
$ano_carro4 = 2023;
$revisao_carro4 = true;
$Ndonos_carro4 = 1;

// ================== Funções ==================

// Exercício 1 - Exibir dados do carro
function exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) {
    $rev = $revisao ? "Sim" : "Não";
    if ($revisao = true) {
        $rev = "Sim";
    } else {
        $rev = "Não";
    }
    echo "O veículo $marca $modelo, ano $ano, já teve passagem por revisão? $rev. E teve um total de $Ndonos donos. \n";
}

// Exercício 2 - Verificar se é seminovo
function Seminovo($modelo, $ano) {
    $anoAtual = date("Y");
    if (($anoAtual - $ano) <= 3 ){
       echo "O veículo $modelo é seminovo\n";
    } else {
        echo "O veículo $modelo não é seminovo\n";
    }
}

// Exercício 3 - Verificar necessidade de revisão
function precisaRevisao($modelo, $revisao, $ano) {
    if ($revisao = false && $ano < 2022) {
        echo "$modelo: Precisa de revisão\n";
    } else {
        echo "$modelo: Revisão em dia\n";
    }
}

// Exercício 4 - Calcular valor estimado
function calcularValor($modelo, $marca, $ano, $Ndonos) {
    $base = 0;
    switch (strtolower($marca)) {
        case "bmw":
        case "porsche":
            $base = 300000; 
            break;
        case "nissan":
            $base = 70000; 
            break;
        case "byd":
            $base = 150000; 
            break;
        default:
            $base = 50000;
    }
    $anoAtual = date("Y");
    $anosUso = $anoAtual - $ano;
    if ($anosUso > 0) {
        $base -= ($anosUso * 3000);
    }
    if ($Ndonos > 1) {
        $base -= $base * (0.05 * ($Ndonos - 1));
    }
    echo "O carro $marca $modelo está avaliado em R$ " . number_format($base, 2, ",", ".") . "\n";
}

// ================== Chamadas ==================
echo "Exercício 1 - Exibir dados do carro\n";
exibirCarro($modelo_carro1, $marca_carro1, $ano_carro1, $revisao_carro1, $Ndonos_carro1); // Exibir carro 1
exibirCarro($modelo_carro2, $marca_carro2, $ano_carro2, $revisao_carro2, $Ndonos_carro2); // Exibir carro 2
exibirCarro($modelo_carro3, $marca_carro3, $ano_carro3, $revisao_carro3, $Ndonos_carro3); // Exibir carro 3 
exibirCarro($modelo_carro4, $marca_carro4, $ano_carro4, $revisao_carro4, $Ndonos_carro4); // Exibir carro 4

echo "\nExercício 2 - Verificar se é seminovo\n";
Seminovo($modelo_carro1, $ano_carro1); // Verificar se o carro 1 é seminovo
Seminovo($modelo_carro2, $ano_carro2); // Verificar se o carro 2 é seminovo
Seminovo($modelo_carro3, $ano_carro3); // Verificar se o carro 3 é seminovo
Seminovo($modelo_carro4, $ano_carro4); // Verificar se o carro 4 é seminovo

echo "\nExercício 3 - Verificar necessidade de revisão\n";
precisaRevisao($modelo_carro1, $revisao_carro1, $ano_carro1); // Verificar se o carro 1 precisa de revisão
precisaRevisao($modelo_carro2, $revisao_carro2, $ano_carro2); // Verificar se o carro 2 precisa de revisão
precisaRevisao($modelo_carro3, $revisao_carro3, $ano_carro3); // Verificar se o carro 3 precisa de revisão
precisaRevisao($modelo_carro4, $revisao_carro4, $ano_carro4); // Verificar se o carro 4 precisa de revisão

echo "\nExercício 4 - Calcular valores estimados\n";
calcularValor($modelo_carro1, $marca_carro1, $ano_carro1, $Ndonos_carro1); // Verificar valor estimado do carro 1
calcularValor($modelo_carro2, $marca_carro2, $ano_carro2, $Ndonos_carro2); // Verificar valor estimado do carro 2
calcularValor($modelo_carro3, $marca_carro3, $ano_carro3, $Ndonos_carro3); // Verificar valor estimado do carro 3
calcularValor($modelo_carro4, $marca_carro4, $ano_carro4, $Ndonos_carro4); // Verificar valor estimado do carro 4
?>
