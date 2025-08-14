<?php
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Óla, meu nome é $this->nome";
        echo "<hr>";
        echo "Tenho $this->idade anos";
    }
}

$aluno1 = new Pessoa();
$aluno1->nome = "Carlitos";
$aluno1->idade = 18;
$aluno1->apresentar();

$aluno1 = new Pessoa();
$aluno1->nome = "Carlitos";
$aluno1->idade = 20;
$aluno1->apresentar();
?>