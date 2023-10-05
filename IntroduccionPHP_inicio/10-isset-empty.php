<?php include 'includes/header.php';

$clientes = [];
$clientes1 = array();
$clientes2 = array('pedro', 'juan', 'karen') ; 

$cliente = [
    'nombre' => 'juan',
    'saldo' => 200
] ; 

//empty - revisa si un arreglo esta vacio

var_dump(empty($clientes)); 
var_dump(empty($clientes1)); 
var_dump(empty($clientes2)); 

echo "<br>" ; 
//issete  - revisa si una arreglo o una propiedad a sido creada o definida 

var_dump(isset($clientes1)) ; 
var_dump(isset($noncreate)) ; 

echo "<br>" ; 

//Isset permite revisar si una propiedad de un arreglo asociativo existe 
var_dump(isset($cliente['nombre'])); //true
var_dump(isset($cliente['apellido'])); // false 
include 'includes/footer.php';