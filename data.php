<?php
require_once 'conexao.php';
$stmt = $conn->prepare('select * from cardapio'); //consulta responsável por preencher os gráficos
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>