<?php 
    require_once ('Usuario.php');
    require_once("../Modelo/Encuesta.php");
    class Instructor extends Usuario{
        public $area;

        public function __construct($nombre,$nacimiento,$telefono,$correo,$area){
            parent::__construct($nombre,$nacimiento,$telefono,$correo);
            $this->area = $area;
        }

        public function CalcularEdad(){
            parent::CalcularEdad();

        }

        public function VerEncuesta(){
            $encuesta = new Encuesta();
            $encuesta->Enviar();
        }
    }
?>