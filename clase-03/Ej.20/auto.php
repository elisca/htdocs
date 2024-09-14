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
            $archivo=fopen('autos.csv','a+');
            if($archivo>=0){
                echo "NOTA: Archivo abierto para escritura con éxito.<br>";
                array_push(Auto::$autos,$auto);
                $campos=[$auto->_marca,$auto->_color,$auto->_precio,implode(",",$auto->_fecha)];
                fputcsv($archivo,$campos);

                if(fclose($archivo)){
                    echo "NOTA: Archivo cerrado con éxito.<br>";
                }
                else{
                    echo "ERROR: No se pudo cerrar el archivo.<br>";
                }
            }
            else{
                echo "ERROR: No se pudo crear o abrir el archivo.<br>";
            }
        }

        public static function LeerAutos(){
            Auto::$autos=[];
            $archivo=fopen('autos.csv','r');
            if($archivo>=0){
                echo "NOTA: Archivo abierto para lectura con éxito.<br>";
                while(($datosLinea=fgetcsv($archivo,0,','))!==false){
                    $auxAuto=new Auto($datosLinea[0],$datosLinea[1],$datosLinea[2],$datosLinea[3]);
                    array_push(Auto::$autos,$auxAuto);
                }
                if(fclose($archivo)==false){
                    echo "ERROR: No se pudo cerrar el archivo.<br>";
                }
            }
            else{
                echo "ERROR: No se pudo crear o abrir el archivo.<br>";
            }
        }
    }
?>