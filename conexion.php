<?php
    $host = "localhost";
    $usuario = "root";
    $contraseña ="";
    $database="nutrividecolombia";

    try{
            $conexion = new PDO("mysql:host=$host;dbname=nutrividecolombia", $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("set names utf8");
             return$conexion;        
    }
catch(PDOException $error){
    echo "No se pudo conectar a la base de datos: " . $error->getMessage();
}


?>