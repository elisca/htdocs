<?php
    class Auto{
        public $_color;
        public $_precio;
        public $_marca;
        public $_fecha;

        public static $autos=array();

        public function __construct($marca,$color,$precio=0,$fecha='10/9/2024')
        {
            $this->_marca=$marca;
            $this->_color=$color;
            $this->_precio=$precio;
            $this->_fecha=$fecha;
        }

        public function AgregarImpuestos($impuesto){
            $this->_precio+=$impuesto;
            echo "Nuevo precio: $ " . $this->_precio . "<br>";
        }

        public static function MostrarAuto($auto){
            echo "Marca: " . $auto->_marca . " Color: " . $auto->_color . " Precio: $ " . $auto->_precio . " Fecha: " . $auto->_fecha . "<br>";
        }

        public function Equals($auto){
            $retorno=false;

            if($this->_marca==$auto->_marca && $this->_color==$auto->_color){
                $retorno=true;
            }

            return $retorno;
        }

        public static function Add($autoA,$autoB){
            $acumPrecios=0;

            if($autoA->Equals($autoB)){
                $acumPrecios=$autoA->_precio+$autoB->_precio;
                echo "Suma total: $ " . $acumPrecios . "<br>";
            }
            else{
                echo "Los autos a sumar sus valores no son idénticos.<br>";
            }

            return $acumPrecios;
        }

        public static function CrearAuto($auto){
            array_push(Auto::$autos,$auto);
        }
    }
?>