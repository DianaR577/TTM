<?php
//CREAMOS UNA CLASE QUE CONTENDRA TODAS LAS FUNCIONES CRUD DEL SISTEMA
class Consultas
{

    //Función registro de usuario externo

    public function insertarUserEx($id, $nombre, $apellido, $email, $telefono, $claveMd, $rol, $estado, $tipo_doc)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA

        $validarUsu = "SELECT * FROM tbl_users WHERE id_user=:id OR email=:email";

        $result = $conexion->prepare($validarUsu);

        $result->bindParam(":id", $id);
        $result->bindParam(":email", $email);

        $result->execute();

        // Se crea un arreglo a partir de la considencia que hay en la consulta anterior, si no hay coinsidencia se creara un arreglo vacio o inexistente

        $f = $result->fetch();

        if ($f) {

            echo '<script> alert("Este usuario ya esta registrado, intentelo nuevamente o inicie sesión") </script>';
            echo "<script> location.href='../Views/clientSite/register.php' </script>";
        } else {

            //Creamos la variable que contendra la consulta a ejecutar
            $insertar = "INSERT INTO tbl_users (id_user, nombre, apellido, email, telefono, clave, cod_rol_fk, cod_estado_fk, cod_tipo_doc_fk)
                VALUES (:id, :nombre, :apellido, :email, :telefono, :claveMd, :rol, :estado, :tipo_doc)";

            //Preparamos todo lo necesario para ejecutar la funcion anterior

            $result = $conexion->prepare($insertar);

            //convertimos los argumentos en parametros

            $result->bindParam(":id", $id);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":apellido", $apellido);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":tipo_doc", $tipo_doc);

            //Ejecutamos el insert
            $result->execute();

            echo '<script> alert("Usuario Registrado con Exito") </script>';
            echo "<script> location.href='../Views/clientSite/login.php' </script>";
        }
    }

    public function insertarFundacionEx($id, $nombre, $email, $telefono, $claveMd, $rol, $estado, $tipo_doc)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA

        $validarUsu = "SELECT * FROM tbl_users WHERE id_user=:id OR email=:email";

        $result = $conexion->prepare($validarUsu);

        $result->bindParam(":id", $id);
        $result->bindParam(":email", $email);

        $result->execute();

        // Se crea un arreglo a partir de la considencia que hay en la consulta anterior, si no hay coinsidencia se creara un arreglo vacio o inexistente

        $f = $result->fetch();

        if ($f) {

            echo '<script> alert("Esta fundación ya esta registrada, intentelo nuevamente o inicie sesión") </script>';
            echo "<script> location.href='../Views/clientSite/register_fundacion.php' </script>";
        } else {

            //Creamos la variable que contendra la consulta a ejecutar
            $insertar = "INSERT INTO tbl_users (id_user, nombre, email, telefono, clave, cod_rol_fk, cod_estado_fk, cod_tipo_doc_fk)
                VALUES (:id, :nombre, :email, :telefono, :claveMd, :rol, :estado, :tipo_doc)";

            //Preparamos todo lo necesario para ejecutar la funcion anterior

            $result = $conexion->prepare($insertar);

            //convertimos los argumentos en parametros

            $result->bindParam(":id", $id);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":tipo_doc", $tipo_doc);

            //Ejecutamos el insert
            $result->execute();

            echo '<script> alert("Fundacion Registrada con Exito, porfavor contacte al administrador para activar su cuenta") </script>';
            echo "<script> location.href='../Views/clientSite/login.php' </script>";
        }
    }

    //Dashboard Admin 

    public function insertarUserAdmin($id_user, $tipo_doc, $nombre, $apellido, $email, $telefono, $claveMd, $rol, $estado, $foto)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA

        $validarUsu = "SELECT * FROM tbl_users WHERE id_user=:id_user OR email=:email";

        $result = $conexion->prepare($validarUsu);

        $result->bindParam(":id_user", $id_user);
        $result->bindParam(":email", $email);

        $result->execute();

        $f = $result->fetch();

        if ($f) {

            echo '<script> alert("Los datos ingresados ya se encuentran registrados, verifique la infomación.") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_usuario.php' </script>";
        } else {

            //Creamos la variable que contendra la consulta a ejecutar
            $insertar = "INSERT INTO tbl_users (id_user, cod_tipo_doc_fk, nombre, apellido, email, telefono, clave, cod_rol_fk, cod_estado_fk, foto)
                VALUES (:id_user, :tipo_doc, :nombre, :apellido, :email, :telefono, :claveMd, :rol, :estado, :foto)";

            //Preparamos todo lo necesario para ejecutar la funcion anterior

            $result = $conexion->prepare($insertar);

            //convertimos los argumentos en parametros

            $result->bindParam(":id_user", $id_user);
            $result->bindParam(":tipo_doc", $tipo_doc);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":apellido", $apellido);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":foto", $foto);

            //Ejecutamos el insert
            $result->execute();

            echo '<script> alert("Usuario registrado exitosamente") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_usuario.php' </script>";
        }
    }

    public function mostrarUserAdmin($id_user)
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $buscar = "SELECT tbl_users.id_user, tbl_users.foto, tbl_users.nombre, tbl_users.apellido, tbl_users.email, tbl_users.telefono, tbl_rol.rol, tbl_rol.cod_rol, tbl_estado.estado, tbl_estado.cod_estado, tbl_tipo_doc.tipo_doc, tbl_tipo_doc.cod_tipo_doc
        FROM (((tbl_users
        INNER JOIN tbl_rol ON tbl_users.cod_rol_fk = tbl_rol.cod_rol)
        INNER JOIN tbl_estado ON tbl_users.cod_estado_fk = tbl_estado.cod_estado)
        INNER JOIN tbl_tipo_doc ON tbl_users.cod_tipo_doc_fk = tbl_tipo_doc.cod_tipo_doc)
        WHERE tbl_users.id_user=:id_user";

        $result = $conexion->prepare($buscar);

        $result->bindParam(':id_user', $id_user);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function mostrarAdministradoresAdmin()
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT tbl_users.id_user, tbl_users.foto, tbl_users.nombre, tbl_users.apellido, tbl_users.email, tbl_users.telefono, tbl_rol.rol, tbl_estado.estado
        FROM ((tbl_users
        INNER JOIN tbl_rol ON tbl_users.cod_rol_fk = tbl_rol.cod_rol)
        INNER JOIN tbl_estado ON tbl_users.cod_estado_fk = tbl_estado.cod_estado)
        WHERE tbl_rol.cod_rol=1";


        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function actualizarAdministradorAdmin($id, $tipo_doc, $nombre, $apellido, $email, $telefono, $rol, $estado)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET cod_tipo_doc_fk=:tipo_doc, nombre=:nombre, apellido=:apellido, email=:email, telefono=:telefono, cod_rol_fk=:rol, cod_estado_fk=:estado WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":tipo_doc", $tipo_doc);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":apellido", $apellido);
        $result->bindParam(":email", $email);
        $result->bindParam(":telefono", $telefono);
        $result->bindParam(":rol", $rol);
        $result->bindParam(":estado", $estado);

        $result->execute();

        echo '<script> alert("Información de usuario actualizada exitosamente") </script>';
        echo "<script> location.href='../Views/homeAdministrador/modificar_administrador.php?id=$id' </script>";

    }

    public function eliminarAdministradorAdmin($id)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM tbl_users WHERE id_user=:id";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id", $id);

        $result->execute();

        echo '<script> alert("Administrador eliminado") </script>';
        echo "<script> location.href='../Views/homeAdministrador/ver_administradores.php' </script>";
    }

    public function mostrarClientesAdmin()
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT tbl_users.id_user, tbl_users.foto, tbl_users.nombre, tbl_users.apellido, tbl_users.email, tbl_users.telefono, tbl_rol.rol, tbl_estado.estado
        FROM ((tbl_users
        INNER JOIN tbl_rol ON tbl_users.cod_rol_fk = tbl_rol.cod_rol)
        INNER JOIN tbl_estado ON tbl_users.cod_estado_fk = tbl_estado.cod_estado)
        WHERE tbl_rol.cod_rol=3";


        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function actualizarClienteAdmin($id, $tipo_doc, $nombre, $apellido, $email, $telefono, $rol, $estado)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET cod_tipo_doc_fk=:tipo_doc, nombre=:nombre, apellido=:apellido, email=:email, telefono=:telefono, cod_rol_fk=:rol, cod_estado_fk=:estado WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":tipo_doc", $tipo_doc);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":apellido", $apellido);
        $result->bindParam(":email", $email);
        $result->bindParam(":telefono", $telefono);
        $result->bindParam(":rol", $rol);
        $result->bindParam(":estado", $estado);

        $result->execute();

        echo '<script> alert("Información de usuario actualizada exitosamente") </script>';
        echo "<script> location.href='../Views/homeAdministrador/modificar_cliente.php?id=$id' </script>";

    }

    public function eliminarClienteAdmin($id)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM tbl_users WHERE id_user=:id";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id", $id);

        $result->execute();

        echo '<script> alert("Cliente eliminado") </script>';
        echo "<script> location.href='../Views/homeAdministrador/ver_clientes.php' </script>";
    }

    public function insertarFundacionAdmin($id, $tipo_doc, $nombre, $email, $telefono, $estado, $rol, $claveMd, $foto)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        //SELECT DE FUNDACIONES REGISTRADO EN EL SISTEMA PARA VERICAR   QUE NO ESTE REGISRADAS

        $validarFun = "SELECT * FROM tbl_users WHERE email=:email OR id_user=:id";

        $result = $conexion->prepare($validarFun);

        $result->bindParam(":email", $email);
        $result->bindParam(":id", $id);

        $result->execute();

        $f = $result->fetch();

        if ($f) {

            echo '<script> alert("Esta fundacion ya se encuentran registrada, verifique la información") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_fundacion.php' </script>";

        } else {

            //Creamos la variable que contendra la consulta a ejecutar
            $insertar_tbl_users = "INSERT INTO tbl_users (id_user, nombre, telefono, email, clave, foto, cod_tipo_doc_fk, cod_rol_fk, cod_estado_fk)
                VALUES (:id, :nombre, :telefono, :email, :claveMd, :foto, :tipo_doc, :rol, :estado)";


            //Preparamos todo lo necesario para ejecutar la insercion de la funcion anterior

            
            $result = $conexion->prepare($insertar_tbl_users);
            //convertimos los argumentos en parametros

            $result->bindParam(":id", $id);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":email", $email);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":foto", $foto);
            $result->bindParam(":tipo_doc", $tipo_doc);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":rol", $rol);

            //Ejecutamos el insert
            $result->execute();

            $insertar_tbl_fundaciones = "INSERT INTO tbl_fundaciones (id_fundacion, id_user_fundacion_fk)
                VALUES (:id, :id)";

            $result = $conexion->prepare($insertar_tbl_fundaciones);

            $result->bindParam(":id", $id);

            $result->execute();

            echo '<script> alert("Fundación registrada con éxito") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_fundacion.php' </script>";
        }
    }

    public function mostrarFundacionesAdmin()
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT tbl_users.id_user, tbl_users.foto, tbl_users.nombre, tbl_users.apellido, tbl_users.email, tbl_users.telefono, tbl_rol.rol, tbl_estado.estado
        FROM ((tbl_users
        INNER JOIN tbl_rol ON tbl_users.cod_rol_fk = tbl_rol.cod_rol)
        INNER JOIN tbl_estado ON tbl_users.cod_estado_fk = tbl_estado.cod_estado)
        WHERE tbl_rol.cod_rol=2";


        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function mostrarFundacionAdmin($id_fundacion)
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $buscar = "SELECT * FROM fundaciones WHERE identificacion=:id_fundacion";

        $result = $conexion->prepare($buscar);

        $result->bindParam(':id_fundacion', $id_fundacion);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function actualizarFundacionAdmin($id, $tipo_doc, $nombre, $email, $telefono, $rol, $estado)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET cod_tipo_doc_fk=:tipo_doc, nombre=:nombre, email=:email, telefono=:telefono, cod_rol_fk=:rol, cod_estado_fk=:estado WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":tipo_doc", $tipo_doc);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":email", $email);
        $result->bindParam(":telefono", $telefono);
        $result->bindParam(":rol", $rol);
        $result->bindParam(":estado", $estado);

        $result->execute();

        echo '<script> alert("Información de fundacion actualizada exitosamente") </script>';
        echo "<script> location.href='../Views/homeAdministrador/modificar_fundacion.php?id=$id' </script>";

    }

    public function eliminarFundacionAdmin($id)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminarFundcion = "DELETE FROM tbl_fundaciones WHERE id_fundacion=:id";
        $result = $conexion->prepare($eliminarFundcion);

        $result->bindParam(":id", $id);

        $result->execute();

        $eliminarFunUser = "DELETE FROM tbl_users WHERE id_user=:id";
        $result = $conexion->prepare($eliminarFunUser);

        $result->bindParam(":id", $id);

        $result->execute();

        echo '<script> alert("Fundacion eliminada") </script>';
        echo "<script> location.href='../Views/homeAdministrador/ver_fundaciones.php' </script>";
    }

    public function insertarEveAdmin($eveNombre, $eveFecha, $eveDireccion, $eveDescripcion, $eveEstado, $img)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA

        $validarEve = "SELECT * FROM eventos WHERE eveNombre=:eveNombre OR eveFecha=:eveFecha";

        $result = $conexion->prepare($validarEve);

        $result->bindParam(":eveNombre", $eveNombre);
        $result->bindParam(":eveFecha", $eveFecha);

        $result->execute();

        $f = $result->fetch();

        if ($f) {

            echo '<script> alert("Los datos ingresados ya se encuentran registrados, ingreselos nuevamente") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_eventos.php' </script>";
        } else {

            //Creamos la variable que contendra la consulta a ejecutar
            $insertar = "INSERT INTO eventos (eveNombre, eveFecha, eveDireccion, eveDescripcion, eveEstado, img)
                VALUES (:eveNombre, :eveFecha, :eveDireccion, :eveDescripcion, :eveEstado, :img )";

            //Preparamos todo lo necesario para ejecutar la funcion anterior

            $result = $conexion->prepare($insertar);

            //convertimos los argumentos en parametros

            $result->bindParam(":eveNombre", $eveNombre);
            $result->bindParam(":eveFecha", $eveFecha);
            $result->bindParam(":eveDireccion", $eveDireccion);
            $result->bindParam(":eveDescripcion", $eveDescripcion);
            $result->bindParam(":eveEstado", $eveEstado);
            $result->bindParam(":img", $img);


            //Ejecutamos el insert
            $result->execute();

            echo '<script> alert("Evento Registrado con Éxito") </script>';
            echo "<script> location.href='../Views/homeAdministrador/registrar_eventos.php' </script>";
        }
    }

    public function mostrarEveAdmin()
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM eventos";

        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function insertarMasAdmin($masNombre, $masEdad, $masHistoria, $masVacunas, $masRaza, $masEstSalud, $foto)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        //Creamos la variable que contendra la consulta a ejecutar
        $insertar = "INSERT INTO mascotas (masNombre, masEdad, masHistoria, masVacunas, masRaza, masEstSalud, foto)
            VALUES (:masNombre, :masEdad, :masHistoria, :masVacunas, :masRaza, :masEstSalud, :foto)";
        //Preparamos todo lo necesario para ejecutar la funcion anterior
        $result = $conexion->prepare($insertar);
        //convertimos los argumentos en parametros
        $result->bindParam(":masNombre", $masNombre);
        $result->bindParam(":masEdad", $masEdad);
        $result->bindParam(":masHistoria", $masHistoria);
        $result->bindParam(":masVacunas", $masVacunas);
        $result->bindParam(":masRaza", $masRaza);
        $result->bindParam(":masEstSalud", $masEstSalud);
        $result->bindParam(":foto", $foto);
        //Ejecutamos el insert
        $result->execute();

        echo '<script> alert("Mascota Registrada con Éxito") </script>';
        echo "<script> location.href='../Views/Administrador/registrar_mascotas.php' </script>";
    }

    public function mostrarMasAdmin()
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM mascotas";

        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function eliminarMasAdmin($masId)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM mascota WHERE masId=:masId";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":masId", $masId);

        $result->execute();

        echo '<script> alert("Mascota Eliminada") </script>';
        echo "<script> location.href='../Views/Administrador/ver_mascotas.php' </script>";
    }

    public function VerPerfil($id)
    {

        $f = null;

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        $buscar = "SELECT tbl_users.id_user, tbl_users.foto, tbl_users.nombre, tbl_users.apellido, tbl_users.telefono, tbl_users.email, tbl_users.foto, tbl_rol.rol, tbl_estado.estado, tbl_tipo_doc.tipo_doc, tbl_tipo_doc.cod_tipo_doc
        FROM (((tbl_users
        INNER JOIN tbl_rol ON tbl_users.cod_rol_fk = tbl_rol.cod_rol)
        INNER JOIN tbl_estado ON tbl_users.cod_estado_fk = tbl_estado.cod_estado)
        INNER JOIN tbl_tipo_doc ON tbl_users.cod_tipo_doc_fk = tbl_tipo_doc.cod_tipo_doc)
        WHERE id_user=:id";

        $result = $conexion->prepare($buscar);

        $result->bindParam(':id', $id);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function modificarCuentaAdmin($id, $tipo_doc, $nombre, $apellido, $email, $telefono)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET cod_tipo_doc_fk=:tipo_doc, nombre=:nombre, apellido=:apellido, email=:email, telefono=:telefono WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":tipo_doc", $tipo_doc);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":apellido", $apellido);
        $result->bindParam(":email", $email);
        $result->bindParam(":telefono", $telefono);

        $result->execute();

        echo '<script> alert("Información de usuario actualizada") </script>';
        echo "<script> location.href='../Views/homeAdministrador/perfil.php?id=$id' </script>";

    }

    public function actualizarFotoAdmin($id, $foto)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET foto=:foto WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);


        $result->execute();

        echo '<script> alert("Foto de perfil actualizada") </script>';
        echo "<script> location.href='../Views/homeAdministrador/perfil.php' </script>";
    }

    public function actualizarClaveAdmin($id, $claveMd)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET clave=:claveMd WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":claveMd", $claveMd);


        $result->execute();

        echo '<script> alert("Clave actualizada correctamente") </script>';
        echo "<script> location.href='../Views/homeAdministrador/perfil.php' </script>";
    }

    //Dashboard Fundacion

    public function modificarCuentaFundacion($id, $tipo_doc, $nombre, $email, $telefono)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = "UPDATE tbl_users SET cod_tipo_doc_fk=:tipo_doc, nombre=:nombre, email=:email, telefono=:telefono WHERE id_user=:id";

        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":tipo_doc", $tipo_doc);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":email", $email);
        $result->bindParam(":telefono", $telefono);

        $result->execute();

        echo '<script> alert("Información de fundación actualizada") </script>';
        echo "<script> location.href='../Views/homeFundacion/perfil.php' </script>";

        
    }

    public function actualizarLogoFundacion($id, $logo)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE tbl_users SET foto=:logo WHERE id_user=:id ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":id", $id);
        $result->bindParam(":logo", $logo);


        $result->execute();

        echo '<script> alert("Logo de fundación actualizado") </script>';
        echo "<script> location.href='../Views/homeFundacion/perfil.php' </script>";
    }

}

//Función de validad sesión

class ValidarSesion
{

    public function iniciarSesion($email, $clave)
    {

        //Creamos el objeto de la conexion
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM tbl_users WHERE email=:email";

        $result = $conexion->prepare($consultar);

        $result->bindParam(":email", $email);

        $result->execute();

        //Convertir la variable result en un arreglo para segmentar los datos que necesitamos
        $f = $result->fetch();

        if ($f) {

            //Se valida la contraseña del usuario

            if ($f['clave'] == $clave) {

                if ($f['cod_estado_fk'] == "1") {

                    //Se realiza el inicio de sesión

                    session_start();

                    //Creamos variables de sesión
                    $_SESSION['id'] = $f['id_user'];
                    $_SESSION['email'] = $f['email'];
                    $_SESSION['rol'] = $f['cod_rol_fk'];
                    $_SESSION['AUTENTICADO'] = "SI";

                    //Validamos el rol para redireccionar a la interfaz correspondiente

                    switch ($f['cod_rol_fk']) {

                        case '1':
                            echo '<script> alert("Bienvenid@ ' . $f['nombre'] . '") </script>';
                            echo '<script> location.href="../Views/homeAdministrador/home.php" </script>';
                            break;

                        case '2':
                            echo '<script> alert("Bienvenida fundación ' . $f['nombre'] . '  ") </script>';
                            echo "<script> location.href='../Views/homeFundacion/home.php' </script>";
                            break;

                        case '3':
                            echo '<script> alert("Bienvenido") </script>';
                            echo "<script> location.href='../Views/homeClient/home.php' </script>";
                            break;
                    }
                } else {
                    echo '<script> alert("Contacte al administrador para activar su cuenta") </script>';
                    echo "<script> location.href='../Views/clientSite/login.php' </script>";
                }
            } else {
                echo '<script> alert("La contraseña es incorrecta") </script>';
                echo "<script> location.href='../Views/clientSite/login.php' </script>";
            }
        } else {
            echo '<script> alert("Este usuario no existe, verifique su correo") </script>';
            echo "<script> location.href='../Views/clientSite/login.php' </script>";
        }
    }

    public function cerrarSesion()
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        session_start();
        session_destroy();

        echo "<script> location.href='../Views/clientSite/login.php' </script>";
    }
}
