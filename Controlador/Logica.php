<?php 
    require("../Modelo/Usuario.php");
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST["nombre"];
        $nacimiento = $_POST["nacimiento"];
        $identificacion = $_POST["identificacion"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $rol = $_POST["rol"];
        $cargo = $_POST["cargo"];

        $usuario = new Usuario();
        $usuario->nombre = $nombre;
        $usuario->nacimiento = $nacimiento;
        $usuario->telefono = $telefono;
        $usuario->correo = $correo;
        $usuario->__setidentificacion( $identificacion);
        $usuario->Registrar();

        switch($rol){
            case '1':
                require("../Modelo/Aprendiz.php");
                $curso = $_POST['curso'];
                $ape1 = new Aprendiz();
                $ape1->RegistroAprendiz($curso);
                break;
            case '2':
                require("../Modelo/Funcionario.php");
                $cargo = $_POST['cargo'];
                $func1 = new Funcionario();
                $func1->RegistroFuncionaro( $cargo);
                break;
            case '3':
                require("../Modelo/Instructor.php");
                $area = $_POST['area'];
                $instruc1 = new Instructor();
                $instruc1->RegistroInstructor($area);
                break;
            default:
                echo "Dato vacio";
        }
        
    }else{
        echo"ERROR METODO DE ENVIO";
    }

?>