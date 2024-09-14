<?php
    #Ezequiel Lisca
    /*
    Aplicación No 19 (Auto)
    Realizar una clase llamada “Auto” que posea los siguientes atributos

    privados: _color (String)
    _precio (Double)
    _marca (String).
    _fecha (DateTime)

    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La marca y el color.

    ii. La marca, color y el precio.
    iii. La marca, color, precio y fecha.

    Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
    parámetro y que se sumará al precio del objeto.
    Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por
    parámetro y que mostrará todos los atributos de dicho objeto.
    Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo devolverá
    TRUE si ambos “Autos” son de la misma marca.
    Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
    misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma de los
    precios o cero si no se pudo realizar la operación.
    Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    Crear un método de clase para poder hacer el alta de un Auto, guardando los datos en un archivo
    autos.csv.
    Hacer los métodos necesarios en la clase Auto para poder leer el listado desde el archivo
    autos.csv
    Se deben cargar los datos en un array de autos.
    En testAuto.php:
    ● Crear dos objetos “Auto” de la misma marca y distinto color.
    ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio. 
    ● Crear un objeto “Auto” utilizando la sobrecarga restante.
    ● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al
    atributo precio.
    ● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
    resultado obtenido.
    ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
    ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)
    */

    require_once 'auto.php';

    #Punto 1:
    $objAuto1=new Auto("Peugeot","Negro");
    $objAuto2=new Auto("Peugeot","Blanco");

    #Punto 2:
    $objAuto3=new Auto("Volkswagen","Gris",1000);
    $objAuto4=new Auto("Volkswagen","Gris",2000);

    #Punto 3:
    $objAuto5=new Auto("Peugeot","Negro",1000,'11/09/2024');

    #Punto 4:
    $objAuto3->AgregarImpuestos(1500);
    $objAuto4->AgregarImpuestos(1500);
    $objAuto5->AgregarImpuestos(1500);

    #Punto 5:
    Auto::Add($objAuto1,$objAuto2);

    #Punto 6:
    if($objAuto1->Equals($objAuto2)){
        echo "El auto 1 es idéntico al auto 2.<br>";
    }
    else{
        echo "El auto 1 es distinto al auto 2.<br>";
    }

    if($objAuto1->Equals($objAuto5)){
        echo "El auto 1 es idéntico al auto 5.<br>";
    }
    else{
        echo "El auto 1 es distinto al auto 5.<br>";
    }

    #Punto 7:
    Auto::MostrarAuto($objAuto1);
    Auto::MostrarAuto($objAuto3);
    Auto::MostrarAuto($objAuto5);

    #Leer autos del CSV.
    Auto::CrearAuto($objAuto1);
    echo var_dump(Auto::$autos) . "<br>";

    Auto::LeerAutos();
    echo var_dump(Auto::$autos) . "<br>";
?>