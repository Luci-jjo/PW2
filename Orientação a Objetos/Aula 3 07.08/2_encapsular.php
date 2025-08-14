<?php
    class Aluno {
        public $nome;
        private $rm;

        public function setRM($valor) {
            $this->rm = $valor;
        }
        
        public function getRM() {
            return $this->rm;
        }
    }

    $aluno1 = new Aluno();
    $aluno1->nome = "Seleide";
    $aluno1->setRM(20241010346);
    echo "Meu nome é: $aluno1->nome <br>";
    echo "Meu RM é: " . $aluno1->getRM();   
?>