<?php

$convidados = ["Ana Banana", "Bia Costa", "Carla Souza"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) {
    $novoNome = htmlspecialchars($_POST['nome']);
    array_push($convidados, $novoNome);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Lista de Convidados 📝
        </h1>

        <form method="POST" class="flex gap-2 mb-8">
            <input 
                type="text" 
                name="nome" 
                placeholder="Nome do convidado" 
                required
                class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button 
                type="submit" 
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-200"
            >
                Adicionar
            </button>
        </form>

        <ul class="space-y-3">
            <?php foreach ($convidados as $convidado): ?>
                <li class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-blue-500">
                    <span class="text-gray-700 font-medium"><?= $convidado; ?></span>
                    <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full uppercase font-bold">Confirmado</span>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php if (isset($novoNome)): ?>
            <p class="mt-4 text-sm text-center text-green-600 animate-pulse">
                ✓ <?php echo $novoNome; ?> foi adicionado à lista!
            </p>
        <?php endif; ?>
    </div>

</body>
</html>