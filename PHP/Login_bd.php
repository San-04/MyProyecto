<?php
session_start();
include 'conexion_bd.php';

$correo = $_POST['usuario'];
$password = $_POST['contraseña'];
$validar = mysqli_query($conexion, "SELECT * FROM usuarios
 WHERE user = '$correo' AND password = '$password'");
if(mysqli_num_rows($validar) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../HTML/index.php");
    exit;
} else {
    echo ' 
    <script>
         window.location = "../HTML/Login.php";
    </script>
    ';
}
?>
