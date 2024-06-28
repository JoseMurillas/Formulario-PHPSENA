<?php 
    class Funcionario extends Usuario{
        public $cargo;

        public function CalcularEdad(){
            parent::CalcularEdad();

        }

        public function RegistroFuncionaro($cargo){
            $id = $this->ejecucion->Ejecutar("SELECT max(ID) FROM usuarios;");
            $id=mysqli_fetch_assoc($id);
            $sentencia = "INSERT INTO `funcionarios`(`cargo`,`IDUsuario`) VALUES ('$cargo',".$id['max(ID)'].");";
            $resultado=$this->ejecucion->Ejecutar($sentencia);
            return $resultado;
        }
    }
?>