<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js.bootstrap.min.css"></script>


    <?php include("includes/menu.php");
          include("includes/conexion.php");    
    ?> 

        <!-- //imagen de fondo -->
    <style>
        .fondo{
            background: url('img/img/fondo.jpg');              
            background-position: center center;
            background-size: cover;
            height: 50vh;
        }
    </style>

    <title>Login</title>
</head>

<body class="container" style="background-color:#FFD3DB">

    <?php menu(); ?><br><br>
    <div style="margin-left: 8rem" >
            <h1 style="color: white" >Venta de frutas y verduras congeladas</h1>
        </div>

        <div class=row>
            <div class="col-4"></div>
            <div class="col-4">
                <form action="login_destino.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Usuario</label><br>
                        <input type="text" id="usuario" name="usuario">
                    </div>    
                    <div class="form-group">
                        <label for="nombre">Nombre y Apellido del usuario</label><br>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label><br>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>  
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>

            </div>
            <div class="col-4"></div>
        </div>

        <br><br><br><br>

</body>
</html>