<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
        $cont=0;
        while(true){
            if($cont%5 != 0){
               
                echo"<input style='margin: 10px' type='button' value='Click me'>";
                

            }else{
                echo"<br>";
                echo"<br>";
                echo"<br>";
                
            }

            $cont=$cont+1;
           

        }
    ?>
    
</body>
</html>

<?php
                                            $cont = 0;
                                            while($mostrar=pg_fetch_array($consulta2)){
                                                
                                    
                                                
                                              
                                                    echo " <a  class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$mostrar['nombre_contenido']."' role='button' > ";
                                                    echo "$mostrar[nombre_contenido]";
                                                    echo"</a>";  
                                                                            
                                                
                                               
                                            }
                                            if($cont%5 != 0){  
                
                                                echo <<<EOD
                                                        </div>
                                                        </div>
                                                        </br>
                                                        </br>
                                            EOD;
                                             }
                                            ?>


echo " <a  class='btn btn-primary btn-xs' href='http://localhost:8081/IS2/submodulos/contenido/nombre_contenido/nombre_contenido.php?nombre=".$mostrar['nombre_contenido']."' role='button' > ";
                                                    echo "$mostrar[nombre_contenido]";
                                                    echo"</a>";