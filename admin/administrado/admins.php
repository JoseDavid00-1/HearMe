<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 /*CONSULTA*/
 $query ="SELECT * FROM administradores";
 $consulta=pg_query($conexion,$query);
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Administración</title>
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
         <h3  class="text-center fw-bold py-3"> Área administrativa</h3>
            
                 <div class="row"> 
                        <div class="col-md-3">
                            <form action="insertar_admins.php" method="GET" >
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Completo">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="E-mail">
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                <div class="boton_enviar">
                                <input type="submit" class="btn btn-primary">
                                </div>
                                

                                
                        
                            </form>
                        </div>
                    <div class="col-md-8">
                    
                            <center>
                            <table BORDER CELLPADDING=10 style = "font-family:verdana;"   >
                                
                                <tr>
                                    
                                    <td style="border: 1px solid black"  >Administrador</td>
                                    <td style="border: 1px solid black">Usuario</td>
                                    <td style="border: 1px solid black">Correo Electrónico</td>
                                    
                                </tr>
                               
                      
                                <?php

                                    

                                            while ($mostrar=pg_fetch_array($consulta)) {
                                                
                                        
                                            ?>
                                            <tr style="border: 1px solid black">
                                                
                                                <td style="border: 1px solid black"><?php echo $mostrar['administrador']?></td>
                                                <td style="border: 1px solid black"><?php echo $mostrar['usuario']?></td>
                                                <td style="border: 1px solid black"><?php echo $mostrar['correo']?></td>
                                                
                                                <td><?php echo "<a href='http://localhost:8081/IS2/admin/administrado/editar.php?no=".$mostrar['id_admin']."' class='btn btn-primary'>";
                                                echo "Editar";
                                                echo"</a>"?>
                                                </td>
                                                <td><?php echo "<a href='http://localhost:8081/IS2/admin/administrado/eliminar.php?no=".$mostrar['id_admin']."' class='btn btn-primary'>";
                                                echo "Eliminar";
                                                echo"</a>"?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    
                                        ?>
                            </table>
                            </center>
                        </div>
                    </div>
             

            <div class="boton_cuenta" style="text-align: center" ><a style="text-decoration:none" href="../menuadmin.php"> Regresar menú</a>
            <a style="text-decoration:none" href="/IS2/login.php"> Cerrar  Sesión</a></div>
            
    </div>
    
</body>
</html>

