<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = $_POST['idade'];
   
    $anoNascimento = 360 * $idade;

    echo "<h1>Resultado</h1>";
    echo "<p>Você tem $idade anos, o que equivale a $anoNascimento dias.</p>";
    
}