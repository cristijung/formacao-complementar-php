<?php

class Conta {
    protected string $titular;
    private float $saldo; 

    public function __construct(string $titular, float $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
   
    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public function getSaldoFormatado(): string {
        return "R$ " . number_format($this->saldo, 2,",",".");
    }

    public function adicionarSaldo(float $valor): void {
        $this->saldo += $valor;
    }
    
}