<?php
    class Encuesta{
        public $fecha;
        public $hora;
        public $aprendiz;

        /*public function __construct($fecha,$hora,$aprendiz){
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->aprendiz = $aprendiz;
        }*/

        public function Crear(){
            echo "Bienvenido pana a la encuesta :D";
        }
        public function Enviar(){
            echo "Se envio :D resultados";
        }
    }
?>