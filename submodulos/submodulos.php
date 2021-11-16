<?php
/* conectamos DB a la tabla modulos */
require '../db.php';
$mirequest = $_GET['nivel'];
$sql="SELECT nombre_tema FROM temas T, modulos M where M.id_m = T.id_M AND M.niveles='$mirequest' order by T.id_t";
$consulta=pg_query($conexion,$sql);
$cantidad=pg_num_rows($consulta);
/* ---------- */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas</title>
    <link rel="icon" href="../img/nivel/nivel.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container  bg-light mt-5 pb-5 rounded shadow ">
    <a class="btn btn-light " href="/IS2/login.php" role="button"><h5 class="fst-normal pe-4 " style="font-family: Staatliches, cursive; font-size:30px;">Salir</h5></a>
    
        <h3 class="text-center fw-bold py-3"  style="font-family: Staatliches, cursive; font-size:70px;"><?php echo $mirequest;?></h3>
        <div class="row mt-2  ">
            <!-- aqui se divide el progreso, el boton de traducir and perfil -->
            <div class="col-md-5 me-auto">
              <h5 class="fst-normal ps-4 "></h5>
              <a class="btn btn-light " href="../prueba_niveles.php" role="button"><h5 class="fst-normal pe-4 " style="font-family: Staatliches, cursive; font-size:30px;">Regresar</h5></a>
            </div>
            
            <div class="col-md-3 d-flex ">
                
                <div>
                   <!--  <img src="img/login/login.png" class="rounded-circle pe-3" width="50 " alt="25" >
                     <p class="text-end pe-3">Perfil</p> -->

                </div>
                
            </div> 
            
            

        </div>


        <?php

            $cont = 0;

            /* $mirequest = $_GET['nombre'];  */

            while($mostrar=pg_fetch_array($consulta)){


                if($cont%3 == 0){  
                    if($cont > 0){
                        echo <<<EOD
                                </div>
                                </div>
                                </br>
                                </br>
                EOD;
                    }  
                    echo "<div class=\"container mx-5\" >";
                        echo "<div class=\"row\">";
                        
                            echo "<div class=\"col\">";
                                
                                        echo "<div class=\"card\" style=\"width: 18rem;\">";
                                            
                                            echo "<div class=\"card-body text-center\" style=\"background-color:#DCCBEF;\">";
                                            echo "<h5 class=\"card-title\" style=\"font-family: Staatliches, cursive;\">";
                                                echo  $mostrar['nombre_tema']; 
                                                echo "</h5>";
                                            echo "<p class=\"card-text\"></p>";
                                            echo "<a href=\"http://localhost:8081/IS2/submodulos/contenido/contenido.php?nombre=" . $mostrar['nombre_tema'] . "\" class=\"btn btn-primary\" style=\"font-family: Staatliches, cursive;\">¡Aprendamos!</a>";
                                            echo "</div>";
                                        echo "</div>";
                            echo "</div>";
                }else{
                    echo "<div class=\"col\">";
                            
                                    echo "<div class=\"card\" style=\"width: 18rem;\">";
                                       
                                        echo "<div class=\"card-body text-center\" style=\"background-color:#DCCBEF;\">";
                                        echo "<h5 class=\"card-title\" style=\"font-family: Staatliches, cursive;\">";
                                            echo $mostrar['nombre_tema'];
                                            echo "</h5>";
                                        echo "<p class=\"card-text\"></p>";
                                        echo "<a href=\"http://localhost:8081/IS2/submodulos/contenido/contenido.php?nombre=" . $mostrar['nombre_tema'] . "\" class=\"btn btn-primary\" style=\"font-family: Staatliches, cursive;\">¡Aprendamos!</a>";
                                        echo "</div>";
                                    echo "</div>";
                        echo "</div>";
                }
                $cont = $cont + 1;
            }

            if($cont%3 != 0){  
                
                    echo <<<EOD
                            </div>
                            </div>
                            </br>
                            </br>
                EOD;
            }
                
        ?>
          
    </div>
    
</body>
</html>