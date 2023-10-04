<?php
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

    $id = $_POST['id_user'];

    $foto = "../Uploads/usuarios/".$_FILES['foto']['name'];

    $mover = move_uploaded_file($_FILES['foto']['tmp_name'],$foto);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarFotoAdmin($id, $foto);

?>