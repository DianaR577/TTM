<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $nombre = $_POST['masNombre'];
      $edad = $_POST['masEdad'];
      $historia = $_POST['masHistoria'];
      $vacunas = $_POST['masVacunas'];
      $raza = $_POST['masRaza'];
      $estSalud = $_POST['masEstSalud'];

            //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS

      if (strlen($nombre) > 0 && strlen($edad) > 0 && strlen($historia) > 0 && strlen($vacunas) > 0 && strlen($raza) > 0 && strlen($estSalud) > 0){
            
            $foto = "../Uploads/Fundaciones/" . $_FILES['foto']['name'];
            //Movemos el archivo a la carpeta Uploads y la carpeta de usuario
            $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
            //Creamos una variable para definir la ruta donde quedará alojada la imagen
 

            //Creamos el objeto a partir de la clase
            //Para enviar los argumentos a la función en el modelo (archivo consultas)
            $objConsultas = new Consultas ();
            $result = $objConsultas->insertarMasAdmin($nombre, $edad, $historia, $vacunas, $raza, $estSalud, $foto);
      
      }
      else{
            echo '<script> alert("Por favor complete todos los campos") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_mascotas.php' </script>";
      }

?>