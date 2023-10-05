<?php include 'includes/header.php';
$nombre_cliente = 'Patxi Arana';

//Conocer Extension De un STRING
echo strlen($nombre_cliente) ; 
var_dump(($nombre_cliente)) ;


//Eliminar Espacios en Blanco de una Cadena de Texto 
$texto = trim($nombre_cliente);
strlen($texto) ; 

//Convertir a Mayuscula 

echo strtoupper($texto);

//Convertir en miniscula 

echo strtolower($texto) ; 



$mail1 = "correo1@gmail.com"; 
$mail2 = "Correo1@gmail.com" ; 


var_dump($mail1 === $mail2) ; 


// Comparando para que sea true 


var_dump($mail1 === strtolower($mail2)) ; 



//echo str_replace('Patxi', 'P', $nombre_cliente) ; 


//Revisar si un String Existe o no 
echo strpos($nombre_cliente, 'Patxi') ; 


$tipoCliente = "Primium" ; 
echo "<br>"; 

echo "El Cliente"  .  $nombre_cliente . "es" . $tipoCliente ; 

echo "<br>" ; 

echo "El cliente {$nombre_cliente} es {$tipoCliente}" ; 

include 'includes/footer.php';