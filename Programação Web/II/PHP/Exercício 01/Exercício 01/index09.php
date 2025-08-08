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
    $celsius = 30;
    // Cria a variável $celsius e armazena o valor 30 (temperatura em graus Celsius)
    
    $fahrenheit = ($celsius * 9 / 5) + 32;
    // Converte a temperatura de Celsius para Fahrenheit usando a fórmula:
    // Fahrenheit = (Celsius × 9/5) + 32
    
    echo "$celsius°C equivalem a $fahrenheit°F.<br>";
    // Exibe a frase com os valores, mostrando a equivalência entre Celsius e Fahrenheit
    // O <br> adiciona uma quebra de linha no HTML
    ?>
</body>

</html>