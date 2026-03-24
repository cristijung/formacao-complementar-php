<?php

require_once 'Conta.php';
class ContaPoupanca extends Conta {
    private float $taxaRedimento = 0.05;

    public function aplicarRendimento(): void {
        echo "Aplicando rendimento para: " . $this->titular . "...\n";
        $rendimento = $this->recuperarSaldo() * $this->taxaRedimento;
        $this->adicionarSaldo($rendimento);
       
    }
}

// teste da classe e atributos
$minhaPoupanca = new ContaPoupanca("Ana Banana", 1000.00);
$minhaPoupanca->aplicarRendimento();
echo "Saldo Atual: " . $minhaPoupanca->getSaldoFormatado();