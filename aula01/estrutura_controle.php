<?php
// ex IF
$nota = 8;
if ($nota >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}

// ex com MATCH --> PHP 8
$status = match(true) {
    $nota >= 7 => "Aprovado",
    default => "Reprovado",    
};

// ------------------------
$frutas = ["Maçã", "Banana", "Uva"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta | ";
}

// ------------------------
// ex com require
// garante q as configs sejam carregadas somente 1x
// require_once "config.php";
// include "header.php";
// include "menu.php"; // mas ainda não existe

// echo "O site continua rodando ...";

echo "-------------------- \n";
// funções
function saudar($nome) {
    return "Olá, $nome!";
}
echo saudar("Ana Banana");

echo "-------------------- \n";
function criarUsuario(string $nome, int $idade = 18) {
    return "Usuário: $nome, Idade: $idade";
}

echo criarUsuario("Pafúncio");
echo criarUsuario("Beto", 25);

echo "-------------------- \n";
// fn anonima
$multiplicar = function($a, $b) {
    return $a * $b;    
};

// arrowfn
$dobro = fn($n) => $n * 2;
echo $dobro(12);

echo "-------------------- \n";
// fn strlen
$fnStrlen = strlen(...);  // cria uma ref à fun nativa strçen
echo $fnStrlen("Teste");

// após o uso do '...' a variável se torna a propria função
// podemos usar:
// 1. chamada direta --> usa o nome da var seguido de () passando os 
// valores q a fn exige
$texto = "Desenvolvimento de PHP";
$tamanho = $fnStrlen($texto);
echo "O texto tem $tamanho caracteres.";
echo "-------------------- \n";
// 2. passando p outras fns --> é qdo precisamos passar uma
// uma função como instrução para outra.

$palavras = ["Oi","PHP","CSS","HTML","Javascript","Typescript"];
$contar = strlen(...);

$longas = array_filter($palavras, function($p) use ($contar) {
    return $contar($p) >= 4;
});

print_r($longas);

// 3. em verificações de condicionais --> podemos usae a var dentro de um if
// para validar se uma senha é de tamanho adequado

echo "-------------------- \n";
$senha = "12345";
$validador = strlen(...);

if ($validador < 6) {
    echo "Erro! A senha é muito curta! A senha deve ter no mínimo 6 caracteres!";
}