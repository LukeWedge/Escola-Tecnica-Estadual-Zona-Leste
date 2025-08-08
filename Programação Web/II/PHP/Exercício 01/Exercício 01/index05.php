<!DOCTYPE html>
<!-- Declaração do tipo de documento HTML -->

<html lang="pt-BR">
<!-- Início do HTML com idioma português -->

<head>
    <meta charset="UTF-8">
    <!-- Define o conjunto de caracteres como UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Responsividade para dispositivos móveis -->

    <title>PHP</title>
    <!-- Título da aba do navegador -->

</head>

<body>
    <?php
    // Início do código PHP
    
    $a = 15;
    // Declara a variável $a e atribui o valor 15
    
    $b = 4;
    // Declara a variável $b e atribui o valor 4
    
    echo "Soma: " . ($a + $b) . "<br>";
    // Exibe o texto "Soma: ", concatena com o resultado da soma de $a + $b e adiciona uma quebra de linha HTML
    
    echo "Subtração: " . ($a - $b) . "<br>";
    // Exibe "Subtração: " seguido do resultado de $a - $b, com quebra de linha
    
    echo "Multiplicação: " . ($a * $b) . "<br>";
    // Exibe "Multiplicação: " seguido do resultado de $a * $b, com quebra de linha
    
    echo "Divisão: " . ($a / $b) . "<br>";
    // Exibe "Divisão: " seguido do resultado de $a / $b, com quebra de linha
    
    echo "Resto da divisão: " . ($a % $b) . "<br>";
    // Exibe "Resto da divisão: " seguido do resto da divisão de $a por $b, com quebra de linha
    ?>

</body>

</html>