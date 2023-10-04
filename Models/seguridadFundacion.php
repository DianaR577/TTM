<?php

    session_start();

        if (!isset($_SESSION['AUTENTICADO'])) {
            echo '<script> alert("Por favor, inicie sesión") </script>';
            echo "<script> location.href='../ClientSite/login.php' </script>";
            exit; // Termina la ejecución del script después de la redirección
        }

        if ($_SESSION['rol'] != 2) {
            echo '<script> alert("No posee permisos para acceder a esta intefaz") </script>';
            echo "<script> history.go(-1); </script>";
            exit; // Termina la ejecución del script después de la redirección
        }

    // if(!isset($_SESSION['AUTENTICADO'])){

    //     echo '<script> alert("Por favor, inicie sesión") </script>';
    //     echo "<script> location.href='../ClientSite/login.php' </script>";

    // }

    // if($_SESSION['rol']!="Administrador"){

    //     echo '<script> alert("NO POSEE PERMISOS PARA ACCEDER A ESTA INTERFAZ") </script>';
    //     echo "<script> location.href='../ClientSite/login.php' </script>";

    // }
?>