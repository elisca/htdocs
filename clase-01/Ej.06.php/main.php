<?php
    #Ezequiel Lisca
    /*
    Aplicación Nº 6 (Carga aleatoria)
    Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand). Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado.    
    */
    $promNums=0;
    $num=0;
    $arrayNums=array();

    for($i=1;$i<=5;$i++){
        $num=(int)rand(0,9);
        array_push($arrayNums,$num);
        $promNums+=$num;
    }

    $promNums/=5;

    echo "Resultado: ",$promNums,"<br>";

    if($promNums<6){
        echo "Promedio de números menor a 6.<br>";
    }
    elseif($promNums==6){
        echo "Promedio de números es 6.<br>";
    }
    else{
        echo "Promedio de números mayor a 6.<br>";
    }

    var_dump($arrayNums);
?>