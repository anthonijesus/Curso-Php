<?php

    // Mediante la variable $_GET enviamos los valores por la URL
    // backend/index.php?r=alumnos.php 'Esta son los valores de la URL'
    
    if(isset($_GET['r']) && $_GET['r'] != ""){
        
        $ruta = $_GET['r'];

        if($ruta == "cursos"){
            include("vistas/cursos_vista.php");
        }elseif($ruta == "tcursos"){
            include("vistas/tcursos_vista.php");
        }elseif($ruta == "profesores"){
            include("vistas/profesores_vista.php");
        }elseif($ruta == "alumnos"){
            include("vistas/alumnos_vista.php");
        }else{
            echo("<h2> Bienvenidos </h2>");
        }
    }else{
        echo("<h2> Bienvenidos a mi Panel</h2>");
    }

?>