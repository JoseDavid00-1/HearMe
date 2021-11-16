<?php
/*CONEXION BASE DE DATOS*/
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $id = $_GET['id'];
 $nombre=$_GET['nombre'];
 $usuario=$_GET['usuario'];
 $correo=$_GET['correo'];
 


 settype($id, 'int'); 

 $query ="UPDATE administradores SET administrador='$nombre', usuario='$usuario', correo='$correo' where id_admin=$id";
 echo $query;
 $consulta=pg_query($conexion,$query);
 if($consulta){
    echo "<script> alert('Actualizado');
    location.href ='./admins.php';
    </script>";
    
}else{
    echo "<script> alert('incorrecto');
    location.href ='/IS2/admin/administrado/admins.php';
    </script>";

}   
  

pg_close($conexion);
?>