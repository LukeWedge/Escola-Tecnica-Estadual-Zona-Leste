<?php
class Pessoa
{
    var $dataNascimento;
    var $nome;
    public function imprimeDados()
    {
        echo "Data de Nascimento: " . $this->dataNascimento;
        echo "Nome: " . $this->nome;
    }
    public function showNome($nome)
    {
        return $this->nome;
    }
}

$pessoa1 = new Pessoa();
$pessoa1->dataNascimento = "26/04/1985<br>";
$pessoa1->nome = "Junior Messias<br>";

$pessoa2 = new Pessoa();
$pessoa2->dataNascimento = "29/09/1989 <br>";
$pessoa2->nome = "Fabiana Toniolli Messias";

$pessoa1->imprimeDados();
$pessoa2->imprimeDados();
?>