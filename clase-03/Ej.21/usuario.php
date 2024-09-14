<?php
    class Usuario{
        public $_nombre;
        public $_clave;
        public $_email;

        public static $_usuarios=[];

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

        public static function CargarUsuarios(){
            Usuario::$_usuarios=[];

            $archivo=fopen('usuarios.csv','r');

            if($archivo>=0){
                while(($linea=fgetcsv($archivo,0,',','"'))!=false){
                    $objUsuario=new Usuario($linea[0],$linea[1],$linea[2]);
                    array_push(Usuario::$_usuarios,$objUsuario);
                }

                if(fclose($archivo)==false){
                    echo "ERROR: No se pudo cerrar el archivo.<br>";
                }

                foreach (Usuario::$_usuarios as $auxUsuario) {
                    echo "<ul>";
                    echo "<li>Usuario: " . $auxUsuario->_nombre . " Clave: " . $auxUsuario->_clave . " Email: " . $auxUsuario->_email . "</li>";
                    echo "</ul>";
                }
            }
            else{
                echo "ERROR: No se pudo abrir el archivo.<br>";
            }
        }
    }
?>