<?php 
include 'conexao.php';
$id = $_GET["id_prato"];

if(isset($_GET['id_prato'])){
    $sqlDelete = mysqli_query($conn, "DELETE FROM cardapio WHERE id_prato = {$id}")
    or die (mysqli_error($conn));

    header('location: cardapio.php');
}
?>