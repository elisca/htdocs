<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.    
    */

    $lapicera1=array('color'=>'Azul','marca'=>'BIC','trazo'=>'Estándar','precio'=>'1000');
    $lapicera2=array('color'=>'Rojo','marca'=>'BIC','trazo'=>'Fino','precio'=>'1250');
    $lapicera3=array('color'=>'Negro','marca'=>'Fabel Castell','trazo'=>'Fino','precio'=>'850');

    echo "Lapicera 1:<br>";
    foreach ($lapicera1 as $key => $value) {
        echo $key,":",$value," ,";
    }
    echo "<br>";

    echo "Lapicera 2:<br>";
    foreach ($lapicera2 as $key => $value) {
        echo $key,":",$value," ,";
    }
    echo "<br>";

    echo "Lapicera 3:<br>";
    foreach ($lapicera3 as $key => $value) {
        echo $key,":",$value," ,";
    }
    echo "<br>";
?>