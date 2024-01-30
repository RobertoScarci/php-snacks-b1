<?php

    class People {
        public $name;
        public $surname;
        public $age;

        function __construct(String $name, String $surname, Int $age) {
            $this->$name = $name;
            $this->$surname = $surname;
            $this->$age = $age;
        }

        public function setAge($age) : void {
            !is_int($age) ? throw new exception("Inserisci un numero intero") : $this->age = $age;
        }
    }

    $pippo = new People('Anakin','Skywalker', 22);

    try {
        $pippo->setAge(22);
        $pippo->setAge("Anakin");
    } catch(exception $e) {
        echo $e->getMessage();
    }