<?php 
    require_once ('Usuario.php');
    require_once("../Modelo/Encuesta.php");
    class Aprendiz extends Usuario{
        public $grupo;

        public function __construct($nombre,$nacimiento,$telefono,$correo,$grupo){
            parent::__construct($nombre,$nacimiento,$telefono,$correo);
            $this->grupo = $grupo;
        }
        public function CalcularEdad(){
            parent::CalcularEdad();

        }
        public function ResponderEncuesta(){
            $encuesta = new Encuesta();
            $encuesta->Crear();
        }
    }
?>