<?php 
    include 'modulos/raizExam.php'; 
    $title  = "Bienvenido ";  
    $menu=false;
    include 'modulos/componentes/header.php';
    
    $url=(isset($_GET['dir']))?$_GET['dir']:'principalTeacher';

    switch ($url) {
        case 'principalTeacher':
            include 'modulos/paginas/principalTeacher.php';
            break;
        case 'createExam':
            include 'modulos/paginas/createExam.php';
            break;
        case 'perfile':
            include 'modulos/paginas/perfile.php';
            break;
          default:
            include 'modulos/paginas/principalTeacher.php';
            break;
    }

    include 'modulos/componentes/footer.php'; 
?>
