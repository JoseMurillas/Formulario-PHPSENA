<?php 
    require("../Modelo/Usuario.php");
    require("../Modelo/Aprendiz.php");
    require("../Modelo/Funcionario.php");
    require("../Modelo/Instructor.php");
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST["nombre"];
        $nacimiento = $_POST["nacimiento"];
        $identificacion = $_POST["identificacion"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $rol = $_POST["rol"];
        $cargo = $_POST["cargo"];

        switch($rol){
            case '1':
                $aprendiz = new Aprendiz($nombre,$nacimiento,$telefono,$correo,$cargo);
                $aprendiz->__setidentificacion($identificacion);
                echo $aprendiz->CalcularEdad(). "<br>";
                echo "<br>".$aprendiz->ResponderEncuesta();
                echo $aprendiz->__getidentificacion();
                break;
            case '2':
                $funcionario = new Funcionario($nombre,$nacimiento,$telefono,$correo,$cargo);
                $funcionario->__setidentificacion($identificacion);
                echo $funcionario->CalcularEdad();
                echo "<br>".$funcionario->__getidentificacion();
                break;
            case '3':
                $instructor = new Instructor($nombre,$nacimiento,$telefono,$correo,$cargo);
                $instructor->__setidentificacion($identificacion);
                echo $instructor->CalcularEdad()."<br>";
                echo "<br>".$instructor->VerEncuesta();
                echo $instructor->__getidentificacion();
                break;
            default:
                echo "Dato vacio";
        }

    }else{
        echo"ERROR METODO DE ENVIO";
    }
?>