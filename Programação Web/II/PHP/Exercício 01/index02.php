<!DOCTYPE html>
<!-- Declaração do tipo de documento HTML -->

<html lang="pt-BR">
<!-- Início do documento HTML com idioma português -->

<head>
    <meta charset="UTF-8">
    <!-- Define a codificação de caracteres como UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define a escala para dispositivos móveis -->

    <title>PHP</title>
    <!-- Título da página exibido na aba do navegador -->
</head>

<body>
    <?php
    // Declara a primeira variável com o valor 10
    $variavel1 = 10;

    // Declara a segunda variável com o valor 20
    $variavel2 = 20;

    // Exibe o resultado da soma das duas variáveis
    // As variáveis são somadas entre parênteses e o resultado é concatenado com a string
    echo "A soma das variáveis é: " . ($variavel1 + $variavel2);
    ?>
</body>

</html>