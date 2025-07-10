<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);

    echo "<h1>Resultado do IMC</h1>";
    echo "<p>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</p>";
}