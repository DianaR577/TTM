<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

$email = $_POST['email'];
$clave = md5($_POST['clave']);

if(strlen($email) > 0 &&  strlen($clave) > 0){

      // CREAMOS EL OBJETO A PARTIR DE LA CLASE PARA ENVIAR LOS ARGUMENTOS AL FUNCION EN EL MODELO
      $objValidar = new ValidarSesion();
      $result = $objValidar->IniciarSesion($email,$clave);
}else{
      echo '<script> alert("Ingrese usuario y contraseña")</script>';
      echo '<script> location.href="../Views/ClientSite/login.php"</script>';
}

?>

