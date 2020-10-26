<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Busqueda de usuario Nutrividt de Colombia</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--Libreria jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>



    </head>
    <body>
        
        <div class="busqueda">
                 <a class="logo">
                <img src="img/logo.png" />
                 </a>
            <div>
                <h2>Busqueda de clientes</h2>
                <p>Ingresa el numero de documento a buscar</p>
                <form class="datos" action="busquedaclientes.php" method="POST" >
                     <input class="input" name="CedulaCliente" type="text" value="Ingresar cedula del cliente"  />
                     <input class="buscar" type="submit" value="Buscar">
                 </form>
            </div>
            <div>
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
                 <div>
                    <?php
                      include 'buscausuario.php';
                      echo $resultado;
                      echo $dato;
                      echo $texto;
                            
                    ?>
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