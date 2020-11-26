<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Busqueda de usuario Nutrividt de Colombia</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--Libreria jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">



    </head>
    <body>
        
        <div class="busqueda">
                 <a class="logo">
                <h1> Grupo Empresarial</h1>
                 </a>
            <div>
                <h2>Busqueda de clientes</h2>
                <p>Ingresa el numero de documento o nombre a buscar</p>
                <form class="datos" action="Busquedaclientes.php" method="POST" >
                     <input class="input" name="CedulaCliente" type="text" value="">
                     <input class="buscar" type="submit" value="Buscar">
                 </form>
            </div>
            <div class="cargadatos">
                <h2>Carga de datos</h2>
                <p>Ingresa archivo xls para subir datos</p>
                <form class="datos2" action="files.php" method="POST" enctype="multipart/form-data" id="filesForm">
                    <input class="form-control" type="file" name="fileContacts" >
                    <button class="subir" type="button" onclick="uploadContacts()" >Subir</button>                
                </form>
               
            </div>
        </div>
        <div class="resultado">
            <h2>Resultado</h2>
                 <div class="resultado2">
                  <?php 
                  include 'buscar.php';
                    include 'Busquedapornombre.php';
                        
                        if ($resultadofinal == false || $resultadoname == false || $resultadofinal == "0"){
                        echo "No Encontrado";

                 }else{
                  while($row = mysqli_fetch_array($resultadofinal)){ ?>
                  
                  
                  <b style=" margin-bottom: 0px;"> Cedula: </b><p style=" margin-bottom: 10px;"><?= $row['c_cedula'] ?>  </p>
                  <b style=" margin-bottom: 0px;"> Nombre: </b> <p style=" margin-bottom: 10px;"> <?= $row['c_nombre'] ?>  </p>
                  <b style=" margin-bottom: 0px;"> Estado: </b> <p style=" margin-bottom: 10px;"><?= $row['c_estado'] ?>  </p>
                    <br>
                    <br>
                    <br>
        

                 
                  
                  
                  <?php
                   
                       }        };?>
                </div>

        </div>
        
        <script type="text/javascript">
             function uploadContacts ()
             {

                 
                 var form = new FormData($('#filesForm')[0]);
                 $.ajax({
                     url:"import.php",
                     type: "post",
                     data: form,
                     processData:false,
                     contentType: false,
                     success: function(data)
                     {
                         alert("Registro agregado");
                     }
                    });
                    
             }
                    
                



                
        
        
        </script>
    </body>
</html>