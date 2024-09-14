<?php
    class Usuario{
        public $_nombre;
        public $_clave;
        public $_email;

        public function __construct($nombre,$clave,$email){
            $this->_nombre=$nombre;
            $this->_clave=$clave;
            $this->_email=$email;
        }

        public static function AltaUsuario($usuario){
            $archivo=fopen('./usuarios.csv','a+');

            if($archivo>=0){
                $auxUsuario=[];
                foreach ($usuario as $value) {
                    array_push($auxUsuario,$value);
                }
                fputcsv($archivo,$auxUsuario,",");

                if(fclose($archivo)){
                    echo "Archivo CSV escrito exitosamente.<br>";
                }
                else{
                    echo "ERROR: No se pudo cerrar el archivo de usuarios.<br>";
                }
            }
            else{
                echo "ERROR: No se pudo abrir el archivo de usuarios.<br>";
            }
        }
    }
?>