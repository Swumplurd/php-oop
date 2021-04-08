<?php
// Conectar a la BD con Mysqli. solo conecta a mysql y mariadb
$db = new mysqli('localhost', 'root', '', 'test');

// Creamos el query
$query = "SELECT nombre from clientes";

// Lo preparamos
$stmt = $db->prepare($query);   //Sentencias preparadas, disminuyen el trabajo de el servidor

// Lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($titulo, $imagen);   //asigna el resultado a las variables creadas en su argumento

// imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;