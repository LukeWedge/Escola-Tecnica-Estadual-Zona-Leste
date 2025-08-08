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
    
    $numero = 7;
    // Declara a variável $numero e atribui o valor 7
    
    if ($numero % 2 == 0) {
        // Verifica se o resto da divisão de $numero por 2 é igual a 0
        // Se for igual a 0, significa que o número é par
    
        echo "$numero é par.<br>";
        // Exibe a mensagem dizendo que o número é par, com uma quebra de linha
    
    } else {
        // Caso a condição anterior seja falsa (o número não é par), executa este bloco
    
        echo "$numero é ímpar.<br>";
        // Exibe a mensagem dizendo que o número é ímpar, com uma quebra de linha
    }
    ?>
</body>

</html>