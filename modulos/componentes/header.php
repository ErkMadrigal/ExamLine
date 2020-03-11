<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $raizE;?>css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- css animate -->
    <link rel="stylesheet" href="<?php echo $raizE;?>css/animate.min.css">
    <title><?php echo $title; ?></title>
    <!-- iconos -->
    <script src="<?php echo $raizE;?>js/9b96e9a6c7.js" crossorigin="anonymous"></script>
  </head>
  <style>
    body{
        background: #1488cc; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1488cc, #2b32b2); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1488cc, #2b32b2);
    }
    #contenedor-carga{
        position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;
        background: rgba(255,255,255,0.5);
        opacity: .9;
    }
    .spinner-border{
        margin-top: 25%;margin-left: 50%;
    }
  </style>
  
  <body>
  <div id="contenedor-carga" class="mx-auto" >
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
  </div>
    <script>
        window.onload=()=>{
            setTimeout(() => {
            var contenedor=document.getElementById('contenedor-carga')
                contenedor.style.visibility='hidden'
                contenedor.style.opacity='1'	
            }, 500);
        };
    </script>
  <?php if($menu):?>
        <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Aplicacion electronica de Evaluaciones APEEV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo $raizE;?>index.php?dir=index"><i class="m-1 fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>index.php?dir=loginExam"><i class="m-1 fas fa-building"></i>start exam</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>index.php?dir=login"><i class="m-1 fas fa-sign-in-alt"></i>Login</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
        <!-- endMenu -->
  <?php else:?>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Aplicacion electronica de Evaluaciones APEEV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=principalTeacher"><i class="m-1 fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=perfile"><i class="m-1 fas fa-user"></i>Perfile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=createExam"><i class="m-1 fas fa-file-alt"></i>Create Exam</a>
                </li>
                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    registrar alumno
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>index.php"><i class="m-1 fas fa-power-off"></i>Exit</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Alumno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="respuestaCorrectaAlum" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Error
                    </div>
                    <div class="alert alert-primary" id="respuestaErroneaAlum" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        exito
                    </div>
                    <form class="needs-validation Alumno" novalidate id="registrarAlumno">
                        <div class="row">
                            <div class="col-12">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control" name="nombre"
                                    placeholder="Nombre">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el nombre Paterno.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control mt-3" name="apellidoP" 
                                    placeholder="Apellido Paterno">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el apellido.
                                </div>
                            </div>
                            <div class="col-6">
                                <input required type="text"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    class="form-control mt-3" name="apellidoM" 
                                    placeholder="Apellido Materno">
                                <div class="invalid-tooltip">
                                    Por favor ingresa el apellido Materno.
                                </div>
                            </div>
                            <div class="col-12">
                                <select required class="custom-select form-control mt-3" background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                 name="cargo" placeholder="Selecciones una opcion">
                                    <option value="#">Grupo</option>
                                    <option value="0">1er A</option>
                                    <option value="1">1er B</oAtion>
                                    <option value="1">1er C</oAtion>
                                    <option value="1">1er D</oAtion>
                                    <option value="0">2do A</option>
                                    <option value="1">2do B</oAtion>
                                    <option value="1">2do C</oAtion>
                                    <option value="1">2do D</oAtion>
                                    <option value="0">3er A</option>
                                    <option value="1">3er B</oAtion>
                                    <option value="1">3er C</oAtion>
                                    <option value="1">3er D</oAtion>

                                </select>
                                <div class="invalid-tooltip">
                                    Por favor seleccione un Grupo.
                                </div> 
                            </div>
                            <div class="col-12">
                                <input required type="text" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="correo" placeholder="Correo electrónico">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un correo.
                                </div>
                            </div>
                            <div class="col-12">
                                <input required type="number" class="form-control  mt-3"
                                    style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                    name="numero" placeholder="Número celular">
                                <div class="invalid-tooltip">
                                    Por favor ingresa un telefono.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-raised btn-outline-primary mt-3">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script scr="<?php echo $raizE;?>js/app.js"></script>
    <!-- endMenu -->
  <?php endif;?>