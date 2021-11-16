<?php
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $nombre=$_GET["nombre"];
 $apellido=$_GET["apellido"];
 $correo=$_GET["correo"];
 $pass=$_GET["pass"];
 $user=$_GET["usuario"];








 /*CONSULTA*/
 $query ="INSERT INTO usuarios VALUES ('$user','$nombre', '$apellido','$correo','$pass',0)";  


 /*ENVIAR AL SERVIDOR*/

 $result= pg_query($conexion, $query) ;

        if($result){
            echo "<script> alert('correcto');
            location.href ='/IS2/admin/usuarios/usuer.php';
            </script>";
            
        }else{
            echo "<script> alert('incorrecto');
            location.href ='/IS2/admin/usuarios/usuer.php';
            </script>";

        }
        

 

 /*CERRAR CONEXION*/
 pg_close($conexion);


?>
