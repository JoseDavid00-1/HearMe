<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
$no=$_GET['no'];
 /*CONSULTA*/
 $query ="DELETE FROM videos WHERE id_c = $no";
 $consulta=pg_query($conexion,$query);
 $query2 ="DELETE FROM contenido WHERE id_c = $no";
 $consulta2=pg_query($conexion,$query2);
 



?>

<script>
    alert("Eliminado");
    window.location.href='./temas.php';
</script>  