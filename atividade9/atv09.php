<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    $perimetro = 2 * ($largura + $altura);

    echo "<h1>Resultado do Perímetro do Retângulo</h1>";
    echo "<p>O perímetro do retângulo com largura $largura cm e altura $altura cm é: " . number_format($perimetro, 2, ',', '.') . " cm.</p>";
    
}