<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $id=$_GET['id'];
 $nombre = $_GET['nombre'];
 $url=$_GET['url'];

 


 settype($id, 'int'); 

 


 
    $query ="UPDATE contenido SET nombre_contenido='$nombre' where id_c=$id";
    $consulta=pg_query($conexion,$query);
    $query2 ="UPDATE videos SET url='$url' where id_c=$id";
    $consulta2=pg_query($conexion,$query2);

 



if($consulta && $consulta2 ){
    echo "<script> alert('Actualizado');
    location.href ='/IS2/admin/temas/temas.php';
    </script>";
    
}else{
    echo "<script> alert('incorrecto');
    location.href ='/IS2/admin/temas/temas.php';
    </script>";

}  
 

pg_close($conexion);
?>