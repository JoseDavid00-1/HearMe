<?php
/*CONEXION BASE DE DATOS*/
require 'db.php';
/*FUNCION PARA LLAMAR*/
session_start();
 
    $usuario=$_POST['user'];
    $password=$_POST['password'];

    if(( $usuario and $password)!=""){
        $query="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasenia='$password'";
        
        $consulta=pg_query($conexion,$query);

        if($password=="04022001"){
            $query2="SELECT * FROM administradores WHERE 'usuario'=$usuario and 'contrasenia'=$password";
            $consulta2=pg_query($conexion,$query2);
             header("location: ./admin/menuadmin.php");

        }else{
            $query3="UPDATE usuarios set on_line=1 where 'usuario'=$usuario and 'contrasenia'=$password  ";
            $consulta3=pg_query($conexion,$query3);
            header("location: prueba_niveles.php");

        }
       

       

    } 
    else{
        header("location: login.php");

    }

    
   

     
    

?>