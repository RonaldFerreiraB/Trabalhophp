<?php
      include 'conexao.php';

    if(isset($_GET['id_prato'])){
        $id = $_GET['id_prato'];
        $sql = mysqli_query($conn, "SELECT * FROM cardapio  WHERE id_prato = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $quantidade = $n['quantidade'];
            $valor = $n['valor'];
                       
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET["id_prato"];
        $nome = $_POST["nome"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];
       
        

        $queryUpdate = "UPDATE cardapio SET nome = '$nome', quantidade = '$quantidade', valor = '$valor' WHERE id_prato = $id";
        $consulta = mysqli_query($conn, $queryUpdate);
        header('location: cardapio.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cardápio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full p-6 flex items-center justify-between bg-orange-800">
        <h2 class="text-2xl text-white font-bold">Painel do admin - Atualizar Cardapio</h2>
        <a href="sair.php">
            <button class="bg-white text-orange-800 font-bold rounded px-4 py-2">Sair</button>
        </a>
    </div>

    <div class="w-full flex items-center justify-between p-8">
        <div>
            <form  method="post" class="flex flex-col gap-4 items-center justify-center">
                <h2 class="text-2xl">Cadastrar</h2>
                <input type="text" name="nome" class="px-4 py-2 border border-1 border-black rounded" placeholder="Nome do prato">
                <input type="text" name="quantidade" class="px-4 py-2 border border-1 border-black rounded" placeholder="Para quantas pessoas?">
                <input type="text" name="valor" class="px-4 py-2 border border-1 border-black rounded" placeholder="Valor">
                <button name="update" class="bg-orange-800 text-white font-bold rounded px-4 py-2" type="submit">Cadastrar</button>
            </form>
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>