<?php

class Conta{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar): void
    {

        if($valorASacar > $this->saldo){
            echo "Saldo indisponivel";
            return;
        }

        $this->saldo -= $valorASacar;
        
    }

    public function deposita(float $valorADepositar): void 
    {


        if($valorADepositar < 0){
            echo "Valor precisa seer positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
        
    }

    public function transfere(float $valorATransferir, Conta $ContaDestino): void 
    {
         // Usando conceito de eveitar ao maximo de usar else{} em uma condição;
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return; //(tecnica Early Return) como metodo não tem return, se usar o return sem nada o metodo irá para de execultar e sair do metodo e assim é possivel parar de usar else{}.
        }
       
        $this->sacar($valorATransferir);
        $ContaDestino->depositar($valorATransferir);
    }

    public function recuperaCPFTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaSaldo(): float //oque será retornado pela function
    {
        return $this->saldo;
    }

    public function defineCPFTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
}