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
  </style>
  <body>
  <?php if($menu):?>
        <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Examen</a>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Iniciar Examen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=principalTeacher"><i class="m-1 fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=perfile"><i class="m-1 fas fa-building"></i>Perfile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $raizE;?>start.php?dir=createExam"><i class="m-1 fas fa-sign-in-alt"></i>Create Exam</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <!-- endMenu -->
  <?php endif;?>