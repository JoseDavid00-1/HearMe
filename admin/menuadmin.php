<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Administrador</title>
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
        <h3  class="text-center fw-bold py-3"> Bienvenido al área administrativa</h3>
       
        <center>
            <div class="card-group">
                <div class="card" style="width: 18rem;">
                
                    <div class="card-body">
                        
                        <p class="card-text">Aquí tendremos el listado de los administradores. Podemos agregar y eliminar.</p>
                        <a href="./administrado/admins.php" class="btn btn-primary">Editar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                
                    <div class="card-body">
                        
                        <p class="card-text">Aquí tendremos el listado de los temas. Podemos agregar y eliminar.</p>
                        <a href="./temas/temas.php" class="btn btn-primary">Editar</a>
                    </div>
                </div>
                
            </div>
            <div class="card" style="width: 30rem;">
                
                <div class="card-body">
                    
                    <p class="card-text">Aquí tendremos el listado de los usuarios. Podemos agregar y eliminar.</p>
                    <a href="./usuarios/usuer.php" class="btn btn-primary">Editar</a>
                </div>
            </div>
            <a style="text-decoration:none" href="../login.php"> Regresar al inicio</a>
            </center>
            
    </div>
    
</body>
</html>