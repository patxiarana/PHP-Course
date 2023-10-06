<?php include 'includes/header.php';

$cliente  = array('Pedro', 'Juan', 'Karen') ; 


foreach($cliente as $cliente) {
    echo $cliente ."<br>" ; 
} ; 


$cliente = [
    'nombre' => 'Patxi',
    'saldo'  => 200,
    'tipo'  => 'Premium'
] ; 


foreach($cliente as $key => $valor) {
    echo  $key. "-" .$valor ."<br>" ; 
} ; 



include 'includes/footer.php';