<?php
    #Ezequiel Lisca
    /*
    Aplicación No 13 (Invertir palabra)
    Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
    función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
    deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
    “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
    pertenece a algún elemento del listado.
    0 en caso contrario.    
    */
    echo "Palabra: \"Recuperatorio\": Máx.: 11 Retorno: " . ValidarPalabra("Recuperatorio",11) . "<br>";
    echo "Palabra: \"Recuperatorio\": Máx.: 15 Retorno: " . ValidarPalabra("Recuperatorio",15) . "<br>";
    echo "Palabra: \"Aleatorio\": Máx.: 11 Retorno: " . ValidarPalabra("Aleatorio",11) . "<br>";

    function ValidarPalabra($palabra,$max){
        $palabrasValidas=array("Recuperatorio","Parcial","Programacion");
        $validaPalabra=false;

        $longCadena=strlen($palabra);
        if($longCadena==0 || $longCadena>$max){
            echo "ERROR: La cadena está vacía o supera la longitud máxima permitida.<br>";
        }

        foreach ($palabrasValidas as $auxPalabra) {
            if(!strcmp($palabra,$auxPalabra)){
                $validaPalabra=true;
                break;
            }
        }

        return $validaPalabra;
    }
?>