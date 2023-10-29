<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">


</head>
<body>

    <form method="POST" action="../PHP/Login_bd.php">
        <img src="../HTML/IMG/profile-icon-login-head-icon-vector.jpg" alt="">        
        <label for="username">Usuario</label>
        <input type="text" id="username" placeholder="Usuario" name="usuario">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Contraseña" name="contraseña">
        <div class="mostrar">
            <input type="checkbox" id="visible">
            <label for="visible">Mostrar Contraseña</label>
        </div>
        <button type="button" id="enviar">Inicias Sesion</button>
    </form>
     <script src="../js/Login.js"></script>
</body>
</html>