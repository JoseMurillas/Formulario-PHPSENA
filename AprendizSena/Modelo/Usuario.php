<?php 
    class Usuario{
        public $nombre;
        public $nacimiento;
        private $identificacion;
        public $telefono;
        public $correo;

        public function __setidentificacion($identificacion){
            $this->identificacion = $identificacion;
        }

        public function __getidentificacion(){
            return $this->identificacion;
        }

        public function __construct($nombre,$nacimiento,$telefono,$correo){
            $this->nombre = $nombre;
            $this->nacimiento = $nacimiento;
            $this->telefono = $telefono;
            $this->correo = $correo;
        }

        public function CalcularEdad(){
            date_default_timezone_set("America/Bogota");
            
            $fechaFormateada = new DateTime($this->nacimiento);
            $fechaActual = new DateTime();
            $edad = $fechaActual->diff($fechaFormateada);
            echo $edad->y;
        }

        public function Registrar(){

        }
        public function Consultar(){

        }
        public function Editar(){

        }
        Public function Eliminar(){

        }
    }
?>