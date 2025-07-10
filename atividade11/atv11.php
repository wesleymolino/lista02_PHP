<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $Email = strtolower($nome) . '.' . strtolower($sobrenome) . '@senai.com.br';
    $Email = str_replace(' ', '', $Email); 

    echo "<h1>Resultado do E-mail</h1>";
    echo " <strong>$Email</strong></p>";
}