<?php
/* conectamos DB a la tabla modulos */
require 'db.php';
$sql = "SELECT * FROM modulos";
$consulta = pg_query($conexion, $sql);
$cantidad = pg_num_rows($consulta);
/* ---------- */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos</title>
    <link rel="icon" href="img/modulos/workspace.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">    
</head>

<body>
    <div class="container  bg-light mt-5 rounded shadow ">
    <a class="btn btn-light " href="login.php" role="button"><h5 class="fst-normal pe-4 " style="font-family: Staatliches, cursive; font-size:30px;">Salir</h5></a>
            
        
        <h3 class="text-center fw-bold py-3" style="font-family: 'Staatliches', cursive; font-size: 550%" >Aprendizaje</h3>
        <div class="row mt-5  ">
            <!-- aqui se divide el progreso, el boton de traducir and perfil -->
            <div class="col-md-5 me-auto">
                <h5 class="fst-normal ps-4 "style="font-family: 'Staatliches', cursive; font-size: 25px">Mi Progreso</h5>
            </div>

            <div class="col-md-3 d-flex ">
                <a class="btn btn-light " href="#" role="button">
                    <h5 class="fst-normal pe-4 " style="font-family: 'Staatliches', cursive; font-size: 25px">Traducir</h5>
                </a>
                <div>
                    <!-- <img src="img/login/login.png" class="rounded-circle pe-3" width="50 " alt="25">
                    <p class="text-end pe-3">Perfil</p> -->

                </div>

            </div>



        </div>
        <!--  -->
        <!--  -->
        <!-- EMPIEZA LA SECCIÓN DE LOS NIVELES -->
        <div class="container">
            <div class="mt-3 d-gridgap-5 ps-4">
                <div class="row">
                    <?php
                    while ($mostrar = pg_fetch_array($consulta)) {
                    ?>
                    <?php
                        if ($mostrar['id_m'] == 1) {
                            echo "
                            <div class='col'>
                            <div class='card text-white bg-primary mb-3' style='max-width: 20rem; '>
                                <div class='card-body'>
                                    <h5 class='card-title text-center'style='font-family: Staatliches, cursive;'>".$mostrar['niveles']."</h5>
                                    <p class='card-text'style='font-family: Staatliches, cursive; text-align:center'>".$mostrar['descripcion']."</p>
                                    <div class='row  '>
                                        <a class='btn bg-primary border border-dark' href='http://localhost:8081/IS2/submodulos/submodulos.php?nivel=".$mostrar['niveles']."'role='button'style='font-family: Staatliches, cursive;'>Iniciar</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }

                        if ($mostrar['id_m'] == 2) {
                            echo "
                            <div class='col'>
                            <div class='card text-white bg-warning mb-3' style='max-width: 20rem;'>
                                <div class='card-body'>
                                    <h5 class='card-title text-center'style='font-family: Staatliches, cursive;'>".$mostrar['niveles']."</h5>
                                    <p class='card-text'style='font-family: Staatliches, cursive;text-align:center'>".$mostrar['descripcion']."</p>
                                    <div class='row  '>
                                        <a class='btn bg-warning border border-dark' href='http://localhost:8081/IS2/submodulos/submodulos.php?nivel=".$mostrar['niveles']."'role='button' style='font-family: Staatliches, cursive;'>Iniciar</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }

                        if ($mostrar['id_m'] == 3) {
                            echo "
                            <div class='col'>
                            <div class='card text-white bg-danger mb-3' style='max-width: 20rem;'>
                                <div class='card-body'>
                                    <h5 class='card-title text-center' style='font-family: Staatliches, cursive;'>".$mostrar['niveles']."</h5>
                                    <p class='card-text'style='font-family: Staatliches, cursive; text-align:center'>".$mostrar['descripcion']."</p>
                                    <div class='row  '>
                                        <a class='btn bg-danger border border-dark' href='http://localhost:8081/IS2/submodulos/submodulos.php?nivel=".$mostrar['niveles']."'role='button' style='font-family: Staatliches, cursive;'>Iniciar</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>