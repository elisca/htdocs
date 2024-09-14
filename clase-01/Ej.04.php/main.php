<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 4 (Calculadora)
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
    símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.
    */
    $op1=1;
    $op2=0;
    $operador='+';
    $err=false;

    switch ($operador) {
        case '+':
            $op1+=$op2;
            break;
        case '-':
            $op1-=$op2;
            break;
        case '*':
            $op1*=$op2;
            break;
        case '/':
            if($op2!=0){
                $op1/=$op2;
            }
            else{
                $err=true;
                echo "ERROR: No se admite división por cero.<br>";
            }
            break;
        default:
            echo "ERROR: Operador matemático no válido.<br>";
            break;
    }

    if($err==false){
        echo "Resultado: ",$op1;
    }
?>