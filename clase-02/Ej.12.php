<?php
    #Ezequiel Lisca
    /*
    Aplicación No 12 (Invertir palabra)
    Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
    de las letras del Array.
    Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
    */    
    
    function invertirCadena($cadena){
        $cadenaInvertida="";

        if($cadena=="" || $cadena=null){
            echo "Error: Cadena nula o vacía.<br>";
        }
        else{
            $longCadena=strlen($cadena);
            $j=0;

            for($i=$longCadena-1;$i>=0;$i--){
                $cadenaInvertida[$j]=$cadenaInvertida[$j] . $cadena[$i];
                $j++;
            }

            echo "Cadena original: " . $cadena . " Cadena invertida: " . $cadenaInvertida . "<br>";
        }
    }
?>