<?php

class Carro {
    public string $marca;
    public function Ligar() {
        return "O carro está ligado!";
    }
}

$meuCarro = new Carro(); // criando o objeto
$meuCarro -> marca = "Porsche";
echo $meuCarro -> Ligar();