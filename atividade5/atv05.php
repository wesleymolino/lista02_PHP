<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
$precoProduto = $_POST['precoProduto'];
$taxa = $_POST['taxa'];

// Calcular o valor total
$valorTotal = $precoProduto + ($precoProduto * ($taxa / 100));

// Exibir o resultado
echo "<h1>Resultado</h1>";
echo "<p>Preço do Produto: R$ " . number_format($precoProduto, 2, ',', '.') . "</p>";
echo "<p>Taxa: " . $taxa . "%</p>";
echo "<p>Valor Total a Pagar: R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
} 
