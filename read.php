<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM cardapio";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                 <tr>
                <td class='text-center'>Id</td>
                <td class='text-center'>Nome</td>
                <td class='text-center'>Quantidade</td>
                <td class='text-center'>Valor</td>            
                <td class='text-center'>Funções</td>                

            </tr>
        ";
        while ($c = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-4'>" . $c['id_prato'] . "</td>
                    <td class='p-4'>" . $c['nome'] . "</td>
                    <td class='p-4'>" . $c['quantidade'] . "</td>
                    <td class='p-4'>" . $c['valor'] . "</td>
                   
                    <td><a class='bg-orange-800 text-white rounded px-4 py-2' href='atualizar.php?id_prato=".$c['id_prato']."'>Atualizar</a><td>
                    <td><a class='bg-orange-800 text-white rounded px-4 py-2' href='deletar.php?id_prato=".$c['id_prato']."'>Deletar</a><td>
                </tr>
            ";
        }

        echo "</table>";
    }