<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $id = $_GET['id'];
 $nombre=$_GET['nombre'];
 
 


 settype($id, 'int'); 

 $query ="UPDATE temas set url='$nombre' where id_t=$id";
 echo $query;
 $consulta=pg_query($conexion,$query);
 if($consulta){
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