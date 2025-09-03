<?php

$valor_hora = filter_input(INPUT_GET, 'salario_usuario', FILTER_VALIDATE_FLOAT);
$horas_trabalhadas = filter_input(INPUT_GET, 'salario_mes', FILTER_VALIDATE_FLOAT);


if ($valor_hora === false || $horas_trabalhadas === false) {
    echo "<h1>Erro:</h1>";
    echo "<p>Por favor, forneça valores numéricos válidos no formulário.</p>";

    exit;
}


$salario_bruto = $valor_hora * $horas_trabalhadas;

$valor_imposto = 0;


if ($salario_bruto > 2000) {
    $valor_imposto = $salario_bruto * 0.05; // 5% de imposto
}


$salario_liquido = $salario_bruto - $valor_imposto;


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <main>
        <div class="resultado">
            <h1>Resultados do Cálculo</h1>
            <p>Salário Bruto: <span>R$ <?php echo number_format($salario_bruto, 2, ',', '.'); ?></span></p>
            <p>Valor do Imposto: <span>R$ <?php echo number_format($valor_imposto, 2, ',', '.'); ?></span></p>
            <hr>
            <h2>Salário Líquido Final: <span>R$ <?php echo number_format($salario_liquido, 2, ',', '.'); ?></span></h2>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <a href="../index.html">Calcular Novamente</a>
        </div>
    </main>
</body>

</html>