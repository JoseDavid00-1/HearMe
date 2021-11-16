<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );

$id =$_GET['no'];
 /*CONSULTA*/
 $query ="SELECT * FROM temas T, modulos M, contenido C  where  T.id_t=$id";
 $consulta=pg_query($conexion,$query);
 $mostrar=pg_fetch_array($consulta);

 
 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Editar</title>
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
       <?php echo "<a class='mt-2' style='text-decoration: none;' href='http://localhost:8081/IS2/admin/temas/vista.php?tema=".$mostrar['nombre_tema']."' role='button'>";
       echo"Regresar";
       echo"</a>";
       ?>
    <h3  class="text-center fw-bold py-3"> Editar</h3>
        <div class="formulario" >
                    <form action="update_contenido.php" method="GET" >
                        
                        
                        <input type="hidden" name ="id" value="<?php echo $id ?>" ><br/>
                        
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del contenido">
                                    <input type="text" class="form-control mb-3" name="url" placeholder="URL">
                                    
                        
                        
                                    
                        <div class="boton_enviar" align="right" style="flex-flow: column wrap;">
                            
                            <input class="btn btn-primary" type ="submit" name="submit" value="Enviar" ><br/>
                        </div>
                        

                        
                
                    </form>
                </div>
        </div>
    
</body>
</html>