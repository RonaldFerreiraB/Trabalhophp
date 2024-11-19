<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="login.php" method="post" class="h-screen flex items-center justify-center flex-col gap-4">
        <h2 class="text-3xl">Entre como cliente ou admin</h2>
        <input type="text" placeholder="Usuario" name="usuario" class="w-50 border border-1 border-black rounded px-4 py-2">
        <input type="password" name="senha" placeholder="Senha" class="w-50 border border-1 border-black rounded px-4 py-2">
        <button type="submit" class="px-4 py-2 bg-orange-800 text-white font-bold rounded">Entrar</button>
    </form>
</body>
</html>