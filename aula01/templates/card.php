<?php

$usuario = [
    "nome" => "Ana",    
    "cargo" => "Desenvolvedora Fullstack",
    "status"=> "Online",
];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema PHP</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-900 h-screen flex items-center justify-center">
        <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
             <?= mb_substr($usuario['nome'], 0, 1) ?> 
        </div>

         <div>
            <h2 class="text-white text-xl font-semibold"><?= $usuario['nome'] ?></h2>
            <p class="text-slate-400 text-sm"><?= $usuario['cargo'] ?></p>
            
            <div class="flex items-center gap-2 mt-2">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span class="text-green-500 text-xs font-bold uppercase"><?= $usuario['status'] ?></span>
            </div>
        </div>
    </div>
    </body>
</html>