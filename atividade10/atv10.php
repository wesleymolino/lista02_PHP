<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comprimento = $_POST['comprimento'];
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    $volume = $comprimento * $largura * $altura;

    echo "<h1>Resultado do Volume </h1>";
    echo "<p>O volume com comprimento $comprimento cm, largura $largura cm e altura $altura cm é: " . number_format($volume, 2, ',', '.') . " cm³.</p>";  
} else {
    echo "<h1>Erro</h1>";
    echo "<p>Por favor, envie os dados através do formulário.</p>";


}