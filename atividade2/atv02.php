<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$valorReais = $_POST['valorReais'];


$taxaDolar = 5.25; 

$dolar = $valorReais / $taxaDolar;

echo "<h1>Resultado da Conversão</h1>";
echo "<p>Valor em Dólar: $" . number_format($dolar, 2, ',', '.') . "</p>";

} else {
    echo "<h1>Erro</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";

}
?>