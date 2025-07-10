<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeProduto = $_POST['nomeProduto'];
    $precoProduto = $_POST['precoProduto'];
    
    echo "<h1>Resultado</h1>";
    echo "Produto: $nomeProduto — $precoProduto: R$" .number_format($precoProduto, 2, ',', '.');
    
}