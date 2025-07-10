<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valorHora = $_POST['valorHora'];
    $horasSemana = $_POST['horasSemana'];

    $salario = $valorHora * $horasSemana * 4.5;

    echo "<h1>Resultado</h1>";
    echo "<p>Salário Bruto Mensal: R$ " . number_format($salario, 2, ',', '.') . "</p>";
}
?>