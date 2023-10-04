<?php
// AL COMIENZO DE LOS ARCHIVOS QUE RECIBEN LOS DATOS DE UN FORMULARIO DEBEMOS ENLAZAR LAS DEPENDENCIAS NECESARIAS COMO LA CONEXION Y LA CLASE CONSULTAS DE LA CARPETA MODULOS
// NOTA: DEBEMOS ENLAZAR LA CONEXION ANTES QUE LAS CONSULTAS DEBIDO A QUE LAS CONSULTAS HACE USO DE LA CONEXION PARA FUNCIONAR
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

// DESPUES DE ENLAZAR LAS DEPENDENCIAS NECESARIAS, ATERRIZAMOS EN VARIABLES LOS DATOS INGRESADOS POR EL USUARIO LOS CUALES VIAJAN A TRAVES DEL METODO "POST" Y LOS "NAMES" DE LOS CAMPOS
$id = $_POST['id_user'];
$tipo_doc = $_POST['tipo_doc'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
$rol = 3;
$estado = 2;


//DESPUES DE VALIDAR QUE TODOS LOS CAMPOS ESTA DILIGENCIADOS, VALIDAREMOS QUE LAS CLAVES COINCIDAN
if ($clave == $clave2) {

      // SI LAS CLAVES COINCIDEN PROCEDEROMOS A ENCRIPTAR LAS
      $claveMd = md5($clave);

      // CREAMOS UN OBJETO CONSULTAS A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO
      $objConsultas = new Consultas();
      $result = $objConsultas->insertarUserEx($id, $nombre, $apellido, $email, $telefono, $claveMd, $rol, $estado, $tipo_doc);
} else {

      // SI LAS CLAVES NO COINCIDEN SE MOSTRARA UNA VENTANA EMERGENTE COMUNICANDOLE AL USUARIO EL PROBLEMA Y LO REDIRIGIRA A FORMULARIO DE REGISTRO
      echo "<script> alert('Las claves no coinciden, intentelo de nuevo') </script>";
      echo "<script> location.href='../Views/ClientSite/register.php' </script>";
}

