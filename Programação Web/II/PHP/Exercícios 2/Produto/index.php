<?php
require 'produto.php';

$p1 = new Produto();
$p1->nome = "Notebook";
$p1->preco = 3500;
$p1->exibirInfo();
?>