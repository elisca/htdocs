<?php
    #Ezequiel Lisca
    /*
    Aplicación No 20 BIS (Registro CSV)
    Archivo: registro.php
    método:POST
    Recibe los datos del usuario(nombre, clave,mail )por POST ,
    crear un objeto y utilizar sus métodos para poder hacer el alta,
    guardando los datos en usuarios.csv.
    retorna si se pudo agregar o no.
    Cada usuario se agrega en un renglón diferente al anterior.
    Hacer los métodos necesarios en la clase usuario
    */

    require_once 'usuario.php';

    $metodoPeticion=$_SERVER["REQUEST_METHOD"];

    switch ($metodoPeticion) {
        case 'POST':
            $auxUsuario=$_POST['usuario'];
            $auxClave=$_POST['clave'];
            $auxEmail=$_POST['email'];

            if(isset($auxUsuario) && isset($auxClave) && isset($auxEmail) && $auxUsuario!="" && $auxClave!="" && $auxEmail!=""){
                $objUsuario=new Usuario($auxUsuario,$auxClave,$auxEmail);

                Usuario::AltaUsuario($objUsuario);
            }
            else{
                echo "ERROR: Falta algún dato en la petición.<br>";
            }
            break;
        default:
            echo "ERROR: Método de petición no válida.<br>";
            break;
    }
?>