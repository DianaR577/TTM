<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $id = $_POST['id_user'];
      $tipo_doc = $_POST['tipo_doc'];
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $estado = $_POST['estado'];
      $rol = 2;  
      $clave = $_POST['id_user'];  
      
            
      //ENCRIPTAMOS LA CLAVE
      $claveMd = md5($clave);

      $foto = "../Uploads/fundaciones/" . $_FILES['foto']['name'];
      //Movemos el archivo a la carpeta Uploads y la carpeta de usuario
      $mover1 = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
      //Creamos una variable para definir la ruta donde quedará alojada la imagen

      // //Creamos una variable para definir la ruta donde quedará alojada la imagen
      // $logo = "../Uploads/fundaciones/" . $_FILES['logo']['name'];
      // //Movemos el archivo a la carpeta Uploads y la carpeta de usuario
      // $mover = move_uploaded_file($_FILES['logo']['tmp_name'], $logo);
      // //Creamos una variable para definir la ruta donde quedará alojada la imagen



      //Creamos el objeto a partir de la clase
      //Para enviar los argumentos a la función en el modelo (archivo consultas)
      $objConsultas = new Consultas ();
      $result = $objConsultas->insertarFundacionAdmin($id, $tipo_doc, $nombre, $email, $telefono, $estado, $rol, $claveMd, $foto);


?>