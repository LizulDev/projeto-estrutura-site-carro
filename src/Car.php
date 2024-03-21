<?php

class Car{

    public $modelo;
    public $ano;
    public $valor;
    public $nivelDeCombustivel;

    

    public function __construct($modelo, $ano, $valor, $nivelDeCombustivel) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->valor = $valor;
        $this->nivelDeCombustivel = $nivelDeCombustivel;
    }


    public function apresentarCarro(){
        print("Modelo: $this->modelo" . PHP_EOL . "Ano: $this->ano" . PHP_EOL . "Valor: R$ $this->valor,00" . PHP_EOL);
    }

    public function nivelDeCombustivel() {
        if($this->nivelDeCombustivel < 5) {
            print("O nivel de combustivel está muito baixo" . PHP_EOL);
        } else if ($this->nivelDeCombustivel >= 5) {
            print("O nivel de combustível está aceitável" . PHP_EOL);
        }
    }

}