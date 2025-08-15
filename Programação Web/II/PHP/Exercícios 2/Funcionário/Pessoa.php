<?php
class Pessoa
{
    public $nome;
    public $idade;
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function apresentar()
    {
        echo "nome: {$this->nome}, Idade: {$this->idade} anos<br>";
    }
}
?>