<?php

require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

//Aterrizamos la variable que enviamos a través del método get desde el botón de la tabla
$id = $_GET['id'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarFundacionAdmin($id);


?>