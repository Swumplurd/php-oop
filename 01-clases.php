<?php 
declare( strict_types = 1); //Esta linea debe ser la primera en el html, ayuda a definir los tipos de dato algo asi como lo hace TS



// Definir una clase
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible) {    //Nueva forma de crear constructores en PHP8 
    }   //Costructor se manda a llamar automaticamente cada que se instancia un objeta de la clase que lo contiene.

    public function mostrarProducto() {     //Metodo de clase
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;   //this referencia por contexto al objeto que ha sido instanciado
    }
}

$producto = new Producto('Tablet', 200, true);          //Instancia de la clase Producto
$producto->mostrarProducto();                           //Accedemos al metodo mostrarProducto() de la clase Producto

echo '<br>';

$producto2 = new Producto('Monitor Curvo', 300, true);  //Instancia de la clase Producto
$producto2->mostrarProducto();                          //Accedemos al metodo mostrarProducto() de la clase Producto
