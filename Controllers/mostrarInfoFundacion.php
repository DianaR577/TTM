<?php

//Este archivo recibe todas las consultas del modelo para mostrar la información al administrador

//Esta función es la que se llama en la vista

function cargarAdministradores()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarAdministradoresAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY ADMINISTRADORES REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto User" style="height: 50px; border-radius: 10px; margin: 0 auto;"></td>
                    <td >' . $f['nombre'] . '</td>
                    <td>' . $f['apellido'] . '</td>
                    <td>' . $f['rol'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td><a href="modificar_administrador.php?id=' . $f['id_user'] . '" class=" bg-main"><i class="fa-solid fa-pencil"></i> Editar</a></td>
                    <td><a href="../../Controllers/eliminarAdministradorAdmin.php?id=' . $f['id_user'] . '" class=" bg-red"><i class="fa-solid fa-trash"></i> Eliminar</a></td>
                </tr>
                ';
        }
    }
}

function cargarAdministradorEditar()
{
    // Aterrizamos la PK enviada desde la tabla 
    $id_user = $_GET['id'];

    //Enviamos la PK a una función de la clase consultas
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUserAdmin($id_user);

    //Pintamos la información consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo  '
        <a class="d-block w-100 text-right font-weight-bold" href="ver_administradores.php"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
            <form action="../../Controllers/actualizarAdministradorAdmin.php" method="POST">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label>Identificación:</label>
                    <input type="text" value="' . $f['id_user'] . '" class="form-control" readonly placeholder="Ej:10000004436" required name="id_user">
                </div>

                <div class="form-group col-lg-6">
                    <label>Tipo de Identificación:</label>
                    <select required name="tipo_doc" id="" class="form-control">
                        <option  value="' . $f['cod_tipo_doc'] . '">' . $f['tipo_doc'] . '</option>
                        <option value="1">CC</option>
                        <option value="2">CE</option>
                        <option value="3">PASAPORTE</option>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Nombre:</label>
                    <input type="text" value="' . $f['nombre'] . '" class="form-control" placeholder="Ej:Diana" required name="nombre">
                </div>

                <div class="form-group col-lg-6">
                    <label>Apellido:</label>
                    <input type="text" value="' . $f['apellido'] . '" class="form-control" placeholder="Ej:Ramírez"  name="apellido">
                </div>
                <div class="form-group col-lg-6">
                    <label>Correo electrónico:</label>
                    <input type="email" value="' . $f['email'] . '" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email">
                </div>
                <div class="form-group col-lg-6">
                    <label>Teléfono:</label>
                    <input type="number" value="' . $f['telefono'] . '" class="form-control" placeholder="Ej:3154942891" required name="telefono">
                </div>
            
                <div class="form-group col-lg-6">
                        <label>Rol:</label>
                        <select required name="rol" id="" class="form-control">
                            <option value="' . $f['cod_rol'] . '">' . $f['rol'] . '</option>
                            <option value="1">Administrador</option>
                            <option value="2">Fundacion</option>
                            <option value="3">Cliente</option>
                        </select>
                </div>
                
                <div class="form-group col-lg-6">
                        <label>Estado:</label>
                        <select required name="estado" id="" class="form-control">
                            <option value="' . $f['cod_estado'] . '">' . $f['estado'] . '</option>
                            <option value="1">Activo</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Bloqueado</option>
                        </select>
                </div>
            </div>
            <button type="submit" class="btn btn-main-sm btn-flat mb-30 mt-30 w-100" >Actualizar datos de usuario</button>
            
        </form>
            ';
    }
}

function cargarAdministradoresReporte()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarAdministradoresAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY USUARIOS REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td>' . $f['id_user'] . '</td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['apellido'] . '</td>
                    <td>' . $f['email'] . '</td>
                    <td>' . $f['telefono'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td>' . $f['rol'] . '</td>
                </tr>
                ';
        }
    }
}

function cargarClientes()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarClientesAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY CLIENTES REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto User" style="height: 50px; border-radius: 10px; margin: 0 auto;"></td>
                    <td >' . $f['nombre'] . '</td>
                    <td>' . $f['apellido'] . '</td>
                    <td>' . $f['rol'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td><a href="modificar_cliente.php?id=' . $f['id_user'] . '" class=" bg-main"><i class="fa-solid fa-pencil"></i> Editar</a></td>
                    <td><a href="../../Controllers/eliminarClienteAdmin.php?id=' . $f['id_user'] . '" class=" bg-red"><i class="fa-solid fa-trash"></i> Eliminar</a></td>
                </tr>
                ';
        }
    }
}

function cargarClienteEditar()
{
    // Aterrizamos la PK enviada desde la tabla 
    $id_user = $_GET['id'];

    //Enviamos la PK a una función de la clase consultas
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUserAdmin($id_user);

    //Pintamos la información consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo  '
        <a class="d-block w-100 text-right font-weight-bold" href="ver_clientes.php"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
            <form action="../../Controllers/actualizarClienteAdmin.php" method="POST">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label>Identificación:</label>
                    <input type="text" value="' . $f['id_user'] . '" class="form-control" readonly placeholder="Ej:10000004436" required name="id_user">
                </div>

                <div class="form-group col-lg-6">
                    <label>Tipo de Identificación:</label>
                    <select required name="tipo_doc" id="" class="form-control">
                        <option  value="' . $f['cod_tipo_doc'] . '">' . $f['tipo_doc'] . '</option>
                        <option value="1">CC</option>
                        <option value="2">CE</option>
                        <option value="3">PASAPORTE</option>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Nombre:</label>
                    <input type="text" value="' . $f['nombre'] . '" class="form-control" placeholder="Ej:Diana" required name="nombre">
                </div>

                <div class="form-group col-lg-6">
                    <label>Apellido:</label>
                    <input type="text" value="' . $f['apellido'] . '" class="form-control" placeholder="Ej:Ramírez"  name="apellido">
                </div>
                <div class="form-group col-lg-6">
                    <label>Correo electrónico:</label>
                    <input type="email" value="' . $f['email'] . '" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email">
                </div>
                <div class="form-group col-lg-6">
                    <label>Teléfono:</label>
                    <input type="number" value="' . $f['telefono'] . '" class="form-control" placeholder="Ej:3154942891" required name="telefono">
                </div>
            
                <div class="form-group col-lg-6">
                        <label>Rol:</label>
                        <select required name="rol" id="" class="form-control">
                            <option value="' . $f['cod_rol'] . '">' . $f['rol'] . '</option>
                            <option value="1">Administrador</option>
                            <option value="2">Fundacion</option>
                            <option value="3">Cliente</option>
                        </select>
                </div>
                
                <div class="form-group col-lg-6">
                        <label>Estado:</label>
                        <select required name="estado" id="" class="form-control">
                            <option value="' . $f['cod_estado'] . '">' . $f['estado'] . '</option>
                            <option value="1">Activo</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Bloqueado</option>
                        </select>
                </div>
            </div>
            <button type="submit" class="btn btn-main-sm btn-flat mb-30 mt-30 w-100" >Actualizar datos de usuario</button>
            
        </form>
            ';
    }
}

function cargarClientesReporte()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarClientesAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY USUARIOS REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td>' . $f['id_user'] . '</td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['apellido'] . '</td>
                    <td>' . $f['email'] . '</td>
                    <td>' . $f['telefono'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td>' . $f['rol'] . '</td>
                </tr>
                ';
        }
    }
}

function cargarFundaciones()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFundacionesAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY FUNDACIONES REGISTRADAS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto User" style="height: 50px; border-radius: 10px; margin: 0 auto;"></td>
                    <td >' . $f['nombre'] . '</td>
                    <td>' . $f['rol'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td><a href="modificar_fundacion.php?id=' . $f['id_user'] . '" class=" bg-main"><i class="fa-solid fa-pencil"></i> Editar</a></td>
                    <td><a href="../../Controllers/eliminarFundacionAdmin.php?id=' . $f['id_user'] . '" class=" bg-red"><i class="fa-solid fa-trash"></i> Eliminar</a></td>
                </tr>
                ';
        }
    }
}

function cargarFundacionEditar()
{
    // Aterrizamos la PK enviada desde la tabla 
    $id_user = $_GET['id'];

    //Enviamos la PK a una función de la clase consultas
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUserAdmin($id_user);

    //Pintamos la información consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo  '
        <a class="d-block w-100 text-right font-weight-bold" href="ver_fundaciones.php"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
            <form action="../../Controllers/actualizarFundacionAdmin.php" method="POST">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label>Identificación:</label>
                    <input type="text" value="' . $f['id_user'] . '" class="form-control" readonly placeholder="Ej:10000004436" required name="id_user">
                </div>

                <div class="form-group col-lg-6">
                    <label>Tipo de Identificación:</label>
                    <select required name="tipo_doc" id="" class="form-control">
                        <option  value="' . $f['cod_tipo_doc'] . '">' . $f['tipo_doc'] . '</option>
                        <option value="1">CC</option>
                        <option value="4">NIT</option>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Nombre:</label>
                    <input type="text" value="' . $f['nombre'] . '" class="form-control" placeholder="Ej:Diana" required name="nombre">
                </div>

                <div class="form-group col-lg-6">
                    <label>Correo electrónico:</label>
                    <input type="email" value="' . $f['email'] . '" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email">
                </div>

                <div class="form-group col-lg-6">
                    <label>Teléfono:</label>
                    <input type="number" value="' . $f['telefono'] . '" class="form-control" placeholder="Ej:3154942891" required name="telefono">
                </div>
                
                <div class="form-group col-lg-6">
                        <label>Estado:</label>
                        <select required name="estado" id="" class="form-control">
                            <option value="' . $f['cod_estado'] . '">' . $f['estado'] . '</option>
                            <option value="1">Activo</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Bloqueado</option>
                        </select>
                </div>
            </div>
            <button type="submit" class="btn btn-main-sm btn-flat mb-30 mt-30 w-100" >Actualizar datos de usuario</button>
            
        </form>
            ';
    }
}

function cargarFundacionesReporte()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFundacionesAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY USUARIOS REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td>' . $f['id_user'] . '</td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['email'] . '</td>
                    <td>' . $f['telefono'] . '</td>
                    <td>' . $f['estado'] . '</td>
                    <td>' . $f['rol'] . '</td>
                </tr>
                ';
        }
    }
}

function cargarEventos()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarEveAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY EVENTOS REGISTRADOS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td><img src="../' . $f['img'] . '" alt="Logo Fundación" style="width: 60px; height: 60px; border-radius: 25%"></td>
                    <td>' . $f['eveNombre'] . '</td>
                    <td>' . $f['eveFecha'] . '</td>
                    <td>' . $f['eveDireccion'] . '</td>
                    <td>' . $f['eveEstado'] . '</td>
                    <td><a href="#" class="btn btn-primary"><i class="ti-pencil-alt"></i> Editar</a></td>
                    <td><a href="../../Controllers/eliminarEveAdmin.php?id=' . $f['id'] . '" class="btn btn-danger"><i class="ti-trash"></i> Eliminar</a></td>
                </tr>
                ';
        }
    }
}

function cargarMascotas()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarMasAdmin();

    if (!isset($result)) {
        echo '<h2>NO HAY MASCOTAS REGISTRADAS</h2>';
    } else {

        foreach ($result as $f) {
            echo '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto User" style="width: 60px; height: 60px; border-radius: 25%"></td>
                    <td>' . $f['masNombre'] . '</td>
                    <td>' . $f['masEdad'] . '</td>
                    <td>' . $f['masRaza'] . '</td>
                    <td>' . $f['masVacunas'] . '</td>
                    <td>' . $f['masEstSalud'] . '</td>
                    <td><a href="#" class="btn btn-primary"><i class="ti-pencil-alt"></i> Editar</a></td>
                    <td><a href="../../Controllers/eliminarMasAdmin.php?id=' . $f['masId'] . '" class="btn btn-danger"><i class="ti-trash"></i> Eliminar</a></td>
                </tr>
                ';
        }
    }
}

function perfil()
{

    //El session_start no debe estar en 2 models
    //session_start();
    //Variable de sesión del login
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->VerPerfil($id);

    foreach ($result as $f) {
        echo '
            <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
                <img src="../' . $f['foto'] . '" alt="Foto de admin" class="">
            </div>
            <!-- User Name -->
            <h5 class="text-center">' . $f['nombre'] . ' ' . $f['apellido'] . '</h5>
            <h6 class="text center">' . $f['rol'] . '</h6>
            <a href="home.php" class="btn btn-main-sm d-block m0a"><i class="fa fa-home mr-2"></i>Inicio</a>
          </div>
            ';
    }
}

function perfilEditar()
{
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->VerPerfil($id);

    foreach ($result as $f) {
        echo '
        <div class="col-lg-3">
            <div class="card perfil-user">
                <img class="w-100" src="../' . $f['foto'] . '" alt="Photo perfil">
                <h3 class="text-center pt-5 pb-1">' . $f['nombre'] . '</h3>
                <h4 class="text-center pb-4">' . $f['rol'] . '</h4>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card modificar-user">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                            role="tab" aria-controls="home" aria-selected="true">Perfil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logo-tab" data-toggle="tab" data-target="#logo" type="button"
                            role="tab" aria-controls="logo" aria-selected="false">Cambiar logo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="img-principal-tab" data-toggle="tab" data-target="#img-principal" type="button"
                            role="tab" aria-controls="img-principal" aria-selected="false">Cambiar imagen principal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button"
                            role="tab" aria-controls="contact" aria-selected="false">Cambiar clave</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
        
        
                    <div class="p-5 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
                        <form action="../../Controllers/modificarCuentaFundacion.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
        
                                <div class="form-group col-lg-6">
                                    <label class="mtop-4">Identificación:</label>
                                    <input readonly type="text" class="form-control" placeholder="Ej:10000004436" required name="id_user" value="' . $f['id_user'] . '">
                                </div>
        
                                <div class="form-group col-lg-6">
                                    <label>Tipo de Identificación:</label>
                                    <select disabled required name="tipo_doc" id="" class="form-control">
                                        <option value="' . $f['cod_tipo_doc'] . '">' . $f['tipo_doc'] . '</option>
                                        <option value="4">NIT</option>
                                        <option value="1">CC</option>
                                    </select>
                                </div>
        
                                <div class="form-group col-lg-12">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" placeholder="Ej:Diana" required name="nombre"
                                        value="' . $f['nombre'] . '">
                                </div>
        
                                <div class="form-group col-lg-6">
                                    <label>Correo electrónico:</label>
                                    <input type="email" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email" value="' . $f['email'] . '">
                                </div>
        
                                <div class="form-group col-lg-6">
                                    <label>Teléfono:</label>
                                    <input type="number" class="form-control" placeholder="Ej:3154942891" required name="telefono" value="' . $f['telefono'] . '">
                                </div>
        
                            </div>
                            <button type="submit" class="btn btn-main-sm btn-flat  mt-30 w-100">Actualizar datos</button>
        
                        </form>
                    </div>
        
        
                    <div class="p-5 tab-pane fade" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                        <form action="../../Controllers/modificarLogoFundacion.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="mtop-4">Identificación:</label>
                                    <input readonly type="text" class="form-control" placeholder="Ej:10000004436" required name="id_user" value="' . $f['id_user'] . '">
                                </div>
        
                                <div class="form-group col-lg-6">
                                    <label>Foto de logo</label>
                                    <input type="file" class="form-control" required name="logo" accept=".jpeg, .jpg, .png, .gif">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main-sm btn-flat  mt-30 w-100">Actualizar logo</button>
        
                        </form>
                    </div>

                    <div class="p-5 tab-pane fade" id="img-principal" role="tabpanel" aria-labelledby="img-principal-tab">
                        <form action="../../Controllers/modificarFotoFundacion.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="mtop-4">Identificación:</label>
                                    <input readonly type="text" class="form-control" placeholder="Ej:10000004436" required name="id_user" value="' . $f['id_user'] . '">
                                </div>
        
                                <div class="form-group col-lg-6">
                                    <label>Imagen principal</label>
                                    <input type="file" class="form-control" required name="foto" accept=".jpeg, .jpg, .png, .gif">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main-sm btn-flat  mt-30 w-100">Actualizar foto</button>
        
                        </form>
                    </div>
        
        
                    <div class="p-5 tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form action="../../Controllers/modificarClaveAdmin.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mtop-4">Identificación:</label>
                                    <input readonly type="text" class="form-control" placeholder="Ej:10000004436" required
                                        name="id_user" value="' . $f['id_user'] . '">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Nueva clave:</label>
                                    <input type="password" class="form-control" placeholder="Ej:**********" required
                                        name="clave">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirmar clave:</label>
                                    <input type="password" class="form-control" placeholder="Ej:**********" required
                                        name="clave2">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main-sm btn-flat  mt-30 w-100">Actualizar Clave</button>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}


function confirmarCierreSesion()
{

    //El session_start no debe estar en 2 models
    //session_start();
    //Variable de sesión del login
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->VerPerfil($id);

    foreach ($result as $f) {
        echo '
            <div id="popup">
                <div class="popup-cont ">
                     <h3>¿Estás seguro de cerrar sesión?</h3>
                    <p>¡Hola ' . $f['nombre'] . '! 
                    Si estás seguro de que deseas cerrar sesión, puedes hacerlo haciendo clic en el botón "Sí, Cerrar sesión" a continuación. Si no estás seguro o has llegado aquí por error, simplemente has clic en el botón "No, Cancelar" y seguirás conectado.</p>
                    <a class="cancelar" href="#" id="close">No, Cancelar</a>
                    <a class="cerrar" href="../../Controllers/cerrarSesion.php" id="close">Sí, Cerrar sesión</a>
                </div>
            </div>    
            ';
    }
}