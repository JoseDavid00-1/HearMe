<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $id = $_GET['id'];
 $nombre=$_GET['nombre'];
 $apellido=$_GET['apellido'];
 
 $correo=$_GET['correo'];
 $pass=$_GET['pass'];
 


 

 $query ="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', contrasenia='$pass' where usuario='$id'";
 
  $consulta=pg_query($conexion,$query);
  if($consulta){
    echo "<script> alert('Actualizado');
    location.href ='/IS2/admin/usuarios/usuer.php';
    </script>";
    
}else{
    echo "<script> alert('incorrecto');
    location.href ='/IS2/admin/usuarios/usuer.php';
    </script>";

}    
 

pg_close($conexion);
?>