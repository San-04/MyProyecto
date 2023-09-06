<?php
 session_start();
 if (!isset($_SESSION['usuario'])){
 echo '
      <script>
      alert("No has iniciado sesion iniciar sesion");
      window.location = "Login.php";
      </script>
    ';
    die();
  }
  session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1.0</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://th.bing.com/th/id/OIP.4ShwfVCLIj0G2tzod9pHvgAAAA?pid=ImgDet&rs=1"/>
    <link rel="stylesheet" href="../CSS/index.css">
  </head>
  <body>
  <header>
    <div class="despegable">
       <label for="abrir-cesar">&#9776;   <span class="abrir">ABRIR</span> <span class="cerrar"></span></label>
         <ul class="link">
           <li><a href="index.HTML" class="header_item">INICIO</a></li>
           <li><a href="formulario.html" class="header_item">FORMULARIO DE REGISTRO</a></li>
           <li><a href="Inicio de sesion.html" class="header_item">VOLVER A INGRESAR</a></li>
           <li><a href="Navegadores.html" class="header_item">TIPOS DE NAVEGADORES</a></li>
         </ul>
    </div>
  </header>
<h1>Mozilla firefox</h1>
<br />
<div id="div-firefox"><img id="img-firefox" src="https://th.bing.com/th/id/OIP.4ShwfVCLIj0G2tzod9pHvgAAAA?pid=ImgDet&rs=1" width="150" heigth="200" alt="un zorro en llamas rodeando la Tierra"></div>
<br />
<p>Mozilla Firefox es un navegador web libre y de código abierto desarrollado para distintas plataformas, está coordinado por la Corporación Mozilla y la Fundación Mozilla.</p>
<br />
<h3>Principales características de firefox</h3>
  <ul id="cr">
   <li>Navega más rápido</li>
   <li>Memoria equilibrada</li>
   <li>Bloqueo de rastreadores de publicidad</li>
   <li>Sincroniza entre dispositivos</li>
   <li>Permite traducir la web</li>
  </ul>
<br />
<p>leer el <a href="https://www.mozilla.org/es-ES/about/manifesto/">Manifesto de mozilla</a> para aprender aún más sobre los valores y principios que guian la búsqueda de nuestra misión.
</p>
<br />
<p>
  Para las personas interesadas en pertenecer a nuestra <mark>comunidad</mark> dar <i>click</i> en el siguiente <b>botón de registro</b>
</p>
<p>
  <a href= "formulario.html"><input type="button"  value="Formulario de registro"></a>
  </p>
  </body>
</html>

