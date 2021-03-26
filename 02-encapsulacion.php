<?php 
declare (strict_types = 1);

// ENCAPSULACIÓN

class Producto {

    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // Protected - Se puede acceder / modificar unicamente en la clase
    // Private solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto() : void {      //Funcion que no regresa nada
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string {          //Funcion que regresa una string GETTER(Obtener valor)
        return $this->nombre;
    }

    public function setNombre(string $nombre) {     //SETTER(Modificar valor)
        $this->nombre = $nombre;
    }

}

$producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo '<br>';

$producto2 = new Producto('Monitor Curvo', 300, true);
echo $producto2->getNombre();
