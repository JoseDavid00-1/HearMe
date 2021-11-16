<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
$no=$_GET['no'];
 /*CONSULTA*/
 $query ="DELETE FROM administradores WHERE id_admin = $no";
 $consulta=pg_query($conexion,$query);
 



?>

<script>
    alert("Eliminado");
    window.location.href='./admins.php';
</script>