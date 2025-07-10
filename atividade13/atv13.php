<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    echo "<h1>Resultado</h1>";
    echo "o sobrenome é: <strong>$sobrenome</strong></p>";
    echo "o nome é: <strong>$nome</strong></p>";
}