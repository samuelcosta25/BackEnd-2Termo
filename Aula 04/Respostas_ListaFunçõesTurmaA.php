<?php
//Base de dados:
$marca_carro1="Honda";
$modelo_carro1="Civic";
$ano_carro1=2016;
$revisao_carro1=true;
$Ndonos_carro1=2;

$marca_carro2="BMW";
$modelo_carro2="320i";
$ano_carro2=2012;
$revisao_carro2=false;
$Ndonos_carro2=3;


$marca_carro3="Fiat";
$modelo_carro3="Uno";
$ano_carro3=2005;
$revisao_carro3=false;
$Ndonos_carro3=1;

$marca_carro4="Volkswagen";
$modelo_carro4="Jetta";
$ano_carro4=2020;
$revisao_carro4=true;
$Ndonos_carro4=7;

//  Exercicio 1:
//  Crie uma função exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) que receba como
//  parâmetros os dados de um carro e exiba uma mensagem no seguinte formato:
//  O carro Nissan Versa, ano 2020, já passou por revisão: Sim, número de donos: 2 

// Criando função:
function exibirCarro($modelo, $marca, $ano, $revisao, $donos){ 
    if ($revisao==true){
        $revisao="Sim, carro revisado!";
    } else {
        $revisao="Não, carro precisa de revisão!";
    }
    echo "O carro $modelo $marca, ano $ano. Já passou por revisão: $revisao, número de donos: $donos.\n";
}
// Chamando função:
echo "Exercicio 1: \n";
exibirCarro($marca_carro1, $modelo_carro1, $ano_carro1, $revisao_carro1, $Ndonos_carro1); // Exibindo informações do carro 1
exibirCarro($marca_carro2, $modelo_carro2, $ano_carro2, $revisao_carro2, $Ndonos_carro2); // Exibindo informações do carro 2
exibirCarro($marca_carro3, $modelo_carro3, $ano_carro3, $revisao_carro3, $Ndonos_carro3); // Exibindo informações do carro 3
exibirCarro($marca_carro4, $modelo_carro4, $ano_carro4, $revisao_carro4, $Ndonos_carro4); // Exibindo informações do carro 4

// Exercicio 2: Crie uma função ehSeminovo($ano) que receba o ano de fabricação e retorne true se o
// carro tiver até 3 anos de uso e false caso contrário.
// Teste a função com os carros fornecidos.

//Criando função:
function ehSeminovo($marca, $modelo, $ano){
    $anoAtual=date("Y");
    $anosDeUso= $anoAtual - $ano;
    if ($anosDeUso<3){
        echo "O veículo $marca $modelo, é seminovo! Com $anosDeUso de uso.\n";
    } else {
        echo "O veículo $marca $modelo, não é seminovo! Com $anosDeUso de uso.\n";
    }
}

// Chamando a função:
echo "\nExercicio 2:\n";
ehSeminovo($marca_carro1, $modelo_carro1, $ano_carro1); // Testando carro 1
ehSeminovo($marca_carro2, $modelo_carro2, $ano_carro2); // Testando carro 2
ehSeminovo($marca_carro3, $modelo_carro3, $ano_carro3); // Testando carro 3
ehSeminovo($marca_carro4, $modelo_carro4, $ano_carro4); // Testando carro 4

// Exercicio 3
// Crie uma função precisaRevisao($revisao, $ano) que retorne "Precisa de revisão" se $revisao
// for false e o carro for anterior a 2022. Caso contrário, retorne "Revisão em dia".

// Criando a função:
function precisaRevisao($revisao, $ano, $marca, $modelo){
    if ($revisao==false && $ano <2022){
        echo "O veículo $marca $modelo, Precisa de revisão!\n";
    } else {
        echo "O veículo $marca $modelo, Não recisa de revisão!\n";
    }
}

// Chamando a função
echo "\nExercicio 3\n";
precisaRevisao($revisao_carro1, $ano_carro1, $marca_carro1, $modelo_carro1); // Exibindo carro 1
precisaRevisao($revisao_carro2, $ano_carro2, $marca_carro2, $modelo_carro2); // Exibindo carro 2
precisaRevisao($revisao_carro3, $ano_carro3, $marca_carro3, $modelo_carro3); // Exibindo carro 3
precisaRevisao($revisao_carro4, $ano_carro4, $marca_carro4, $modelo_carro4); // Exibindo carro 4
?>