<?php 
    include 'modulos/raizExam.php'; 
    $title  = "Bienvenido ";  
    $menu=true;
    include 'modulos/componentes/header.php';
    
    $url=(isset($_GET['dir']))?$_GET['dir']:'index';

    switch ($url) {
        case 'index':
            include 'modulos/paginas/principal.php';
            break;
        case 'loginExam':
            include 'modulos/paginas/loginExam.php';
            break;
        case 'login':
            include 'modulos/paginas/login.php';
            break;
          default:
            include 'modulos/paginas/principal.php';
            break;
    }

    include 'modulos/componentes/footer.php'; 
?>
