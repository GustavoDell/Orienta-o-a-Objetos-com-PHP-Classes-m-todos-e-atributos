<?php

class Conta{

    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        
        self::$numeroDeContas++; //Esse atributo é acessado pelo nome da class por ele ser statico, também pode ser acessado pelo nome reservado self
    }

    public function __destruct()
    {

        self::$numeroDeContas--;
    }

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

   

    public function recuperaSaldo(): float //oque será retornado pela function
    {
        return $this->saldo;
    }
    
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}