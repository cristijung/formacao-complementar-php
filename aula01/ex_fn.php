<?php

$produtos = [
    ['nome' => 'Teclado', 'preco' => 1250],
    ['nome' => 'Monitor', 'preco' => 1200],
    ['nome' => 'Mouse', 'preco' => 80],
    ['nome' => 'Notebook', 'preco' => 4500],
];

// array_filter: mantém apenas os itens que retornam TRUE na função
$caros = array_filter($produtos, fn($p) => $p['preco'] > 1000);

// array_map: cria um novo array transformando os valores
// vamos extrair apenas os nomes e colocá-los em maiúsculas
$nomesCaros = array_map(fn($p) => strtoupper($p['nome']), $caros);

print_r($nomesCaros);
/* saída:
Array (
    [1] => MONITOR
    [3] => NOTEBOOK
)
*/

