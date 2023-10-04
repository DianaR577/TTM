<?php
      require_once("../Models/conexion.php");
      require_once("../Models/consultas.php");

    $id = $_POST['id_user'];

    $logo = "../Uploads/fundaciones/".$_FILES['logo']['name'];

    $mover = move_uploaded_file($_FILES['logo']['tmp_name'],$logo);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarLogoFundacion($id, $logo);

?>