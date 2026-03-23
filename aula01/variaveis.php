<?php
// var de string
$nome_projeto = "Natureza no Prato";
$desevovedores = "Cristina";
$Desenvolvedores = "Bruno";

// var de números
$versao = 1.0;
$total_arquivos = 12;
var_dump($total_arquivos);

// var de estados -- booleanos
$esta_online = true;
$erro_srv = false;

// lista - Arrays
$tecnologias = ["PHP", "HTML", "tailwind"];
var_dump($tecnologias); // é tipo um debug de var
// mostra o tipo, o tamanho e cada item da lista de forma detalhada

// exibindo os dados
echo "Projeto: ". $nome_projeto. "\n";
echo "Criado por:  $desevovedores \n"; 
echo "Versão atual: ". $versao."\n";

// ex de operação simples
$proxima_versao = $versao + 0.1;
echo "Em breve: Versão " . $proxima_versao;

?>