<?php
class Produto
{
    public $nome;
    public $preco;
    public function exibirInfo()
    {
        echo "Nome: {$this->nome} - Preço: R$ {$this->preco}";
    }
}
?>