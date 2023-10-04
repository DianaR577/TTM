<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $id_user = $_POST['id_user'];
      $tipo_doc = $_POST['tipo_doc'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $rol = $_POST ['rol'];
      $estado = $_POST['estado'];
      $clave = $_POST['id_user'];

            
      //ENCRIPTAMOS LA CLAVE
      $claveMd = md5($clave);

      //Creamos una variable para definir la ruta donde quedará alojada la imagen
      $foto = "../Uploads/Usuarios/" . $_FILES['foto']['name'];

      //Movemos el archivo a la carpeta Uploads y la carpeta de usuario
      $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

      //Creamos el objeto a partir de la clase
      //Para enviar los argumentos a la función en el modelo (archivo consultas)
      $objConsultas = new Consultas ();
      $result = $objConsultas->insertarUserAdmin($id_user, $tipo_doc, $nombre, $apellido, $email, $telefono, $claveMd, $rol, $estado, $foto);


?>