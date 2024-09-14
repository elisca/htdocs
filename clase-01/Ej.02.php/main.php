<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 2 (Mostrar fecha y estación)
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple.
    */

    $fecha1=date('d/m/Y');
    echo $fecha1,"<br>";

    $fecha2=date('j/n/y');
    echo $fecha2,"<br>";

    $fecha3=date('l\, d F \o\f Y');
    echo $fecha3,"<br>";

    $mes=date('n');
    $dia=date('j');

    $estacion=null;

    switch ($mes) {
        case 1:
            $estacion="Verano";
            break;
        case 2:
            $estacion="Verano";
            break;
        case 3:
            if($dia<21){
                $estacion="Verano";
            }
            else{
                $estacion="Otoño";
            }
            break;
        case 4:
            $estacion="Otoño";
            break;
        case 5:
            $estacion="Otoño";
            break;
        case 6:
            if($dia<21){
                $estacion="Otoño";
            }
            else{
                $estacion="Invierno";
            }
            break;
        case 7:
            $estacion="Invierno";
            break;
        case 8:
            $estacion="Invierno";
            break;
        case 9:
            if($dia<21){
                $estacion="Invierno";
            }
            else{
                $estacion="Primavera";
            }
            break;
        case 10:
            $estacion="Primavera";
            break;
        case 11:
            $estacion="Primavera";
            break;
        case 12:
            if($dia<21){
                $estacion="Primavera";
            }
            else{
                $estacion="Verano";
            }
            break;
        default:
            echo "ERROR: Mes incorrecto.<br>";
            break;
    }

    echo "Estación del año: ",$estacion,"<br>";
?>