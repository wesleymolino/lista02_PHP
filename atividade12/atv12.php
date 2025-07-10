<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    $data = $dia . '/' . $mes . '/' . $ano;

    echo "<h1>Resultado</h1>";
    echo "<p>A data informada é: <strong>$data</strong></p>";
}