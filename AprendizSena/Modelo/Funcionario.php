<?php 
    class Funcionario extends Usuario{
        public $cargo;

        public function __construct($nombre,$nacimiento,$telefono,$correo,$cargo){
            parent::__construct($nombre,$nacimiento,$telefono,$correo);
            $this->cargo = $cargo;
        }
        public function CalcularEdad(){
            parent::CalcularEdad();

        }
    }
?>