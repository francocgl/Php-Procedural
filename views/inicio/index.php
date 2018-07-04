<?php
use Social\Core\App;
use Social\Model\Usuarios; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
  </head>
  <body>
  <header>

    <h1>Red social</h1>
    <ul>
      <li><a href="#">INICIO</a></li>
      <li><a href="#">PERFIL</a></li>
    </ul>

  </header>

  <main>
    <p>Pagina principal</p>
    <h2>Post</h2>
    <form class="" action="#" method="post">
      <textarea name="descripcion" rows="8" cols="80"></textarea>
      <input type="submit" name="" value="Enviar">
    </form>
    <div class="">
      <h2>Login</h2>
      <form class="login" action="#" method="post">
        <input type="text" name="usuario" value="">
        <input type="password" name="clave" value="">
        <button type="button" name="button">Entrar</button>
        <a href="#" class="boton">Registrarse</a>
      </form>
    </div>
  </main>

  <footer>
    <ul>
      <li>Franco Cagliolo</li>
      <li>Programacion III</li>
      <li>2017</li>
    </ul>
  </footer>
  </body>
</html>
