<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 /*CONSULTA*/
 $query ="SELECT * FROM temas T, modulos M where  M.id_m=T.id_m order by T.id_m";
 $consulta=pg_query($conexion,$query);

 $query2 ="SELECT * FROM  modulos M ";
 $consulta2=pg_query($conexion,$query2);
 



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
    <h3  class="text-center fw-bold py-3"> Temas</h3>
                <div class="row">
                     <div class="col-md-3">
                            <form action="insertar_tema.php" method="GET" >
                                <input type="number" class="form-control mb-3" name="nivel" placeholder="Nivel de Aprendizaje">
                                <input type="text" class="form-control mb-3" name="tema" placeholder="Nombre tema">
                                
                                <div class="boton_enviar">
                                <input type="submit" class="btn btn-primary">
                                </div>
                                

                                
                        
                            </form>
                            <center>
                            <h6 style="color:gray" >Recordatorio</h6></center>
                            <table style="color:gray" >
                                <tr >
                                    <th >ID</th>
                                    <th >Aprendizaje</th>
                                    
                                    
                                    
                                </tr>
                                <?php
                                while ($mostrar=pg_fetch_array($consulta2)) {
                                    
                            
                                ?>
                                <tr>
                                    <td style="color:gray"  ><?php echo $mostrar['id_m']?></td>
                                    <td style="color:gray"  ><?php echo $mostrar['niveles']?></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </table>
                    </div>
                    <div class="col-md-8">
                    <center>
                    <div class="" style="overflow-y:auto; width: auto   ; height: 300px;  font-family:verdana;" BORDER CELLPADDING=10>
                            <table style="text-align: center;"  >
                                
                                <tr >
                                    <th  scope="col" style="position:sticky; top:0%; ">Nivel de Aprendizaje</th>
                                    <th scope="col" style="position:sticky; top:0%;  ">Nombre Tema</th>
                                    
                                    
                                    
                                </tr>
                                <?php
                                while ($mostrar=pg_fetch_array($consulta)) {
                                    
                            
                                ?>
                                <tr style="position: sticky;">
                                    <td ><?php echo $mostrar['niveles']?></td>
                                    <td ><?php echo $mostrar['nombre_tema']?></td>
                                   
                                    
                                    <td><?php echo "<a href='http://localhost:8081/IS2/admin/temas/editar.php?no=".$mostrar['id_t']."' class='btn btn-primary'>";
                                    echo "Editar";
                                    echo"</a>"?>
                                    </td>
                                    <td><?php echo "<a href='http://localhost:8081/IS2/admin/temas/eliminar.php?no=".$mostrar['id_t']."' class='btn btn-primary'>";
                                    echo "Eliminar";
                                    echo"</a>"?>
                                    </td>
                                    <td><?php echo "<a href='http://localhost:8081/IS2/admin/temas/vista.php?tema=".$mostrar['nombre_tema']."' class='btn btn-primary'>";
                                    echo "Ver";
                                    echo"</a>"?>
                                    </td>
                                    <td><?php echo "<a href='http://localhost:8081/IS2/admin/temas/gif.php?tema=".$mostrar['id_t']."' class='btn btn-primary'>";
                                    echo "GIF";
                                    echo"</a>"?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </table>
                            </center>
                            <br>
                            <div class="boton_cuenta" style="text-align: center" ><a style="text-decoration:none" href="../menuadmin.php"> Regresar menú</a></div>
            
                            </div>
                     </div>
            </div>
    </div>
    
</body>
</html>