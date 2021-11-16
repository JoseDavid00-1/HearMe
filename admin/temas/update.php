<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $id = $_GET['id'];
 $apre=$_GET['aprendizaje'];
 $tema=$_GET['tema'];
 echo $tema;
 echo $id;


 settype($id, 'int'); 

 $query ="UPDATE temas SET nombre_tema='$tema', id_m=$apre where id_t=$id";
echo $query;

 $consulta=pg_query($conexion,$query);
    if($consulta){
    echo "<script> alert('Actualizado');
    location.href ='./temas.php';
    </script>";
    
}else{
    echo "<script> alert('incorrecto');
    location.href ='/IS2/admin/administrado/admins.php';
    </script>";

}   
 

pg_close($conexion);
?>