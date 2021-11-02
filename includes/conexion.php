<?php

//Paso 1 datos de conexion

$usuario= 'root';
$clave= '';
$servidor= 'localhost';
$basededatos= 'tp_grupal'; 



//Paso 2 crear la conexion

$conexion = mysqli_connect ($servidor, $usuario, $clave)
    or die('no se ha podido conectar al $servidor');



//Paso 3 conectar a la base de date_offset_get

$db = mysqli_select_db ($conexion, $basededatos)
    or die('no se ha podido conectar a la base');



// //Paso 4 definir la consulta o consultas SQL y guardarla en una variable

// $consulta = 'select * from usuarios';



// //Paso 5 ejecutamos la consulta SQL

// $resultado = mysqli_query ($conexion, $consulta)
//     or die ('no se ha podido ejecutar la consulta');



// //Paso 6 cierro la conexion 

// mysqli_close($conexion);



?>
