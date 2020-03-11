<?php
include '../../class/database.php';
$claseDataBase = new database();

    

$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
        case 'agregar':
                
                   

        break;
        case 'modificar': 
        

        break;
        case 'eliminar':
           
        break;
        default:
            
        break;
    }