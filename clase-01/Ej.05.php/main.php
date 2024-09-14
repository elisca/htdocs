<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”    
    */
    $num=61;

    $dNum=floor($num/10);
    $uNum=$num%10;
    $unCero=false;
    $texDecena=null;
    $texUnidades=null;

    $err=false;

    if($uNum==0){
        $unCero=true;
    }

    switch ($dNum) {
        case '2':
            if($unCero){
                $texDecena="Veinte.";
            }
            else{
                $texDecena="Veinti";
            }
            break;
        case '3':
            if($unCero){
                $texDecena="Treinta.";
            }
            else{
                $texDecena="Treinta y ";
            }
            break;
        case '4':
            if($unCero){
                $texDecena="Cuarenta.";
            }
            else{
                $texDecena="Cuarenta y ";
            }
            break;
        case '5':
            if($unCero){
                $texDecena="Cincuenta.";
            }
            else{
                $texDecena="Cincuenta y ";
            }
            break;
        case '6':
            if($unCero){
                $texDecena="Sesenta.";
            }
            else{
                $err=true;
            }
            break;
        default:
            $err=true;
            break;
    }

    if($err){
        echo "Número fuera de rango o valor no válido.<br>";
    }
    else{
        switch ($uNum) {
            case '0':
                $texUnidades="";
                break;
            case '1':
                $texUnidades="uno.";
                break;
            case '2':
                $texUnidades="dos.";
                break;
            case '3':
                $texUnidades="tres.";
                break;
            case '4':
                $texUnidades="cuatro.";
                break;
            case '5':
                $texUnidades="cinco.";
                break;
            case '6':
                $texUnidades="seis.";
                break;
            case '7':
                $texUnidades="siete.";
                break;
            case '8':
                $texUnidades="ocho.";
                break;
            case '9':
                $texUnidades="nueve.";
                break;                
            default:
                echo "ERROR: Unidades no válidas.<br>";
                break;
        }          
    }

    if($err==false){
        echo $texDecena,$texUnidades,"<br>";
    }
?>