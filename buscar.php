<?php

include 'conexionbuscar.php';





if(isset($_POST['CedulaCliente']))
    {

    $codigo = $_POST['CedulaCliente']; 

   

    $mysqli= new mysqli($server,$usuario,$contrasena,$db);

            if (mysqli_connect_errno()) {
              printf("Conexión fallida: %s\n", mysqli_connect_error());
              exit();  
            }else{    
                $query = ("SELECT * FROM datosreales WHERE c_cedula ='$codigo' OR c_nombre like '%$codigo%' ");
                
                
                 $result = $mysqli->query($query);
                
                             };

         if(mysqli_num_rows($result) > 0 ){
            $resultadofinal = $result;
      
        }else {
         $resultadofinal =false;
        
        }
    

}else{ 
    $resultadofinal= false;
}
















?>