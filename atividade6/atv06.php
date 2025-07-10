<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$quadra = $_POST['quadra'];


 $enderecoCompleto = $bairro . ' - ' . $cidade . ', Rua ' . $rua . ', Nº ' . $numero . ', Quadra ' . $quadra;

    echo "<h2>Endereço Completo:</h2>";
    echo "<p>$enderecoCompleto</p>";
}