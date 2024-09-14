<?php
    require_once 'auto.php';

    class Garage{
        private $_razonSocial;
        private $_precioPorHora;
        private $_autos=array();

        public static $_garages=[];

        public function __construct($razonSocial,$precioHora=0)
        {
            $this->_razonSocial=$razonSocial;
            $this->_precioPorHora=$precioHora;
        }

        public function MostrarGarage(){
            echo "Razón Social: " . $this->_razonSocial . " Precio por Hora: $ " . $this->_precioPorHora . "<br>";
        }

        public function Equals($auto){
            $retorno=false;

            foreach ($this->_autos as $auxAuto) {
                if($auxAuto->Equals($auto)){
                    $retorno=true;
                    break;
                }
            }

            return $retorno;
        }

        public function BuscarIdAuto($auto){
            $retorno=-1;

            for($i=0;$i<count($this->_autos);$i++){
                if($this->_autos[$i]->Equals($auto)){
                    $retorno=$i;
                    break;
                }
            }

            return $retorno;
        }

        public function Add($auto){
            $retorno=false;

            if($this->BuscarIdAuto($auto)<0){
                array_push($this->_autos,$auto);
                $retorno=true;
                echo "Auto agregado al garage.<br>";
            }
            else{
                echo "El auto que se intenta agregar al garage actualmente está contenido.<br>";
            }

            return $retorno;
        }

        public function Remove($auto){
            $retorno=false;

            $idAuto=$this->BuscarIdAuto($auto);
            if($idAuto>=0){
                array_splice($this->_autos,$idAuto,1);
                $retorno=true;
                echo "Auto removido del garage.<br>";
            }
            else{
                echo "El auto que se intenta remover del garage actualmente no está contenido.<br>";
            }

            return $retorno;
        }

        public static function CrearGarage($garage){
            array_push(Garage::$_garages,$garage);

            if($archivo=fopen('garages.csv','a+')){
                echo "Archivo de garages creado exitosamente.<br>";

                #Convierte lista de autos en un array
                $auxAutos=[];
                $camposAuto=[];
                foreach ($garage->_autos as $auxAuto) {
                    array_push($camposAuto,$auxAuto->_marca,$auxAuto->_color,$auxAuto->_precio,$auxAuto->_fecha);
                    $camposAuto=implode(",",$camposAuto);
                    array_push($auxAutos,$camposAuto);
                }
                $campos=array($garage->_razonSocial,$garage->_precioPorHora,implode(",",$auxAutos));
                fputcsv($archivo,$campos,',');

                if(fclose($archivo)){
                    echo "Archivo de garages cerrado exitosamente.<br>";
                }
                else{
                    echo "ERROR: No se pudo cerrar el archivo de garages.<br>";
                }
            }
            else{
                echo "ERROR: Archivo de garages no pudo ser creado.<br>";
            }
        }

        public static function LeerGarages(){
            Garage::$_garages=[];

            if(($archivo=fopen('garages.csv','r'))>=0){
                echo "Archivo de garages leído exitosamente.<br>";

                while(($datosLinea=fgetcsv($archivo,0,','))!=false){
                    $auxGarage=new Garage($datosLinea[0],$datosLinea[1]);
                    $auxGarage->_autos=$datosLinea[2];
                    array_push(Garage::$_garages,$auxGarage);
                }
            }
            else{
                echo "ERROR: Archivo de garages no pudo ser leído.<br>";
            }
        }
    }
?>