<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );

$tema=$_GET['tema'];
$nivel=$_GET['nivel'];

$query ="INSERT INTO temas VALUES (default,'$tema', $nivel)";  
$result= pg_query($conexion, $query) ;

        if($result){
            echo "<script> alert('correcto');
            location.href ='./temas.php';
            </script>";
            
        }else{
            echo "<script> alert('incorrecto');
            location.href ='./temas.php';
            </script>";

        }
        

?>