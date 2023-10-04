<?php

    require_once("../Models/conexion.php");
    require_once("../Models/generarClaveModel.php");

    $id = $_POST['id_user'];
    $email = $_POST['email'];

    $objClave = new GenerarClave();
    $result = $objClave->enviarNuevaClave($id, $email);


?>