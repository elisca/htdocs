<?php
    #Ezequiel Lisca
    /*
        Aplicación Nº 10 (Arrays de Arrays)
        Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
        contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
        Arrays de Arrays.
    */

    $lapicera1=array('color'=>'Azul','marca'=>'BIC','trazo'=>'Estándar','precio'=>'1000');
    $lapicera2=array('color'=>'Rojo','marca'=>'BIC','trazo'=>'Fino','precio'=>'1250');
    $lapicera3=array('color'=>'Negro','marca'=>'Fabel Castell','trazo'=>'Fino','precio'=>'850');
    
    $arrayInd=array($lapicera1,$lapicera2,$lapicera3);
    $arrayAsoc=array('L1'=>$lapicera1,'L2'=>$lapicera2,'L3'=>$lapicera3);

    echo "ARRAY ASOCIATIVO:<br>";
    foreach ($arrayAsoc as $key => $value) {
        foreach ($value as $keyB => $valueB) {
            echo $keyB,": ",$valueB,", ";
        }
        echo "<br>";
    }

    echo "<br>";

    echo "ARRAY INDEXADO:<br>";
    foreach ($arrayInd as $key => $value) {
        foreach ($value as $keyB => $valueB) {
            echo $keyB,": ",$valueB,", ";
        }
        echo "<br>";
    }
?>