<?php 
    class Ayuda{
        public $tipo;
        public $duracion;
        public $descripcion;
        public $requisito;

        public function __construct($tipo,$duracion,$descripcion,$requisito){
            $this->tipo = $tipo;
            $this->duracion = $duracion;
            $this->descripcion = $descripcion;
            $this->requisito = $requisito;
        }
    }
?>