<?php
require_once 'Pessoa.php'; // importa a classe Pessoa
class Funcionario extends Pessoa
{
    public $cargo;
    public function __construct($nome, $idade, $cargo)
    {
        parent::__construct($nome, $idade);
        $this->cargo = $cargo;
    }
    public function apresentar()
    {
        echo "Nome: {$this->nome}, Idade {$this->idade} anos, Cargo: {$this->cargo}<br>";
    }
}
require_once 'Funcionarios.php';
$f1 = new Funcionario("João", 30, "Programador");
$f1->apresentar();
?>