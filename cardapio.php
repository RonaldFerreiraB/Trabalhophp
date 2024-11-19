<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full p-6 flex items-center justify-between bg-orange-800">
        <h2 class="text-2xl text-white font-bold">Painel do admin - Cadastrar Cardapio</h2>
        <a href="cadastrarCardapio.php">
            <button class="bg-white text-orange-800 font-bold rounded px-4 py-2">Sair</button>
        </a>
    </div>

    <div class="w-full mt-8 flex items-center justify-center">
        <h2>Cardápio</h2>
    </div>
    <br>
    <div class="w-full mt-8 flex items-center justify-center">
<?php
    include 'read.php';
?>
</div>
</body>
</html>