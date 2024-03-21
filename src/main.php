<?php

require_once 'Car.php';
require_once 'DadosUsuario.php';

$choice;

$carro1 = new Car("Gol", "2005", 20500, 6);
$carro2 = new Car("Duster", "2019", 70000, 3);
$carro3 = new Car("Montana", "2020", 75000, 10);

while (!$choice){
    echo "Marques Automóveis" . PHP_EOL;

    echo "Digite o nome, cpf e renda anual do usuário: ";
    $userName = fgets(STDIN);
    $ssh =  fgets(STDIN);
    $annualIncome = fgets(STDIN);
    
    $totalUserData = new DadosUsuario($userName, $ssh, $annualIncome);
    
    
    echo "Escolha o carro de sua preferência: " . PHP_EOL;

    $carro1->apresentarCarro();
    $carro2->apresentarCarro();
    $carro3->apresentarCarro();

    $choice = fgets(STDIN);
    if ($choice == "Gol"){
     $totalUserData->buyCarPossible(20500, $choice);
    } else if ($choice == "Duster"){
        $totalUserData->buyCarPossible(70000, $choice);
    } else {
        $totalUserData->buyCarPossible(75000, $choice);
    }
}



