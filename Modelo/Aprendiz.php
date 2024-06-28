<?php 
    require_once ('Usuario.php');
    require_once("../Modelo/Encuesta.php");
    require_once '../Dao/DatosConexion.php';
    require_once '../Dao/Conexion.php';

    class Aprendiz extends Usuario{
        public $grupo;

        public function CalcularEdad(){
            parent::CalcularEdad();
        }

        public function RegistroAprendiz($grupo){
            $id = $this->ejecucion->Ejecutar("SELECT max(ID) FROM usuarios;");
            $id=mysqli_fetch_assoc($id);
            $sentencia = "INSERT INTO `aprendices`(`grupo`,`IDUsuario`) VALUES ('$grupo',".$id['max(ID)'].");";
            $resultado=$this->ejecucion->Ejecutar($sentencia);
            return $resultado;
        }
        public function ResponderEncuesta(){
            $encuesta = new Encuesta();
            $encuesta->Crear();
        }
    }
?>