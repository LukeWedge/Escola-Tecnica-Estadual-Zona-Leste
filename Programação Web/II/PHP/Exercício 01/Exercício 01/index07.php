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
    
    $x = 10;       // inteiro
    // Cria a variável $x e armazena o valor 10 como um número inteiro (int)
    
    $y = "10";     // string
    // Cria a variável $y e armazena o valor "10" como uma string (texto)
    
    echo "Usando == : ";
    // Exibe a frase "Usando == : " na tela
    
    var_dump($x == $y); // true
    // Compara $x e $y usando o operador == (igualdade de valor, sem considerar o tipo)
    // Nesse caso, 10 (int) e "10" (string) são iguais em valor → retorna true
    // var_dump mostra o tipo de dado retornado (bool) e o valor (true)
    
    echo "<br>Usando === : ";
    // Exibe a frase "Usando === : " e insere uma quebra de linha antes
    
    var_dump($x === $y); // false
    // Compara $x e $y usando o operador === (igualdade estrita, considera valor e tipo)
    // 10 (int) e "10" (string) têm tipos diferentes → retorna false
    
    echo "<br>";
    // Adiciona mais uma quebra de linha
    ?>
</body>

</html>