<?php

// Expressões Elementares --> Literais e Variáveis
$a = 5;       // "5" é uma expressão literal. $a agora vale 5.
$b = $a;      // "$a" é uma expressão que resulta em 5. $b agora vale 5.

// Expressões de Operação
// ($a + 10) é uma expressão que resulta em 15.
$c = $a + 10; 

// Expressões de Comparação
// ($c > $b) é uma expressão que resulta em um valor booleano (true).
$e_maior = ($c > $b); 

// Expressões de Chamada de Função
// a função rand() é uma expressão que resulta em um número aleatório.
$numero_sorte = rand(1, 100);

// Atribuição como Expressão
// no PHP, a própria atribuição ($d = 20) resulta no valor atribuído.
// abaixo, $f recebe o resultado da expressão ($d = 20), que é 20.
$f = ($d = 20);

// exibindo os resultados
echo "Valor de A: $a \n";
echo "Valor de B: $b \n";
echo "Valor de C: $c \n";
echo "D é maior que B? " . ($e_maior ? 'Sim' : 'Não') . "\n";
echo "Valor de F: $f \n";
?>

