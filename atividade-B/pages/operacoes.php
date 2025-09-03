<!-- B) Criar um algoritmo que receba um número qualquer e faça uma das operações que o usuário escolher com este número (Adição ou Subtração). Esta operação deve ser realizada com os números de 1 a 10 e o resultado mostrado na tela.
 
Exemplo: Usuário escolheu o 6 e Adição.
 
Saída:
6 + 1 = 7
6 + 2 = 8
6 + 3 = 9
6 + 4 = 10
6 + 5 = 11
6 + 6 = 12
6 + 7 = 13
6 + 8 = 14
6 + 9 = 15
6 + 10 = 16 -->

<?php

$numero_usuario = filter_input(INPUT_GET, 'numero_usuario', FILTER_VALIDATE_INT);
$operacao_usuario = filter_input(INPUT_GET, 'operacao_usuario', FILTER_VALIDATE_INT);
 

$resultado_final = '';
$classe_css = 'erro'; 
 

if ($numero_usuario !== false && $operacao_usuario !== false) {
    
    $classe_css = 'sucesso'; 
    $resultado_final .= "<h2>Operação com o número $numero_usuario:</h2>";
 
    
    if ($operacao_usuario == 1) { // Se for ADIÇÃO
        $resultado_final .= "<p>Você escolheu <strong>Adição</strong>.</p>";
        
        for ($i = 1; $i <= 10; $i++) { //Cria um loop de 1 a 10 para fazer os cálculos
            $resultado = $numero_usuario + $i;
            $resultado_final .= "$numero_usuario + $i = $resultado<br>";
        }

    } elseif ($operacao_usuario == 2) { // Se for SUBTRAÇÃO
        $resultado_final .= "<p>Você escolheu <strong>Subtração</strong>.</p>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero_usuario - $i;
            $resultado_final .= "$numero_usuario - $i = $resultado<br>";
        }
    } else { // Se o valor não for nem 1 nem 2
        $classe_css = 'erro';
        $resultado_final = "Operação inválida. Por favor, digite 1 para Adição ou 2 para Subtração.";
    }
 
} else {
    // Mensagem de erro se os dados não foram enviados ou são inválidos
    $resultado_final = 'Dados inválidos. Por favor, preencha o formulário corretamente.';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Operação</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <div class="resultado <?php echo $classe_css; ?>">
            <?php echo $resultado_final; ?>
        </div>
        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>
</html>