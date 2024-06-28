<?php 
require_once '../Dao/Conexion.php';
    class Usuario{ 
        public $nombre;
        public $nacimiento;
        private $identificacion;
        public $telefono;
        public $correo;
        public $ejecucion;

        public function __setidentificacion($identificacion){
            $this->identificacion = $identificacion;
        }

        public function __getidentificacion(){
            return $this->identificacion;
        }

        public function __construct(){
            $this->ejecucion = new Conexion();
        }

        public function CalcularEdad(){
            $fechaFormateada = new DateTime($this->nacimiento);
            $fechaActual = new DateTime();
            $edad = $fechaActual->diff($fechaFormateada);
            echo $edad->y;
        }

        public function Registrar(){
            $this->ejecucion->Ejecutar("INSERT INTO usuarios (`nombre`,`nacimiento`,`identificacion`,`telefono`,`correo`,`clave`) VALUES('$this->nombre','$this->nacimiento',$this->identificacion,'$this->telefono','$this->correo','$this->identificacion');");
        }
        public function Consultar(){
            $r = $this->ejecucion->Ejecutar("SELECT `ID`,`nombre`,`nacimiento`,`identificacion`,`telefono`,`correo` FROM usuarios");
            return $r;
        }
        public function Editar(){
            $this->ejecucion->Ejecutar("");
        }
        Public function Eliminar(){
            $this->ejecucion->Ejecutar("");
        }
    }
?>