<?php
    #Ezequiel Lisca
    /*
    Aplicación No 21 ( Listado CSV y array de usuarios)
    Archivo: listado.php
    método:GET
    Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
    usuarios).
    En el caso de usuarios carga los datos del archivo usuarios.csv.
    se deben cargar los datos en un array de usuarios.
    Retorna los datos que contiene ese array en una lista

    <ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
    </ul>
    Hacer los métodos necesarios en la clase usuario
    */

    require_once 'usuario.php';

    $metodoPeticion=$_SERVER['REQUEST_METHOD'];

    switch ($metodoPeticion) {
        case 'GET':
            if($_GET['listado']=="usuarios"){
                Usuario::CargarUsuarios();
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