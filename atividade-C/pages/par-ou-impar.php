<!-- C) Criar um algoritmo que receba três números e que informe ao final os números digitados e quantos deles são ímpares e pares.
 
Exemplo: Usuário digitou 5,7,8
 
Saída:
 
Números digitados: 5,7 e 8
Números pares: 1
Números ímpares: 2 -->

<?php

$total_pares = 0;
$total_impares = 0;
$mensagem_final = '';
$classe_css = 'erro'; 


// CORREÇÃO APLICADA AQUI
$num1 = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_INT);
$num2 = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_INT);
$num3 = filter_input(INPUT_GET, 'num3', FILTER_VALIDATE_INT);


if ($num1 !== false && $num2 !== false && $num3 !== false) {
    $classe_css = 'sucesso';


    $numeros_digitados = [$num1, $num2, $num3];


    foreach ($numeros_digitados as $numero) {
        if ($numero % 2 == 0) {
            // Se o resto da divisão por 2 for 0, o número é par
            $total_pares++; // Incrementa o contador de pares
        } else {

            $total_impares++;
        }
    }


    $mensagem_final = "Números digitados: <strong>$num1, $num2 e $num3</strong><br>";
    $mensagem_final .= "Números pares: <strong>$total_pares</strong><br>";
    $mensagem_final .= "Números ímpares: <strong>$total_impares</strong>";
} else {

    $mensagem_final = 'Valor inválido. Por favor, digite três números inteiros.';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado da Verificação</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <h1>Resultado</h1>
        <div class="resultado <?php echo $classe_css; ?>">
            <?php echo $mensagem_final; ?>
        </div>
        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>

</html>