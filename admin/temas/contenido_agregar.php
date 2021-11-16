<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $tema = $_GET['id'];
 $nombre=$_GET['nombre'];

 $query2="SELECT id_t from temas where nombre_tema ='$tema'";
 $consulta2=pg_query($conexion,$query2);
 $mostrar=pg_fetch_array($consulta2);


 

 $query ="INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'$nombre',$mostrar[id_t]);";
 
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