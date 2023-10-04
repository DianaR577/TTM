<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $id = $_POST['id_user'];
      $tipo_doc = 4;
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];

      //Creamos el objeto a partir de la clase
      //Para enviar los argumentos a la función en el modelo (archivo consultas)
      $objConsultas = new Consultas ();
      $result = $objConsultas->modificarCuentaFundacion($id, $tipo_doc, $nombre, $email, $telefono);


?>