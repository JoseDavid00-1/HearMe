<?php
/*CONEXION BASE DE DATOS*/
require 'db.php';
/*FUNCION PARA LLAMAR*/
session_start();
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $correo=$_POST['email'];
    $usuario=$_POST['user'];
    $password=$_POST['password'];

 

    


    

    if(($name and $lastname and $correo and $usuario and $password)!=""){
        if(buscarepetidos($usuario,$correo,$conexion)==1){
           /*  $errorStatus = "danger";
            $errorMessage="Registration Failed, Something Wrong With Your Details";
            header("location:register.php?errorMssg=".urlencode($errorMessage)."&".urlencode($errorStatus));
 */ 
          /* echo'  <div class="alert alert-primary" role="alert">
            This is a primary alert—check it out!
            </div>';
            header("location: register.php"); */
            echo '<script language="javascript">alert("¡Usuario ya registrado!");window.location.href="register.php"</script>';
           
        }else{
            $query="INSERT INTO usuarios(usuario,nombre,apellido,correo,contrasenia,on_line) VALUES('$usuario','$name','$lastname','$correo','$password',0)";
            $consulta=pg_query($conexion,$query);
            $cantidad=pg_num_rows($consulta);
            
            echo '<script language="javascript">alert("¡Registrado!");window.location.href="login.php"</script>';
           


        }
      
   

    }else{
        header("location: register.php");

    }

    
   

     
    function buscarepetidos($user,$email,$conex){
        $sql="SELECT * FROM usuarios WHERE usuario='$user' AND correo='$email'";
        $result=pg_query($conex,$sql);
        if(pg_num_rows($result)>0){
            return 1;
        }else{
            return 2;
        }
    }
    

?>