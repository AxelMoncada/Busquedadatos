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
        $conexion->query("INSERT INTO listadeuser
                            (b_id,
                            b_codigo,
                            b_nombre,
                            b_apellido,
                            b_cedula,
                            b_estado,
                            b_deuda,
                            b_pedido)
                            VALUES

                            ('{$contactData[0]}',
                             '{$contactData[1]}',
                             '{$contactData[2]}',
                             '{$contactData[3]}',
                             '{$contactData[4]}',
                             '{$contactData[5]}',
                             '{$contactData[6]}',
                             '{$contactData[7]}'
                             )
                             ");
    }




    
   




?>