<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Patxi',
    'saldo' => 200 ,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100 , 
    ]
] ; 

$cliente['codigo'] = 12315 ; 


echo "<pre>" ; 

var_dump($cliente) ; 

"<pre>" ; 

echo $cliente['nombre'] ; 
echo $cliente['saldo'] ; 

// Acceder al array tipo

echo $cliente['informacion']['tipo']; 

include 'includes/footer.php';