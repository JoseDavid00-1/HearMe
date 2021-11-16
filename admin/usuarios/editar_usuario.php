<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );

$user=$_GET['no'];

 /*CONSULTA*/
 
 
 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
        <a class="mt-2"style="text-decoration: none;" href="./usuer.php" role="button">Regresar</a>
    <h3  class="text-center fw-bold py-3"> Editar Usuario</h3>
        <div class="formulario" >
                    <form action="update_usuario.php" method="GET" >
                        
                        
                        <input type="hidden" name ="id" value="<?php echo $user ?>" ><br/>
                        
                                               
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre ">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="E-mail">
                                
                                <input type="text" class="form-control mb-3" name="pass" placeholder="Contraseña">

                        
                        
                                    
                        <div class="boton_enviar" align="right" style="flex-flow: column wrap;">
                            
                            <input class="btn btn-primary" type ="submit" name="submit" value="Enviar" ><br/>
                        </div>
                        

                        
                
                    </form>
                </div>
        </div>
    
</body>
</html>