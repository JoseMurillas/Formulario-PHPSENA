<?php 
    require_once ('Usuario.php');
    require_once("../Modelo/Encuesta.php");
    class Instructor extends Usuario{
        public $area;


        public function CalcularEdad(){
            parent::CalcularEdad();

        }

        public function RegistroInstructor($area){
            $id = $this->ejecucion->Ejecutar("SELECT max(ID) FROM usuarios;");
            $id=mysqli_fetch_assoc($id);
            $sentencia = "INSERT INTO `instructores`(`area`,`IDUsuario`) VALUES ('$area',".$id['max(ID)'].");";
            $resultado=$this->ejecucion->Ejecutar($sentencia);
            return $resultado;
        }

        public function VerEncuesta(){
            $encuesta = new Encuesta();
            $encuesta->Enviar();
        }
    }
?>