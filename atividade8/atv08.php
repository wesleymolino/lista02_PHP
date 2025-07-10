<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
$anoNascimento = $_POST['anoNascimento'];

$idade = date("Y") - $anoNascimento;

echo "<h1>Resultado</h1>";
echo "<p>Você nasceu em $anoNascimento, o que significa que você tem $idade anos.</p>";
}
?>