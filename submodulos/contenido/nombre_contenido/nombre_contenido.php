<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
$mirequest = $_GET['nombre']; /* agarramos el nombre del contenido< */

$sql="SELECT * FROM contenido C, videos V WHERE C.nombre_contenido='$mirequest' AND C.id_c = V.id_c ";

$sql2="SELECT nombre_contenido FROM contenido C, temas T WHERE T.id_t = C.id_t AND T.nombre_tema='$mirequest'" ;

$sql3 ="SELECT * FROM modulos M, temas T, contenido C WHERE M.id_m = T.id_m AND nombre_contenido ='$mirequest'";

$consulta=pg_query($conexion,$sql);
$consulta2=pg_query($conexion,$sql2);
$consulta3=pg_query($conexion,$sql3);
$cantidad=pg_num_rows($consulta);
$mandar=pg_fetch_array($consulta3);

/* contenido */
$sql2="SELECT * FROM contenido C, temas T WHERE";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
    <title><?php echo $mirequest; ?></title>
</head>
<body>
    <div class="container   mt-3  pb-5 rounded shadow " style="background-color:#CCE2ED;">
       
        <?php
        
            echo"<a class='btn  ' href='http://localhost:8081/IS2/submodulos/submodulos.php?nivel=".$mandar['niveles']." 'role='button'><h5 class='fst-normal pe-4 ' style='font-family: Staatliches, cursive;'>";
            echo "Regresar";
            echo "</h5>";
            echo"</a>";
             
        ?>
            <div class="row align-items-stretch">
                    <div class="col bg d-none d-lg-block col-mx-5 col-lg-5 m-5  col-xl-6rounded" style="text-align: center;">

                               
                    
                    <?php 

                    if(strlen($mirequest)==1){
                        echo"<h3 class='text-center fw-bold py-5 '  style='font-family: Staatliches, cursive; font-size:2000%'>";
                        echo $mirequest;
                        echo "</h3>";
                    }else if(strlen($mirequest)==2 || strlen($mirequest)==3 ){
                        echo"<h3 class='text-center fw-bold py-5  '  style='font-family: Staatliches, cursive; font-size:2000%; text-align:center; vertical-align:center; line-height:350px;'>";
                        echo $mirequest;
                        echo "</h3>";
                    }else if( strlen($mirequest)==4){
                        echo"<h3 class='text-center fw-bold py-5  '  style='font-family: Staatliches, cursive; font-size:1500%; text-align:center; vertical-align:center; line-height:350px;'>";
                        echo $mirequest;
                        echo "</h3>";

                    
                    }else if(strlen($mirequest)>4 && strlen($mirequest)<8){
                        echo"<h3 class='text-center fw-bold py-5  '  style='font-family: Staatliches, cursive; font-size:1000%; text-align:center; vertical-align:center;line-height:350px;'>";
                        echo $mirequest;
                        echo "</h3>";

                    }  else{
                        echo"<h3 class='text-center fw-bold py-5  '  style='font-family: Staatliches, cursive; font-size:500%; text-align:center; vertical-align:center; line-height:300px;'>";
                        echo $mirequest;
                        echo "</h3>";

                    }  
                        
                   

                    ?>
                   
                   
                   
                    </div>
                   

                    <div class="col  p-3 rounded-end  "   >
                         <!-- aqui es la parte izq de la imagen -->
                                <!--  <video width="100" height="150"  autoplay muted >
                                    <source src="./login/login.mp4" type="video/mp4">
                                </video> -->
                                <?php
                                $mostrar=pg_fetch_array($consulta);
                                
                                $url=$mostrar['url'];
                                $id=$mostrar['id_c'];
                                
                                

                                echo "<img src='$url' class='img-responsive center' width='300' height='500' >";
                       
                                if($id ==1){
                                    $id=$id +1;
                                    $sql_mandar="SELECT * FROM contenido C, videos V WHERE  C.id_c = $id ";
                                    $consulta_mandar=pg_query($conexion,$sql_mandar);
                                    $enviar=pg_fetch_array($consulta_mandar);
                        
                                    echo " <a class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$enviar['nombre_contenido']."' role='button' style='background-color:#6A0BFF; font-family: Staatliches, cursive; ' > ";
                                    echo "Siguiente";
                                    echo"</a>";  
                        
                                }else if($id>1){
                                    
                                    $atras=$id-1;
                                    $siguiente=$id +1;
                        
                                    
                         
                        
                                    $sql_mandar="SELECT * FROM contenido C, videos V WHERE  C.id_c = $siguiente ";
                                    $consulta_mandar=pg_query($conexion,$sql_mandar);
                                    
                                    

                                    
                                    
                                    

                                    if($enviar=pg_fetch_array($consulta_mandar)){
                                        $sql_atras="SELECT * FROM contenido C, videos V WHERE  C.id_c = $atras ";
                                        $consulta_atras=pg_query($conexion,$sql_atras);
                                        $enviar_atras=pg_fetch_array($consulta_atras); 

                                        echo " <a style='width: 90px; background-color:#6A0BFF; font-family: Staatliches, cursive;'class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$enviar_atras['nombre_contenido']."' role='button'   > ";
                                        echo "Atrás";
                                        echo"</a>";

                                        


                                        echo " <a class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$enviar['nombre_contenido']."' role='button' style='background-color:#6A0BFF; font-family: Staatliches, cursive; '  > ";
                                        echo "Siguiente";
                                        echo"</a>";  

                                    }else{
                                        $sql_atras="SELECT * FROM contenido C, videos V WHERE  C.id_c = $atras ";
                                        $consulta_atras=pg_query($conexion,$sql_atras);
                                        $enviar_atras=pg_fetch_array($consulta_atras); 

                                        echo " <a style='width: 90px; background-color:#6A0BFF; font-family: Staatliches, cursive;'class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$enviar_atras['nombre_contenido']."' role='button' style='background-color:#6A0BFF; font-family: Staatliches, cursive; '  > ";
                                        echo "Atrás";
                                        echo"</a>";

                                    }

                                        /* $sql_atras="SELECT * FROM contenido C, videos V WHERE  C.id_c = $atras ";
                                        $consulta_atras=pg_query($conexion,$sql_atras);
                                        $enviar_atras=pg_fetch_array($consulta_atras); 

                                        echo " <a style='width: 90px;'class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$enviar_atras['nombre_contenido']."' role='button' > ";
                                        echo "Atrás";
                                        echo"</a>"; */
                                        
                                                      
                        
                        
                                }
                               
                                ?>

                         
                    </div>        
                              

                        
                                
                                
                       
                       
                            

                         
                     
            </div>
    </div>
    
</body>
</html>

