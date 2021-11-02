<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- //imagen de fondo -->
    <style>
        .fondo{
            background: url('img/img/fondo.jpg');              
            background-position: center center;
            background-size: cover;
            height: 100vh;
        }
    </style>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js.bootstrap.min.css"></script>

    <?php include("includes/menu.php");
          include("includes/conexion.php");    
    ?> 
   
         <!-- querys -->
    <?php
    $consulta_unica = "SELECT * FROM `productos` ORDER by nombre";
    $resultado_unico = mysqli_query($conexion, $consulta_unica);

    ?>


    <title>Lista de precios </title>
</head>

<body class= "container" style="background-color:#FFD3DB">
<?php menu();?><br><br>

<div class="text-center"> 
    <h1>Lista de precios</h1>
</div><br><br>



<div class="row text-center">
    <div class="col-0"></div>
    <div class="col-12">

    <div class= "table-responsive">
    <table class="table table-bordered table-sm table-hover bg-light table-striped">
        <thead>
            <tr class="text-center bg-dark text-light fw-bold">
                <td>Descripcion</td><td>Precio</td><td>Stock</td><td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($columna = mysqli_fetch_array($resultado_unico)){
                echo "<tr>";
                    echo "<td>" .$columna['nombre']."</td>";
                    echo "<td>" ."$".$columna['precio']."</td>";
                    echo "<td>" .$columna['stock']."</td>";
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
    <div class="col-0"></div>
</div>







</body>
</html>