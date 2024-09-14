<?php
    //Ezequiel Lisca
    /*
    Aplicación Nº 1 (Sumar números)
    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.
    */

    $acum=0;
    $num=1;
    
    echo "Números sumados: ";

    while($acum+$num<1000){
        $acum+=$num;
        echo $num,",";
        $num++;
    }

    echo "<br>Suma total: ",$acum,"<br>";
?>