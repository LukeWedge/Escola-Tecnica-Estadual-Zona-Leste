<!DOCTYPE html>
<!-- Define o tipo do documento como HTML5 -->

<html lang="pt">
<!-- Define o idioma da página como português -->

<head>
    <meta charset="UTF-8">
    <!-- Suporte a acentos e caracteres especiais -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Faz o layout se adaptar a diferentes tamanhos de tela -->

    <title>PHP</title>
    <!-- Título da aba do navegador -->
</head>

<body>
    <?php
    // Início do código PHP dentro do HTML
    
    // Define a variável $nome com o valor "Lucas"
    $nome = "Lucas";

    // Define a variável $idade com o valor 22
    $idade = 22;

    // Exibe o nome usando echo (com quebra de linha usando <br>)
    echo "Nome: " . $nome . "<br>";

    // Exibe a idade concatenando a string com a variável
    echo "Idade: " . $idade . " anos";

    // Fim do bloco PHP
    ?>
</body>

</html>