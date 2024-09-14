<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 7 (Mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
    utilizando las estructuras while y foreach.    
    */
    $arrayImpares=array();
    $contImpares=0;
    $i=1;

    while($contImpares<10){
        if($i==1 || $i%2!=0){
            $contImpares++;
            array_push($arrayImpares,$i);
        }
        $i++;
    }

    echo "FOR:<br>";
    for($i=0;$i<=9;$i++){
        echo "Impar[",$i+1,"]: ",$arrayImpares[$i]," ";
    }
    echo "<br>";

    echo "FOREACH:<br>";
    foreach ($arrayImpares as $key => $value) {
        echo "Impar[",$key+1,"]: ",$value," ";
    }
    echo "<br>";

    echo "WHILE:<br>";
    $i=0;
    while($i<10){
        echo "Impar[",$i+1,"]: ",$arrayImpares[$i]," ";
        $i++;
    }
    echo "<br>";
?>