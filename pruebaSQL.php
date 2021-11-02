<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js.bootstrap.min.css"></script>





    <?php
//Paso 1 datos de conexion

$usuario= 'root';
$clave= '';
$servidor= 'localhost';
$basededatos= 'tp1'; 



//Paso 2 crear la conexion

$conexion = mysqli_connect ($servidor, $usuario, $clave)
    or die('no se ha podido conectar al servidor');



//Paso 3 conectar a la base de date_offset_get

$db = mysqli_select_db ($conexion, $basededatos)
    or die('no se ha podido conectar a la base');



//Paso 4 definir la consulta o consultas SQL y guardarla en una variable

// $consulta = 'select * from usuario';
    $consulta = "select usuario from usuario";
    $consulta1 = "select clave from usuario";
    $consulta2 = "select rol from usuario";
    $consulta3 = "select * from usuario";

    $resultado = mysqli_query($conexion, $consulta);
    $resultado1 = mysqli_query($conexion, $consulta1);
    $resultado2 = mysqli_query($conexion, $consulta2);
    $resultado3 = mysqli_query($conexion, $consulta3);

        
    while($fila = mysqli_fetch_assoc($resultado)){
        $t_usuarios = $fila['usuario'];
    }

    while($fila = mysqli_fetch_assoc($resultado1)){
        $t_clave = $fila['clave'];
    }

    while($fila = mysqli_fetch_assoc($resultado2)){
        $t_rol = $fila['rol'];
    }




//Paso 5 ejecutamos la consulta SQL

// $resultado = mysqli_query ($conexion, $consulta)
//     or die ('no se ha podido ejecutar la consulta');

//     while($fila = mysqli_fetch_assoc($resultado)){
//         $cantidad_usuarios = $fila['usuario'];
//     }





    //Paso 6 cierro la conexion 

mysqli_close($conexion);


?>

    <title>Document</title>
</head>
<body>
    
<br><br><br>

<div class="row">
    <div class="col-3">
        <button type="button" class="btn btn-primary">Usuario: <?php echo $t_usuarios?> </button>
    </div>
    <div class="col-3">
     <button type="button" class="btn btn-primary">Usuario: <?php echo $t_clave?> </button>

    </div>
    <div class="col-3">
        <button type="button" class="btn btn-primary">Usuario: <?php echo $t_rol?> </button>


    </div>
    <div class="col-3"></div>

</div>
<br>
<br>

<!--------------------------------------------  -------------------------------------------------->

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">

    <div class= "table-responsive">
    <table class="table table-bordered table-sm table-hover table-dark">
        <thead>
            <tr class="text-center">
                <td>Usuario</td><td>Clave</td><td>Rol</td><td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($columna = mysqli_fetch_array($resultado3)){
                echo "<tr>";
                    echo "<td>" .$columna['usuario']."</td>";
                    echo "<td>" .$columna['clave']."</td>";
                    echo "<td>" .$columna['rol']."</td>";
                    echo "<td>
                           <a href='#' target='_blank'>Editar</a>
                           <a href='#' target='_blank'>Eliminar</a>
                           </td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>

</div>

    </div>
    <div class="col-2"></div>
</div>














</body>
</html>