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
    $nota1 = 8;
    // Armazena a primeira nota (8) na variável $nota1
    
    $nota2 = 6;
    // Armazena a segunda nota (6) na variável $nota2
    
    $nota3 = 9;
    // Armazena a terceira nota (9) na variável $nota3
    
    $media = ($nota1 + $nota2 + $nota3) / 3;
    // Calcula a média das três notas e armazena o resultado em $media
    
    if ($media >= 7) {
        // Verifica se a média é maior ou igual a 7
        // Se for, o aluno está aprovado
    
        echo "Aluno aprovado com média " . number_format($media, 2) . ".<br>";
        // Exibe mensagem de aprovação
        // number_format($media, 2) formata a média para ter 2 casas decimais
        // <br> adiciona uma quebra de linha
    
    } else {
        // Caso a média seja menor que 7
    
        echo "Aluno reprovado com média " . number_format($media, 2) . ".<br>";
        // Exibe mensagem de reprovação formatando a média com 2 casas decimais
    }
    ?>
</body>

</html>