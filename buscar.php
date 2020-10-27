<?php

include 'conexionbuscar.php';




$codigo = $_POST['CedulaCliente'];


$mysqli= new mysqli($server,$usuario,$contrasena,$db);

if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();}





    
$query = ("SELECT * FROM listadeuser WHERE b_cedula ='$codigo'");
$result = $mysqli->query($query);











?>