<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $id = $_POST['id_user'];
      $tipo_doc = $_POST['tipo_doc'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $rol = $_POST ['rol'];
      $estado = $_POST['estado'];


      //Creamos el objeto a partir de la clase
      //Para enviar los argumentos a la función en el modelo (archivo consultas)
      $objConsultas = new Consultas ();
      $result = $objConsultas->actualizarAdministradorAdmin($id, $tipo_doc, $nombre, $apellido, $email, $telefono, $rol, $estado);



?>