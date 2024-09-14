<?php
    #Ezequiel Lisca
    /*
    Aplicación No 22 ( Login)
    Archivo: Login.php
    método:POST
    Recibe los datos del usuario(clave,mail )por POST ,
    crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado, Retorna
    un :
    “Verificado” si el usuario existe y coincide la clave también.
    “Error en los datos” si esta mal la clave.
    “Usuario no registrado si no coincide el mail“
    Hacer los métodos necesarios en la clase usuario.
    */

    require_once 'usuario.php';

    $metodoPeticion=$_SERVER['REQUEST_METHOD'];

    switch ($metodoPeticion) {
        case 'POST':
            if(isset($_POST['clave']) && isset($_POST['email']) && $_POST['clave']!="" && $_POST['email']!=""){
                $auxClave=$_POST['clave'];
                $auxEmail=$_POST['email'];
                Usuario::CargarUsuarios(false);
                echo Usuario::ValidarUsuario($auxClave,$auxEmail) . "<br>";
            }
            else{
                echo "ERROR: No se obtiene el listado ingresado o el campo está vacío.<br>";
            }
            break;
        default:
            echo "ERROR: Método de petición no válido.<br>";
            break;
    }
?>