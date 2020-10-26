<?php
 include 'conexion.php' ;
    
            
    $busqueda = $_POST['CedulaCliente'];
   
    
    mysql_select_db($database,$conexion) or die("error al conectar base de")
        $resultado = mysql_query("SELECT * FROM listadeuser WHERE b_cedula = '$busqueda'");

      

   
    $SQL_query = mysqli_query($busquedaSQL);



   

?>