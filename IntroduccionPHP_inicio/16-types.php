
declare(stritc_types = 1) ; 

<?php include 'includes/header.php';

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