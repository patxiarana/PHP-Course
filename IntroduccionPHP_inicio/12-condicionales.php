<?php include 'includes/header.php';

$autenticado = true ;
$admin = false ;
if($autenticado || $admin) {
echo 'usuario autenticado correctamente' ; 
} else {
echo 'usuario no autenticado inicia sesion';
}

if($autenticado && $admin) {
    echo 'usuario autenticado correctamente' ; 
    } else {
    echo 'usuario no autenticado inicia sesion';
    }

    // IF aninados 

    $cliente = [
    'nombre' => 'Patxi',
    'saldo' => 200 , 
    'informacion' => [
    'Tipo' => 'premium'
        ]
    ] ; 

    if(!empty($cliente)) {
        echo 'el arreglo de cliente no esta vacio';
        if($cliente['saldo'] > 100) {
            echo "el saldo del cliente es mayor a 100" ; 
        }  else {
            echo 'el cliente no teine saldo ' ; 
        } ; 
    }

// Else if 

if($cliente['saldo'] > 0 ) {
    echo 'El cliente tiene saldo' ; 
} else if($cliente['informacion']['Tipo'] === 'premium') {
echo 'el cliente es premium';
}else{
    echo 'el cliente no tiene saldo o no es premium';
}

$tecnologia ='PHP' ; 

switch($tecnologia) {
    case 'PHP' :
    echo 'PHP, un excelente lenguaje de programacion' ; 
       break ; 
    
   case 'JavaScript' :
    echo 'Genial, el lenguaje de la web';
   
    break ; 

    case 'HTML' : 
    echo  'HTML el rey del web XD' ; 
  break ;
    default :
    echo "No se cual es el lenguaje" ; 
}


include 'includes/footer.php';