<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valorConta = $_POST['valorConta'];
    $numeroAmigos = $_POST['numeroAmigos'];
    $valorPorPessoa = $valorConta / $numeroAmigos;

    echo "<h1>Resultado</h1>";
    echo "<p>O valor da conta é R$ " . number_format($valorConta, 2, ',', '.') . ", e cada pessoa deve pagar R$ " . number_format($valorPorPessoa, 2, ',', '.') . ".</p>";
}
