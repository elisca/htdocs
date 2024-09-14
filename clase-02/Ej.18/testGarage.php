<?php
    #Ezequiel Lisca
    /*
    Aplicación No 18 (Auto - Garage)
    Crear la clase Garage que posea como atributos privados:

    _razonSocial (String)
    _precioPorHora (Double)
    _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La razón social.
    ii. La razón social, y el precio por hora.

    Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
    que mostrará todos los atributos del objeto.
    Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    (sólo si el auto no está en el garaje, de lo contrario informarlo).
    Ejemplo: $miGarage->Add($autoUno);
    Crear el método de instancia “Remove” para que permita quitar un objeto “Auto”
    del “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
    $miGarage->Remove($autoUno);
    En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
    los métodos.
    */
    require_once 'garage.php';

    #Crea garages
    $objGarage01=new Garage("RS 1");
    $objGarage02=new Garage("RS 2",3000);

    #Crea autos
    $objAuto1=new Auto("Peugeot","Negro");
    $objAuto2=new Auto("Peugeot","Blanco");
    $objAuto3=new Auto("Volkswagen","Gris",1000);
    $objAuto4=new Auto("Volkswagen","Gris",2000);
    $objAuto5=new Auto("Peugeot","Negro",1000,'11/09/2024');

    #Agrega autos a los garages
    $objGarage01->Add($objAuto1);
    $objGarage01->Add($objAuto2);

    $objGarage02->Add($objAuto3);
    $objGarage02->Add($objAuto4);

    #Intenta agregar un auto a un garage que ya está dentro
    $objGarage01->Add($objAuto1);

    #Intenta quitar un auto de un garage en donde no está
    $objGarage01->Remove($objAuto5);

    #Verifica si un auto está en un garage(el auto está ingresado)
    $objGarage01->Equals($objAuto1);

    #Verifica si un auto está en un garage(el auto no está ingresado)
    $objGarage01->Equals($objAuto5);
?>