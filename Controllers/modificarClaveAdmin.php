<?php
      // Enlazamos las dependencias necesarias
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

      // Aterrizamos en variable los datos ingresados por el usuario los cuales viaja a traves del metodo post y los names de los campos

      $id = $_POST['id_user'];
      $clave = $_POST['clave'];
      $clave2 = $_POST['clave2'];

            //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS

      if ($clave == $clave2){
        $claveMd = md5($clave);

        $objConsultas = new Consultas();
        $result = $objConsultas->actualizarClaveAdmin($id, $claveMd);

      }
      else{
            echo '<script> alert("Las clacves no coinciden, intentelo de nuevo") </script>';
            echo "<script> location.href='../Views/homeAdministrador/perfil.php?id=$id'</script>";
      }

?>