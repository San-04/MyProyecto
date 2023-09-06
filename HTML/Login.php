<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/Login.css">


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
        <button type="submit" id="submit">Inicias Sesion</button>
    </form>
     <Script src="../JS/Login.js"></Script>
</body>
</html>