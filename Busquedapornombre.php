<?php 
include 'conexionbuscar.php';

$codigo = $_POST['CedulaCliente']; 


if (!empty($codigo)){

    $mysqli= new mysqli($server,$usuario,$contrasena,$db);

            if (mysqli_connect_errno()) {
              printf("Conexión fallida: %s\n", mysqli_connect_error());
              exit();  
            }else{    
                $query = ("SELECT * FROM datosreales WHERE c_nombre ='%$codigo%' ");
                
                
                 $resultadoname = $mysqli->query($query);}
                 
    
}else {
    $resultadoname = false;
    

     };
     
   
   






?>
