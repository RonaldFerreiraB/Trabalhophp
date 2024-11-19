<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full p-6 flex items-center justify-between bg-orange-800">
        <h2 class="text-2xl text-white font-bold">Painel do admin - Cadastrar Cardapio</h2>
        <a href="sair.php">
            <button class="bg-white text-orange-800 font-bold rounded px-4 py-2">Sair</button>
        </a>
    </div>

    <div class="w-full flex items-center justify-between p-8">
        <div>
            <form action="salvar.php" method="post" class="flex flex-col gap-4 items-center justify-center">
                <h2 class="text-2xl">Cadastrar</h2>
                <input type="text" name="nome" class="px-4 py-2 border border-1 border-black rounded" placeholder="Nome do prato">
                <input type="text" name="quantidade" class="px-4 py-2 border border-1 border-black rounded" placeholder="Para quantas pessoas?">
                <input type="text" name="valor" class="px-4 py-2 border border-1 border-black rounded" placeholder="Valor">
                <button class="bg-orange-800 text-white font-bold rounded px-4 py-2" type="submit">Cadastrar</button>
            </form>
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>