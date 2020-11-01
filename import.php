<?php
    include('conexion.php');
    
    $fileContacts = $_FILES['fileContacts'];
    

    
    
    $fileContacts = file_get_contents($fileContacts['tmp_name']);

    $fileContacts= explode ("\n", $fileContacts);
    $fileContacts = array_filter($fileContacts);

     //PREPARAR CONTACTOS CONVERTIRLOS EN ARRAY
     
    foreach ($fileContacts as $contact )
    {
        $contactList[] = explode (";",$contact);
    }
     
    //INSERTAR DATOS
    foreach ($contactList as $contactData)
    {
        $conexion->query("INSERT INTO datosreales
                            (c_id,
                            c_nombre,
                            c_cedula,
                            c_estado
                           )
                            VALUES

                            ('{$contactData[0]}',
                             '{$contactData[1]}',
                             '{$contactData[2]}',
                             '{$contactData[3]}'
                            
                             )
                             ");
                             };
                             
    




    
   




?>