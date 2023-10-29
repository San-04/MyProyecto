<?php


$conexion = new mysqli("localhost","root","123456","login","3306");
//$conexion->set_charset("utf8");

if ($conexion->connect_error){

    echo "Conixion fallida: " . $conexion->connect_error;
} else {

    echo "Conexion a la base de datos exitosa";
}


?>