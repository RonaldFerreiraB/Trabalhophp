<?php

include "conexao.php";

$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];


$sql = mysqli_query($conn, "INSERT INTO cardapio(nome, quantidade, valor) VALUES ('$nome', '$quantidade', '$valor')");

if($sql){
    header("Location: cardapio.php");
}