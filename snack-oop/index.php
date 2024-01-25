
<?php
class Pokemon{
    public $nome;
    public $abilità;
    public $tipo;
    public $peso;
    public $allenatore;

    public function __construct(String $nome, String $abilità, String $tipo, String $peso, String $allenatore,) {
            $this->nome = $nome;
            $this->abilità = $abilità;
            $this->tipo = $tipo;
            $this->peso = $peso;
            $this->allenatore = $allenatore;
        }

        public function getName() {
            echo $this->nome;
        }

        public function getWeight() {
            echo $this->peso;
        }

        public function getType() {
            echo $this->tipo;
        }
}


$squirtle->nome = 'Squirtle';
$squirtle->abilità = 'SputaAcqua';
$squirtle->tipo = 'Acqua';
$squirtle->peso = 'Leggero';
$squirtle->allenatore = 'Chris';
