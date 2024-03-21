<?php


class DadosUsuario {
    
    private $name;
    private $ssn;
    private $annualIncome;

    public function __construct($name, $ssn, $annualIncome ) {
        $this->name = $name;
        $this->ssn = $ssn;
        $this->annualIncome = $annualIncome;
    }

    public function userData(){
        print("Nome: $this->name" . PHP_EOL . "CPF: $this->ssn" . PHP_EOL . "Receita Anual: $this->annualIncome" . PHP_EOL);
    }
    
    public function buyCarPossible($carValue, $carModel){
        if ($carValue < $this->annualIncome){
            print("Usuário de nome $this->name pode comprar o carro do modelo $carModel" . PHP_EOL);
        } else {
            print("Usuário de nome $this->name não pode comprar o carro do modelo $carModel" . PHP_EOL);
        }
    }
}