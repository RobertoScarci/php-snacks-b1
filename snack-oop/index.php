class Pokemon{
    public $nome;
    public $abilità;
    public $tipo;
    public $peso;
    public $allenatore;

    public function __construct(String $nome, String $abilità, String $tipo, String $peso, String $allenatore,) {
            $this->name = $nome;
            $this->genre = $abilità;
            $this->weight = $tipo;
            $this->height = $peso;
            $this->level = $allenatore;
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


$squirtle = new Pokemon();
$squirtle->nome = 'Squirtle';
$squirtle->abilità = 'SputaAcqua';
$squirtle->tipo = 'Acqua';
$squirtle->peso = 'Leggero';
$squirtle->allenatore = 'Chris';