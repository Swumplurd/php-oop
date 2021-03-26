<?php
//INTERFACES permite agrupa declaraciones pero no implementan

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {    //Para implementar una interfaz usamos implements mas el nombre de la interfaz
    public function __construct(protected int $ruedas, protected int $capacidad) {
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

