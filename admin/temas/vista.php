<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );

$tema=$_GET['tema'];
 /*CONSULTA*/
 $query ="SELECT * FROM temas T, modulos M, contenido C where  M.id_m=T.id_m and T.id_t=C.id_t and T.nombre_tema ='$tema' order by id_c";
 $consulta=pg_query($conexion,$query);


 
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Contenido</title>
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
        <h3 class="text-center fw-bold py-3"><?php echo $tema;?></h3>
        <?php echo "<a href='http://localhost:8081/IS2/admin/temas/agregar_contenido.php?no=".$tema."' class='btn btn-primary'>";
                                    echo "Agregar";
                                    echo"</a>"?>
        
            <center>
           
                                    

            
            <?php
            if(pg_num_rows($consulta)>0){
                echo "<table style='text-align:center;'>";
                        echo "<tr>";
                            echo" <th>ID</th>";
                            echo "<th>Contenido</th>";
                            echo "<th>URL del video</th>";
                        echo "</tr>";
                while ($mostrar=pg_fetch_array($consulta)) {

            ?>
                    <tr>
                        <td style="border: 1px solid black"><?php echo $mostrar['id_t']?></td>
                        <td style="border: 1px solid black"><?php echo $mostrar['nombre_contenido']?></td>
                        <td style="border: 1px solid black"><?php echo $mostrar['url']?></td>
                        <td>
                            <?php echo "<a href='http://localhost:8081/IS2/admin/temas/editar_contenido.php?no=".$mostrar['id_t']."' class='btn btn-primary'>";
                                    echo "Editar";
                                    echo"</a>"?>
                                    </td>
                                    <td><?php echo "<a href='http://localhost:8081/IS2/admin/temas/eliminar_contenido.php?no=".$mostrar['id_c']."' class='btn btn-primary'>";
                                    echo "Eliminar";
                                    echo"</a>"?>
                                    </td>
                                    
                    </tr>
                        
                        
                            
                        
                    



            <?php
                
                    }
                    echo" </table>";
                }else{
                    echo"<br>";
                    echo" <FONT COLOR='gray'>";
                    echo"No hay contenido que mostrar";
                    echo" </FONT>";

                    echo"<br>";

                }
            ?>
            </center>
                                    
                                    
                                   
            <br>
                            <div class="boton_cuenta" style="text-align: center" ><a style="text-decoration:none" href="./temas.php"> Regresar a Temas</a></div>
            
                            </div>

    </div>
    
</body>
</html>