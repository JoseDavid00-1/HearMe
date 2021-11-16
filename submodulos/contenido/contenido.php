<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
$mirequest = $_GET['nombre'];

$sql="SELECT url FROM temas WHERE nombre_tema='$mirequest'";

$sql2="SELECT nombre_contenido, id_c FROM contenido C, temas T WHERE T.id_t = C.id_t AND T.nombre_tema='$mirequest' order by id_c asc" ;

$sql3 ="SELECT niveles FROM modulos M, temas T, contenido C WHERE M.id_m = T.id_m AND nombre_tema ='$mirequest'";

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
    <title><?php echo $mirequest?></title>
</head>
<body>
    <div class="container   mt-5  pb-5 rounded shadow " style="background-color:#CCE2ED;">
        
        <?php
        
            echo"<a class='btn  ' href='http://localhost:8081/IS2/submodulos/submodulos.php?nivel=".$mandar['niveles']." 'role='button'><h5 class='fst-normal pe-4' style='font-family: Staatliches, cursive; font-size:30px;'>";
            echo "Regresar";
            echo "</h5>";
            echo"</a>";
             
        ?>
          
          <?php
           
            if(pg_fetch_all_columns($consulta2) && pg_fetch_all_columns($consulta) ){ 

            
          ?>
            <div class="row align-items-stretch">
                    <div class="col bg d-none d-lg-block col-mx-5 col-lg-5 m-5  col-xl-6rounded" style="text-align: center;">
                        

                               
                                <?php
                                
                                $mostrar=pg_fetch_array($consulta);
                                if($mostrar['url']!=null){
                                    $url=$mostrar['url'];
                               
                                
                                    echo "<img src='$url' class='img-responsive center' width='300' height='500' >";

                                }else{
                                    echo "<div class='' style='height: 400px; width: 200px; text-align:center; margin: 60px 0 0 40%' >";
                
                                    echo "<img  src='https://drive.google.com/uc?export=download&id=1yQPYzDF-MaCWsE5LkG9kpiO5AKhjKhGt' class='img-responsive center' width='100' height='100' >";
                                    echo"<h3 class='text-center fw-bold py-2 ' style='font-family: Staatliches, cursive; font-size: 200%; color:#c2c2c2'>";
                                    echo"Estamos actualizando...";
                                    echo"</h3>";
                                    echo"</div> ";

                                }
                                
                               
                               
                                ?>
                   
                   
                   
                    </div>
                   

                    <div class="col  p-5 rounded-end px-5 "   >
                        <h3 class="text-center fw-bold py-2 " style="font-family: 'Staatliches', cursive; font-size: 430%;"><?php echo $mirequest?></h3>
                        
                                
                       
                            
                                <center>
                                    <div class="my-0" style="padding:0%;">
                                            <?php
                                            $cont = 0;
                                           
                                            while($mostrar=pg_fetch_array($consulta2)){
                                                /* echo $mostrar['id_c']; */
                                                
                                                

                                                 if($cont%5 != 0){
                                                                     
                                                }else{
                                                    echo"<br>";
                                                    echo"<br>";
                                                    
                                                                                        
                                                    
                                                    
                                                
                                                } 
                                                $cont = $cont + 1; 
                                               
                                                echo " <a  class='btn btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$mostrar['nombre_contenido']."' role='button' style='background-color:#6A0BFF; font-family: Staatliches, cursive;'  > ";
                                                    echo $mostrar['nombre_contenido'];
                                                    echo"</a>";
                                                
                                                     
                                            }
                                            
                                            
                                            
                
                                               
                                        
                                            
                                            ?>
                                            </div>
                                        </center>
                                        
                                 
                        
                         
                    </div>        
                              

                        
                                
                                
                       
                       
                            

                         
                     
            </div>
            <?php
             }else{
                echo "<div class='' style='height: 400px; width: 200px; text-align:center; margin: 60px 0 0 40%' >";
                
                echo "<img  src='https://drive.google.com/uc?export=download&id=1yQPYzDF-MaCWsE5LkG9kpiO5AKhjKhGt' class='img-responsive center' width='100' height='100' >";
                echo"<h3 class='text-center fw-bold py-2 ' style='font-family: Staatliches, cursive; font-size: 200%; color:#c2c2c2'>";
                echo"Estamos actualizando...";
                echo"</h3>";
                echo"</div> ";
            } 
            ?>
    </div>
    
</body>
</html>