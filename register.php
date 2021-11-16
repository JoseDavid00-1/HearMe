<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    
    <title>Registrarse </title>
    <link rel="icon" href="img/register/register.ico">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  
</head>
<body>

    <div class="container bg w-75 h-25 mt-5  rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6rounded pt-4 px-5" style="text-align: center;">

                <!-- aqui es la parte izq de la imagen -->
                <img src="https://drive.google.com/uc?export=download&id=1Gu-pV-iIT0uJFHW-SM18Xffd5h2ZLbxl" alt="" width="350" height="500">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center py-2" style="font-family: Staatliches, cursive;">Crea tu cuenta</h2>

                <!-- LOGIN INPUTS -->
                <FORm action="insertar_datos.php" method="POST">
                    <div class="row g-2">
                        <div class="col-md">   
                            <div class="form-floating  mb-3 ">
                            
                            <input type="text" class="form-control input-lg" name="name" >
                            <label for="user" class="form-label" style="font-family: Staatliches, cursive;">Nombre</label>

                            </div>
                        </div>
                        
                        <div class="col-md">
                            <div class="form-floating  mb-3 ">
                                
                                <input type="text" class="form-control input-sm" name="lastname" >
                                <label for="user" class="form-label" style="font-family: Staatliches, cursive;">Apellidos</label>

                            </div>
                         </div>
                     </div>
                    <div class="form-floating  mb-3 ">
                       
                        <input type="text" class="form-control input-sm" name="email" >
                        <label for="email" class="form-label" style="font-family: Staatliches, cursive;">Correo Electrónico</label>
 
                    </div>
                    <div class="form-floating  mb-3 ">
                       
                        <input type="text" class="form-control input-sm" name="user" >
                        <label for="user" class="form-label" style="font-family: Staatliches, cursive;">Usuario</label>
 
                    </div>
                    <div class="form-floating ">
                     
                     <input type="password" class="form-control input-sm" name="password">
                     <label for="password" class="form-label" style="font-family: Staatliches, cursive;">Password</label>
                    </div>
                    <br>

                    <!-- boton -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" value="Iniciar" href="division_de_niveles.php" style="font-family: Staatliches, cursive;"> Iniciar Sesión</button><br>
                        <a class="btn btn-primary" href="login.php" role="button" style="font-family: Staatliches, cursive;">Regresar</a>
                    </div>

                    
                    

                </FORm>

            </div>
        </div>
    </div>
    
</body>
</html>