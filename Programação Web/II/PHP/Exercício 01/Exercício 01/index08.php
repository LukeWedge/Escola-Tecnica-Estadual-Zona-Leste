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
    $texto = "PHP";
    // Cria a variável $texto e armazena a string "PHP"
    
    $inteiro = 100;
    // Cria a variável $inteiro e armazena o número inteiro 100
    
    $decimal = 10.5;
    // Cria a variável $decimal e armazena o número decimal (float) 10.5
    
    $booleano = true;
    // Cria a variável $booleano e armazena o valor booleano verdadeiro (true)
    
    var_dump($texto);
    // Exibe o tipo de dado e o valor de $texto → string(3) "PHP"
    
    echo "<br>";
    // Adiciona uma quebra de linha HTML
    
    var_dump($inteiro);
    // Exibe o tipo e o valor de $inteiro → int(100)
    
    echo "<br>";
    // Quebra de linha
    
    var_dump($decimal);
    // Exibe o tipo e o valor de $decimal → float(10.5)
    
    echo "<br>";
    // Quebra de linha
    
    var_dump($booleano);
    // Exibe o tipo e o valor de $booleano → bool(true)
    
    echo "<br>";
    // Quebra de linha final
    ?>
</body>

</html>