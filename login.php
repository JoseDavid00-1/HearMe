<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
    
    <title>Iniciar Sesión</title>
    <link rel="icon" href="img/login/login.ico">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  
</head>
<body>

    <div class="container bg w-75  mt-5 pb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6rounded mt-5 px-5 " style="text-align: center;" >

                <!-- aqui es la parte izq de la imagen -->
               <!--  <video width="100" height="150"  autoplay muted >
                    <source src="./login/login.mp4" type="video/mp4">
                </video> -->
                <img src="https://drive.google.com/uc?export=download&id=1LC7emRkyjx4Xu_aDCeVuzhzJt549oiv_" alt="" width="300" height="500"  >
            </div>
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center py-5" style="font-family: Staatliches, cursive;">Bienvenido</h2>

                <!-- LOGIN INPUTS -->
                <FORm action="verificar_datos.php" method="POST">
                    <div class="form-floating  mb-3 ">
                       
                        <input type="text" class="form-control" name="user" >
                        <label for="user" class="form-label" style="font-family: Staatliches, cursive;">Usuario</label>
 
                    </div>
                    <div class="form-floating ">
                     
                     <input type="password" class="form-control" name="password">
                     <label for="password" class="form-label" style="font-family: Staatliches, cursive;">Password</label>
                    </div>
                    <br>

                    <!-- boton -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" id="liveAlertBtn" style="font-family: Staatliches, cursive;" > Iniciar Sesión</button>
                        

                          
                    </div>

                    <div class="my-3" style="text-align: center;">
                        <span style="font-family: Staatliches, cursive;">¿ No tienes cuenta? <a href="register.php">Regístrate</a></span>
                    </div>
                    

                </FORm>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>


</html>