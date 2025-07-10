<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
$salarioAtual = $_POST['salarioAtual'];
$percentualReajuste = $_POST['percentualReajuste'];

$reajuste = $salarioAtual * ($percentualReajuste / 100);
$novoSalario = $salarioAtual + $reajuste;

echo "<h1>Resultado do Reajuste Salarial</h1>";
echo "<p>Novo Salário: R$ " . number_format($novoSalario, 2, ',', '.') . "</p>";
}
?>