<?php include 'includes/header.php';

$productos = array(
    array(
        'nombre' => 'Producto 1',
        'precio' => rand(10, 50), // Genera un precio aleatorio entre 10 y 50
        'disponibilidad' => true // Genera un valor booleano aleatorio (0 o 1)
    ),
    array(
        'nombre' => 'Producto 2',
        'precio' => rand(10, 50),
        'disponibilidad' => false
    ),
    array(
        'nombre' => 'Producto 3',
        'precio' => rand(10, 50),
        'disponibilidad' => true
    )
);




echo "<pre>" ; 
var_dump($productos) ; 

$json = json_encode($productos) ; // json_encode convierte un arreglo a string 
// $json = json_encode($productos, JSON_UNESCAPED_UNICODE) ;  Diferentes funciones de json_encode para los tipos de conversiones 

$json_array = json_decode($json) ;  // json_decode convierte un string a arreglo ; 

var_dump($json) ; 
var_dump($json_array ) ; 
echo "</pre>" ; 


include 'includes/footer.php';