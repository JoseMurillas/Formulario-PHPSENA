<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Usuarios</title>
        <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="Registro.css">
    </head>
    <body>
        <h1 class="text-center">Listado de Usuarios</h1>
        <div class="container">
            <?php 
                require_once "../Modelo/Usuario.php";
                $user = new Usuario();
                //Dato es mysqli_result
                $datos = $user->Consultar(); 
                
                echo "<table class=table>";
                while ($dato = mysqli_fetch_assoc($datos)){
                    echo"<tr>";
                        foreach ($dato as $key => $value){
                            echo"<td>".$value."</td>";
                        }
                    echo"</tr>";
                }
                echo"</table>";
            ?>
        </div>
    </body>
</html>