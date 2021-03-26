<?php 
//HERENCIA 

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad) {
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {    //Herencia de Transporte atributos y metodos
    public function getInfo() : string {    //Para modificar ligeramente un metodo se puede modificar y usar el mismo nombre pero solo surtira efecto en la clase hijo (reescribe)
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) {
    }

    public function getTransmision() : string {     //Atributos o metodos exclusivos de una clase sin que se afecte la clase padre
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');
echo $auto->getInfo();
echo $auto->getTransmision();
