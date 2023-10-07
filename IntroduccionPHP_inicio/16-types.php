<?php include 'includes/header.php';


declare(stritc_types = 1) ; 

function usuarioAutenticado(bool $autenticado) : string | int {
   if($autenticado) {
    return  "El usuario esta autenticad" ; 
   } else {
    return 20 ; 
   }
} ; 


$usuario = usuarioAutenticado(true) ; 

echo $usuario ; 

include 'includes/footer.php';