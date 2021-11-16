<?php
$conexion=pg_connect("host=localhost port=5433 dbname=lenguasenas 
user=postgres password=route" );
 $administrador=$_GET["nombre"];
 $user=$_GET["usuario"];
 $correo=$_GET["correo"];








 /*CONSULTA*/
 $query ="INSERT INTO administradores VALUES (default,'$administrador', '$user', 04022001,'$correo')";  


 /*ENVIAR AL SERVIDOR*/

 $result= pg_query($conexion, $query) ;

        if($result){
            echo "<script> alert('correcto');
            location.href ='./admins.php';
            </script>";
            
        }else{
            echo "<script> alert('incorrecto');
            location.href ='/IS2/admin/administrado/admins.php';
            </script>";

        }
        

 

 /*CERRAR CONEXION*/
 pg_close($conexion);


?>
